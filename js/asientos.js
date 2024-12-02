function init() {
    loadData();
    continueListener();
}

document.addEventListener("DOMContentLoaded", () => {
    const totalTickets = JSON.parse(localStorage.getItem('selectedTickets')).totalTickets; // Carga el total de tickets
    const selectedSeats = []; // Lista de asientos seleccionados
    const seatTable = document.querySelector("#seats-table-tbody"); // Tabla donde se mostrarán las IDs seleccionadas

    // Función para actualizar la tabla con los IDs seleccionados
    const updateSeatTable = () => {
        seatTable.innerHTML = `<tr><td>${selectedSeats.join(', ')}</td></tr>`;
    };

    // Función para añadir un asiento seleccionado
    const selectSeat = (seat) => {
        if (selectedSeats.length >= totalTickets) {
            // Remueve el asiento más antiguo si se supera el límite
            const removedSeatId = selectedSeats.shift();
            const removedSeat = document.querySelector(`#${removedSeatId}`);
            removedSeat.style.filter = ""; // Restaura estilos
            removedSeat.style.zIndex = "";
            removedSeat.classList.remove('selected'); // Elimina la clase 'selected'
        }
        selectedSeats.push(seat.id);
        seat.style.filter = "invert(0.5) sepia(1) saturate(100) hue-rotate(349deg)";
        seat.style.zIndex = "44";
        seat.classList.add('selected'); // Agrega la clase 'selected'
        updateSeatTable();
    };

    // Función para deseleccionar un asiento
    const deselectSeat = (seat) => {
        const index = selectedSeats.indexOf(seat.id);
        if (index > -1) {
            selectedSeats.splice(index, 1); // Elimina el asiento de la lista
            seat.style.filter = ""; // Restaura estilos
            seat.style.zIndex = "";
            seat.classList.remove('selected'); // Elimina la clase 'selected'
            updateSeatTable();
        }
    };

    // Evento para manejar clicks en asientos
    document.querySelectorAll(".seat").forEach(seat => {
        seat.addEventListener("click", () => {
            if (selectedSeats.includes(seat.id)) {
                deselectSeat(seat);
            } else {
                selectSeat(seat);
            }
        });
    });

    // Inicializa la tabla con un valor vacío
    updateSeatTable();

    document.querySelector('.return').addEventListener('click', () =>{
        window.location.href = 'agendar.php?p=ticket';
    });
});


function continueListener() {
    document.getElementById('continuar-asientos').addEventListener('click', function () {
        // Recuperar los datos de los tickets desde el localStorage
        const storedTickets = JSON.parse(localStorage.getItem('selectedTickets'));
        if (!storedTickets) {
            alert('Hubo un error al guardar los datos. Por favor, intente realizar el proceso desde el principio.');
            return;
        }

        const totalTickets = storedTickets.totalTickets;

        // Verificar si la cantidad de asientos seleccionados coincide con la cantidad de tickets
        const selectedSeats = Array.from(document.querySelectorAll('.seat.selected')); // Asume que los asientos seleccionados tienen esta clase
        if (selectedSeats.length < totalTickets) {
            alert(
                `Advertencia: Usted ha seleccionado ${selectedSeats.length} de ${totalTickets} asientos. Asegúrese de seleccionarlos todos.`
            );
            return;
        }

        // Obtener la información de la película
        const movieTitle = document.getElementById('selected-title')?.textContent || 'Título no disponible';
        const movieTime = document.getElementById('selected-time')?.textContent || 'Hora no disponible';

        // Obtener los IDs de los asientos seleccionados
        const selectedSeatIds = selectedSeats.map((seat) => seat.dataset.id);

        // Crear un objeto con los datos para guardar en localStorage
        const dataToSave = {
            movie: {
                title: movieTitle,
                time: movieTime,
            },
            tickets: storedTickets.tickets,
            subtotal: storedTickets.subtotal,
            taxes: storedTickets.taxes,
            total: storedTickets.total,
            selectedSeats: selectedSeatIds, // Asientos seleccionados
        };

        // Guardar los datos en localStorage
        localStorage.setItem('selectedSeatsData', JSON.stringify(dataToSave));

        // Redirigir al siguiente paso
        window.location.href = 'agendar.php?p=alimentos'; // Cambiar la URL según tu flujo
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
        window.location.href = 'agendar.php?p=tickets';
    }
}