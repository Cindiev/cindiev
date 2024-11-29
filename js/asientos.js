function init() {
    loadData();    
}

function loadData(){
    const storedTickets = localStorage.getItem('selectedTickets');
    if (storedTickets) {
        const { movie, tickets } = JSON.parse(storedTickets);

        // Actualizar la información de la película
        document.querySelector('.summary-title').textContent = movie.title;
        document.querySelector('.summary-details').textContent = movie.details;
        document.querySelector('.summary-date').textContent = movie.time;

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

        // Calcular y mostrar el total
        const subtotal = tickets.reduce((sum, ticket) => sum + (ticket.quantity * ticket.price), 0);
        const taxes = subtotal * 0.15; // Ejemplo de impuestos: 15%
        const total = subtotal + taxes;

        const subtotalRow = `
            <tr>
                <td class="subtotal">Subtotal</td>
                <td></td>
                <td class="table-price">$${subtotal}</td>
            </tr>
        `;
        tableBody.insertAdjacentHTML('beforeend', subtotalRow);

        document.querySelector('.footer-text.sub').textContent = `Impuestos: $${taxes}`;
        document.querySelector('.footer-text').textContent = `Total: $${total}`;
    } else {
        alert('No se encontraron datos de tickets. Regresando...');
        window.location.href = 'tickets.php';
    }
}