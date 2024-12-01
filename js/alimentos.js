function init() {
    loadData();
    setupContinueButton();
}

function loadData() {
    const storedTickets = localStorage.getItem('selectedTickets');
    if (storedTickets) {
        const { movie, tickets, subtotal, taxes, total } = JSON.parse(storedTickets);

        // Actualizar la información de la película
        document.getElementById('selected-title').textContent = movie.title;
        document.querySelector('.summary-details').textContent = movie.details;
        document.getElementById('selected-time').textContent = movie.time;

        // Actualizar la tabla de tickets
        const tableBody = document.querySelector('.table tbody');
        tableBody.innerHTML = ''; // Limpiar contenido previo

        tickets.forEach(ticket => {
            if (ticket.quantity > 0) {
                const row = `
                    <tr>
                        <td>${ticket.type}</td>
                        <td>x${ticket.quantity}</td>
                        <td class="table-price">$${ticket.quantity * ticket.price}</td>
                    </tr>
                `;
                tableBody.insertAdjacentHTML('beforeend', row);
            }
        });

        // Mostrar subtotal
        const subtotalRow = `
            <tr>
                <td class="subtotal">Subtotal</td>
                <td></td>
                <td class="table-price">$${subtotal}</td>
            </tr>
        `;
        tableBody.insertAdjacentHTML('beforeend', subtotalRow);

        // Mostrar impuestos
        document.getElementById('taxes-value').textContent = `Impuestos: $${taxes}`;

        // Mostrar total
        document.getElementById('total-value').textContent = `Total: $${total}`;
    } else {
        alert('No se encontraron datos de tickets. Regresando...');
        window.location.href = 'tickets.php';
    }

    // Cargar los asientos seleccionados desde localStorage
    const storedSeatsData = localStorage.getItem('selectedSeatsData');
    if (storedSeatsData) {
        const { selectedSeats } = JSON.parse(storedSeatsData);

        // Verificar si hay asientos seleccionados
        if (selectedSeats.length > 0) {
            const seatsTableBody = document.getElementById('seats-table');
            seatsTableBody.innerHTML = ''; // Limpiar contenido previo

            selectedSeats.forEach(seatId => {
                const row = `
                    <tr>
                        <td>${seatId}</td> <!-- Aquí mostramos el ID del asiento -->
                    </tr>
                `;
                seatsTableBody.insertAdjacentHTML('beforeend', row);
            });
        } else {
            console.log('No se han seleccionado asientos.');
        }
    } else {
        console.log('No se encontraron datos de asientos en localStorage.');
    }
}

// Función para manejar el botón de "Continuar"
function setupContinueButton() {
    const continueButton = document.querySelector('.btn.register');
    continueButton.addEventListener('click', function() {
        // Obtener la información necesaria para guardar
        const storedTickets = localStorage.getItem('selectedTickets');
        const storedSeatsData = localStorage.getItem('selectedSeatsData');

        if (storedTickets && storedSeatsData) {
            const { movie, tickets, subtotal, taxes, total } = JSON.parse(storedTickets);
            const { selectedSeats } = JSON.parse(storedSeatsData);

            // Crear un objeto con todos los datos que queremos guardar
            const dataToSave = {
                movie: movie,
                tickets: tickets,
                seats: selectedSeats,
                subtotal: subtotal,
                taxes: taxes,
                total: total
            };

            // Guardar los datos en localStorage
            localStorage.setItem('orderData', JSON.stringify(dataToSave));

            // Redirigir a la página de pago
            window.location.href = 'agendar.php?p=pago';
        } else {
            alert('Faltan datos necesarios. Por favor, regresa y completa la selección.');
        }
    });
}
