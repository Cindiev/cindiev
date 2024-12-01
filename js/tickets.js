function init() {
    loadData();
    setupTicketButtons();
    addLocalStorage();
}

function loadData() {
    const selectedMovie = JSON.parse(localStorage.getItem('selectedMovie'));

    if (selectedMovie) {
        const timeDisplay = document.getElementById('selected-time');
        const titleDisplay = document.getElementById('selected-title');
        const detailsDisplay = document.querySelector('.summary-details');

        timeDisplay.textContent = selectedMovie.schedule;
        titleDisplay.textContent = selectedMovie.title;
        detailsDisplay.textContent = selectedMovie.details;
    } else {
        console.error("No se encontraron datos de la película seleccionada en localStorage.");
        window.location.href = "index.php?p=billboard";
    }
}

function addLocalStorage() {
    document.getElementById('continuar-tickets').addEventListener('click', () => {
        // Obtenemos la información de la película
        const selectedMovie = {
            title: document.getElementById('selected-title').textContent,
            details: document.querySelector('.summary-details').textContent,
            time: document.getElementById('selected-time').textContent,
        };

        // Obtenemos los tickets seleccionados
        const selectedTickets = Array.from(document.querySelectorAll('.ticket-item')).map(item => ({
            type: item.querySelector('.ticket-name').textContent,
            quantity: parseInt(item.querySelector('.selector-value').textContent),
            price: parseInt(item.querySelector('.ticket-price').textContent.replace('$', ''))
        }));

        // Calculamos el subtotal (suma de los precios por cantidad)
        let subtotal = 0;
        selectedTickets.forEach(ticket => {
            subtotal += ticket.price * ticket.quantity;
        });

        // Calculamos el total (sumando impuestos)
        const taxes = subtotal * 0.16;  // 16% de impuestos
        const total = subtotal + taxes;

        // Calculamos la cantidad total de tickets
        const totalTickets = selectedTickets.reduce((total, ticket) => total + ticket.quantity, 0);

        // Almacenamos toda la información en localStorage
        const ticketData = {
            movie: selectedMovie,
            tickets: selectedTickets,
            subtotal: subtotal,
            taxes: taxes,
            total: total,
            totalTickets: totalTickets
        };

        localStorage.setItem('selectedTickets', JSON.stringify(ticketData));

        // Redirigimos a la página de asientos
        window.location.href = 'agendar.php?p=asientos';
    });
}


function setupTicketButtons() {
    const ticketItems = document.querySelectorAll('.ticket-item');

    ticketItems.forEach((item) => {
        const plusButton = item.querySelector('.plus-button');
        const minusButton = item.querySelector('.minus-button');
        const selectorValue = item.querySelector('.selector-value');
        const ticketName = item.querySelector('.ticket-name').textContent;
        const ticketPrice = parseInt(item.querySelector('.ticket-price').textContent.replace('$', ''));
        const isPromo = item.getAttribute('data-promo') === "true"; // Detecta si es promocional

        plusButton.addEventListener('click', () => {
            const currentValue = parseInt(selectorValue.textContent);
            selectorValue.textContent = currentValue + 1;
            updateCartTable(ticketName, ticketPrice, parseInt(selectorValue.textContent), isPromo);
        });

        minusButton.addEventListener('click', () => {
            const currentValue = parseInt(selectorValue.textContent);
            if (currentValue > 0) {
                selectorValue.textContent = currentValue - 1;
                updateCartTable(ticketName, ticketPrice, parseInt(selectorValue.textContent), isPromo);
            }
        });
    });
}


function updateTotals() {
    const tableBody = document.querySelector('.table tbody');
    if (!tableBody) {
        console.error("El contenedor del carrito no existe.");
        return;
    }

    const rows = tableBody.querySelectorAll('tr[data-ticket]');
    let subtotal = 0;
    let totalTickets = 0;

    // Calcular el subtotal y el total de entradas
    rows.forEach((row) => {
        const priceCell = row.querySelector('.table-price');
        const quantityCell = row.querySelector('.ticket-quantity');

        const price = parseInt(priceCell.textContent.replace('$', '')) || 0;
        const quantity = parseInt(quantityCell.textContent.replace('x', '')) || 0;

        subtotal += price;
        totalTickets += quantity;
    });

    const taxes = subtotal * 0.16;

    // Actualizar los textos usando IDs
    const taxesElement = document.getElementById('taxes-value');
    const totalElement = document.getElementById('total-value');
    const ticketsElement = document.getElementById('total-tickets');

    if (taxesElement) {
        taxesElement.textContent = `Impuestos: $${taxes.toFixed(2)}`;
    }

    if (totalElement) {
        totalElement.textContent = `Total: $${subtotal}`;
    }

    if (ticketsElement) {
        ticketsElement.textContent = `Total de entradas: ${totalTickets}`;
    }
}

function updateCartTable(ticketName, ticketPrice, quantity, isPromo) {
    const tableBody = document.querySelector('.table tbody');
    const ticketType = isPromo ? `${ticketName} (Promo)` : ticketName; // Diferenciar los tickets promocionales
    let row = tableBody.querySelector(`tr[data-ticket="${ticketType}"]`);

    if (quantity === 0) {
        if (row) {
            row.remove();
        }
    } else {
        if (!row) {
            row = document.createElement('tr');
            row.setAttribute('data-ticket', ticketType);
            row.innerHTML = `
                <td>${ticketType}</td>
                <td class="ticket-quantity">x${quantity}</td>
                <td class="table-price">$${ticketPrice * quantity}</td>
            `;
            tableBody.appendChild(row);
        } else {
            row.querySelector('.ticket-quantity').textContent = `x${quantity}`;
            row.querySelector('.table-price').textContent = `$${ticketPrice * quantity}`;
        }
    }

    updateTotals();
}
