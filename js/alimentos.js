function init() {
    loadData();
    setupButtons();
}

function loadData() {
    const storedTickets = localStorage.getItem('selectedTickets');
    const selectedMovie = JSON.parse(localStorage.getItem('selectedMovie'));
    document.querySelector('.movie-summary img').setAttribute('src', selectedMovie.cover);

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
        window.location.href = 'agendar.php';
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

// Función para manejar el botón de "Continuar"
function setupButtons() {
    const continueButton = document.querySelector('#continuar-pago');
    continueButton.addEventListener('click', function () {
        const storedTickets = localStorage.getItem('selectedTickets');
        const storedSeatsData = localStorage.getItem('selectedSeatsData');

        // Convertir el carrito a un array para almacenamiento
        const selectedFood = Object.keys(cart).map(foodId => ({
            id: foodId,
            name: cart[foodId].name,
            quantity: cart[foodId].quantity,
            totalPrice: cart[foodId].totalPrice
        }));

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
                total: total,
                food: selectedFood,
                totalTickets: JSON.parse(localStorage.getItem('selectedTickets')).totalTickets,
            };

            // Guardar los datos en localStorage
            localStorage.setItem('cart', JSON.stringify(dataToSave));

            // Redirigir a la página de pago
            window.location.href = 'agendar.php?p=pago';
        } else {
            alert('Faltan datos necesarios. Por favor, regresa y completa la selección.');
        }
    });


    document.querySelector('#popcorn').addEventListener('click', function() {
        document.querySelector('#popcorn .sq-decorative').style.height = '0px';
        document.querySelector('#popcorn .square-icon').style.display = 'none';
        document.querySelector('#popcorn .square-title').style.display = 'none';
        document.querySelector('#popcorn .sq-content').style.height = '100%';
    });

    document.querySelector('#drink').addEventListener('click', function() {
        document.querySelector('#drink .sq-decorative').style.height = '0px';
        document.querySelector('#drink .square-icon').style.display = 'none';
        document.querySelector('#drink .square-title').style.display = 'none';
        document.querySelector('#drink .sq-content').style.height = '100%';
    });

    document.querySelector('#candy').addEventListener('click', function() {
        document.querySelector('#candy .sqm-decorative').style.height = '0px';
        document.querySelector('#candy .square-mid-icon').style.display = 'none';
        document.querySelector('#candy .square-title').style.display = 'none';
        document.querySelector('#candy .sqm-content').style.height = '100%';
    });

    document.querySelector('#snacks').addEventListener('click', function() {
        document.querySelector('#snacks .sqm-decorative').style.height = '0px';
        document.querySelector('#snacks .square-mid-icon').style.display = 'none';
        document.querySelector('#snacks .square-title').style.display = 'none';
        document.querySelector('#snacks .sqm-content').style.height = '100%';
    });

    document.querySelector('.return').addEventListener('click', () =>{
        window.location.href = 'agendar.php?p=asientos';
    });
}

const cart = {}; // Objeto para almacenar los alimentos seleccionados

document.addEventListener('DOMContentLoaded', () => {
    const foodTable = document.getElementById('food-table');

    // Función para actualizar la tabla de alimentos
    function updateFoodTable() {
        // Limpia la tabla
        foodTable.innerHTML = '';

        // Itera sobre los elementos del carrito y los agrega a la tabla
        for (const [foodId, foodData] of Object.entries(cart)) {
            const row = document.createElement('tr');
            row.setAttribute('data-id', foodId); // Asigna el id del producto a la fila
            row.innerHTML = `
                <td>${foodData.name}</td>
                <td>x${foodData.quantity}</td>
                <td class="table-price">$${foodData.totalPrice}</td>
            `;
            foodTable.appendChild(row);
        }
    }

    // Función para manejar el clic en los botones "+"
    function addFood(event) {
        const foodItem = event.target.closest('.sqc-item');
        const foodId = foodItem.id; // Obtén la id del producto
        const foodName = foodItem.querySelector('.sqci-title').innerText;
        const foodPrice = parseFloat(foodItem.querySelector('.sqci-price').innerText.replace('$', ''));

        // Si el alimento ya está en el carrito, aumenta la cantidad y recalcula el precio
        if (cart[foodId]) {
            if (cart[foodId].quantity < 10) {
                cart[foodId].quantity++;
                cart[foodId].totalPrice = cart[foodId].quantity * foodPrice;
            }
        } else {
            // Si no está, lo agrega con cantidad inicial de 1
            cart[foodId] = {
                name: foodName,
                quantity: 1,
                unitPrice: foodPrice,
                totalPrice: foodPrice
            };
        }

        updateFoodTable();
    }

    // Función para manejar el clic en los botones "-"
    function removeFood(event) {
        const foodItem = event.target.closest('.sqc-item');
        const foodId = foodItem.id; // Obtén la id del producto

        if (cart[foodId]) {
            if (cart[foodId].quantity > 1) {
                cart[foodId].quantity--;
                cart[foodId].totalPrice = cart[foodId].quantity * cart[foodId].unitPrice;
            } else {
                // Si la cantidad es 1, lo elimina del carrito
                delete cart[foodId];
            }
        }

        updateFoodTable();
    }

    // Añade event listeners a los botones "+" y "-"
    document.querySelectorAll('.sqci-plus').forEach(button => {
        button.addEventListener('click', addFood);
    });

    document.querySelectorAll('.sqci-minus').forEach(button => {
        button.addEventListener('click', removeFood);
    });

    const { food } = JSON.parse(localStorage.getItem('cart'));

    if (food && food.length > 0) {
        food.forEach(item => {
            // Rellena el carrito con los alimentos almacenados
            cart[item.id] = {
                name: item.name,
                quantity: item.quantity,
                unitPrice: item.totalPrice / item.quantity,
                totalPrice: item.totalPrice
            };
        });
    }
    updateFoodTable();
});

