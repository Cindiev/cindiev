let selectedSeats = []; // Definimos el array que almacenará los asientos seleccionados

function init() {
    loadData();
    setupButtons();
    // Función que se llama cuando un asiento es seleccionado
    document.querySelectorAll('.seat').forEach(seat => {
        seat.addEventListener('click', function() {
            // Verificamos si el asiento ya está seleccionado
            if (selectedSeats.includes(seat)) {
                // Si está seleccionado, lo desmarcamos
                selectedSeats = selectedSeats.filter(item => item !== seat); // Eliminar del array
            } else {
                // Si no está seleccionado, lo marcamos
                selectedSeats.push(seat); // Añadir al array
            }
        });
    });

    continueListener();
}



function setupButtons() {
    const seats = document.querySelectorAll('.seat-box img');
    const ticketData = JSON.parse(localStorage.getItem('selectedTickets'));
    const ticketLimit = ticketData ? ticketData.totalTickets : 0;

    let funcSelectedSeats = []; // Array global para almacenar los asientos seleccionados

    function updateSeatsTable() {
        const seatsTable = document.getElementById('seats-table');
        seatsTable.innerHTML = ''; // Limpiar la tabla antes de actualizarla

        if (funcSelectedSeats.length > 0) {
            let seatRow = '';
            let rowSeats = [];

            funcSelectedSeats.forEach((seat, index) => {
                rowSeats.push(seat.dataset.id); // Usar el ID del asiento (A1, B2, etc.)
                if (rowSeats.length === 11 || index === funcSelectedSeats.length - 1) {
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

            if (funcSelectedSeats.includes(seat)) {
                // Deseleccionar asiento
                seat.style.filter = ''; 
                seat.style.zIndex = ''; 
                funcSelectedSeats = funcSelectedSeats.filter(s => s !== seat); // Eliminar del array
            } else {
                if (funcSelectedSeats.length >= ticketLimit) {
                    // Quitar el primer asiento seleccionado (FIFO) si excedemos el límite
                    const firstSeat = funcSelectedSeats.shift();
                    firstSeat.style.filter = ''; 
                    firstSeat.style.zIndex = ''; 
                }
                // Seleccionar nuevo asiento
                seat.style.filter = 'invert(0.5) sepia(1) saturate(100) hue-rotate(349deg)';
                seat.style.zIndex = '44';
                funcSelectedSeats.push(seat); // Agregar al array
            }
            selectedSeats = funcSelectedSeats;
            updateSeatsTable(); // Actualizar la tabla de asientos seleccionados
        });

        // Agregar atributo de ID al asiento
        const seatLabel = seat.id;
        seat.setAttribute('data-id', seatLabel); 
    });

    // Botón de retorno
    document.querySelector('.return').addEventListener('click', () => {
        window.location.href = 'agendar.php?p=ticket';
    });
}


function continueListener() {
    document.getElementById('continuar-asientos').addEventListener('click', function() {

        // Recuperar los datos de los tickets desde el localStorage
        const storedTickets = JSON.parse(localStorage.getItem('selectedTickets'));
        if (!storedTickets) {
            alert('Hubo un error al guardar los datos. Porfavor intente realizar el proceso desde el principio');
            return;
        }
        
        // Verificar si hay asientos seleccionados
        if (selectedSeats.length < storedTickets.totalTickets) {
            alert('Advertencia: Usted ha seleccionado ' 
                +selectedSeats.length+' de ' + storedTickets.totalTickets + 
                ' asientos. Asegúrese de seleccionarlos todos');
            return;
        }
    
        const ticketData = JSON.parse(localStorage.getItem('selectedTickets'));
    
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