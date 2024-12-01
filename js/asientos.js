let selectedSeats = []; // Definimos el array que almacenará los asientos seleccionados


function init() {
    loadData();
    addSeatsListeners();
    // Función que se llama cuando un asiento es seleccionado
    document.querySelectorAll('.seat').forEach(seat => {
        seat.addEventListener('click', function() {
            // Verificamos si el asiento ya está seleccionado
            if (selectedSeats.includes(seat)) {
                // Si está seleccionado, lo desmarcamos
                //seat.style.border = ''; // Eliminar el estilo visual de selección
                selectedSeats = selectedSeats.filter(item => item !== seat); // Eliminar del array
            } else {
                // Si no está seleccionado, lo marcamos
                //seat.style.border = '2px solid red'; // Estilo visual de selección
                selectedSeats.push(seat); // Añadir al array
            }
        });
    });

    continueListener();
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
}

function addSeatsListeners() {
    const seats = document.querySelectorAll('.seat-box img');
    const ticketData = JSON.parse(localStorage.getItem('selectedTickets'));
    const ticketLimit = ticketData ? ticketData.totalTickets : 0;
    
    let selectedSeats = [];

    function updateSeatsTable() {
        const seatsTable = document.getElementById('seats-table');
        seatsTable.innerHTML = ''; // Limpiar la tabla antes de actualizarla

        if (selectedSeats.length > 0) {
            let seatRow = '';
            let rowSeats = [];

            selectedSeats.forEach((seat, index) => {
                rowSeats.push(seat.dataset.id); // Usar el ID del asiento (A1, B2, etc.)

                if (rowSeats.length === 3 || index === selectedSeats.length - 1) {
                    seatRow += `<tr><td>${rowSeats.join(', ')}</td></tr>`;
                    rowSeats = [];
                }
            });

            seatsTable.innerHTML = seatRow;
        }
    }

    seats.forEach(seat => {
        seat.addEventListener('click', () => {
            const seatId = seat.dataset.id;

            if (selectedSeats.includes(seat)) {
                seat.style.filter = ''; 
                seat.style.zIndex = ''; 
                selectedSeats = selectedSeats.filter(s => s !== seat);
            } else {
                if (selectedSeats.length >= ticketLimit) {
                    const firstSeat = selectedSeats.shift();
                    firstSeat.style.filter = ''; 
                    firstSeat.style.zIndex = ''; 
                }
                seat.style.filter = 'invert(0.5) sepia(1) saturate(100) hue-rotate(349deg)';
                seat.style.zIndex = '44';
                selectedSeats.push(seat);
            }

            updateSeatsTable();
        });

        const seatLabel = seat.id;
        seat.setAttribute('data-id', seatLabel); 
    });
}

function continueListener() {
    document.getElementById('continuar-asientos').addEventListener('click', function() {
        // Verificar si hay asientos seleccionados
        if (selectedSeats.length === 0) {
            alert('Por favor, seleccione al menos un asiento.');
            return;
        }
    
        // Recuperar los datos de los tickets desde el localStorage
        const storedTickets = localStorage.getItem('selectedTickets');
        if (!storedTickets) {
            alert('No se ha seleccionado ningún ticket');
            return;
        }
    
        const ticketData = JSON.parse(storedTickets);
    
        // Obtener la información de la película (esto debería estar disponible o ser parte de la página)
        const movieTitle = document.getElementById('selected-title').textContent;
        const movieTime = document.getElementById('selected-time').textContent;
    
        // Obtener los IDs de los asientos seleccionados
        const selectedSeatIds = selectedSeats.map(seat => seat.dataset.id);
    
        // Crear un objeto con todos los datos que vamos a guardar
        const dataToSave = {
            movie: {
                title: movieTitle,
                time: movieTime,
            },
            tickets: ticketData.tickets,
            subtotal: ticketData.subtotal,
            taxes: ticketData.taxes,
            total: ticketData.total,
            selectedSeats: selectedSeatIds, // Asientos seleccionados
        };
    
        // Guardar el objeto en el localStorage
        localStorage.setItem('selectedSeatsData', JSON.stringify(dataToSave));
    
        // Redirigir al siguiente paso (puedes cambiar esta línea según sea necesario)
        window.location.href = 'agendar.php?p=alimentos'; // Cambia 'nextStepPage.php' por la siguiente página de tu flujo.
    });
}
