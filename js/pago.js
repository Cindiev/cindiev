function init(){
    loadData();
}

function loadData() {
    const storedTickets = localStorage.getItem('selectedTickets');
    if (storedTickets) {
        const { movie, tickets, subtotal, taxes, total } = JSON.parse(storedTickets);

        // 1st Panel
        document.getElementById('r-mtitle').innerHTML = `${movie.title}`;
        document.getElementById('r-mdetail').innerHTML = `${movie.details}`;
        document.getElementById('r-start').innerHTML = 'A las ' + concatAmPm(movie.time);

        // Informacion Superior
        document.getElementById('movie-info').innerHTML = '';
        document.getElementById('movie-info').innerHTML = `${movie.title} <div>${movie.details}</div>`;


        // Información en el ticket
        document.getElementById('t-title').textContent = movie.title;
        document.getElementById('t-end').textContent = movie.time;

        // Actualizar la tabla de tickets
        var tableBody = document.querySelector('#ticket-table');
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
        //document.getElementById('taxes-value').textContent = `Impuestos: $${taxes}`;

        // Mostrar total
        //document.getElementById('total-value').textContent = `Total: $${total}`;
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
            var row = ``;
            selectedSeats.forEach(seatId => {
                row += `${seatId}, `;
            });
            row = row.slice(0, -2);
            seatsTableBody.insertAdjacentHTML('beforeend', `<tr><td>${row}</td></tr>`);
        } else {
            console.log('No se han seleccionado asientos.');
        }
    } else {
        console.log('No se encontraron datos de asientos en localStorage.');
    }
}



