function init(){
    loadData();
    setupButtons();
    panelIndex = 1;
}

function loadData() {
    const storedTickets = localStorage.getItem('cart');
    const selectedMovie = JSON.parse(localStorage.getItem('selectedMovie'));
    document.querySelector('.purchase img').setAttribute('src', selectedMovie.cover);
    document.querySelector('.completion img').setAttribute('src', selectedMovie.cover);

    if (storedTickets) {
        const { movie, tickets, food, subtotal, taxes, total, totalTickets } = JSON.parse(storedTickets);

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

        // Información de la compra
        document.getElementById('purchase-total-tickets').textContent = `x${totalTickets} Tickets`;


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
            <tr><tr><tr><tr>
            <tr>
                <td class="subtotal">Subtotal</td>
                <td></td>
                <td class="table-price">$${subtotal}</td>
            </tr>
        `;
        tableBody.insertAdjacentHTML('beforeend', subtotalRow);
        document.getElementById('purchase-total-tickets-price').textContent = `$${subtotal} MXN`;

        // Mostrar impuestos
        //document.getElementById('taxes-value').textContent = `Impuestos: $${taxes}`;

        // Mostrar total
        //document.getElementById('total-value').textContent = `Total: $${total}`;

        // Actualizar la tabla de alimentos
        const foodTableBody = document.querySelector('#food-table');
        foodTableBody.innerHTML = ''; // Limpiar contenido previo

        if (food && food.length > 0) {
            food.forEach(food => {
                const foodRow = `
                    <tr>
                        <td>${food.name}</td>
                        <td>x${food.quantity}</td>
                        <td class="table-price">$${food.totalPrice}</td>
                    </tr>
                `;
                foodTableBody.insertAdjacentHTML('beforeend', foodRow);
            });
        } else {
            const emptyRow = `
                <tr>
                    <td colspan="3" class="text-center">No se seleccionaron alimentos.</td>
                </tr>
            `;
            foodTableBody.insertAdjacentHTML('beforeend', emptyRow);
        }


        // Mostrar total de alimentos si es necesario
        const totalFoods = food?.reduce((acc, food) => acc + (food.totalPrice), 0) || 0;
        const totalFoodsRow = `
            <tr><tr><tr><tr>
            <tr>
                <td class="subtotal">Subtotal</td>
                <td></td>
                <td class="table-price">$${totalFoods}</td>
            </tr>
        `;
        foodTableBody.insertAdjacentHTML('beforeend', totalFoodsRow);
        document.getElementById('purchase-total-food-price').textContent = `$${totalFoods} MXN`;

        var endingTotal = subtotal + totalFoods;
        document.getElementById('final-total').textContent = `$${endingTotal} MXN`;
        document.getElementById('final-taxes').textContent = `$${endingTotal * 0.16} MXN`;

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
var panelIndex = 1;

function setupButtons(){

    document.getElementById('continue-payment').addEventListener('click', function () {
        document.getElementById('purchase-container').style.display = 'none';
        document.getElementById('payment-container').style.display = 'block';
        panelIndex = 2;
    });

    document.getElementById('continue-method').addEventListener('click', function () {
        document.getElementById('payment-container').style.display = 'none';
        document.getElementById('completion-container').style.display = 'block';
        panelIndex = 3;
    });

    document.querySelector('.return').addEventListener('click', () =>{
        console.log("hi");
        switch (panelIndex) {
            case 3:
                document.getElementById('purchase-container').style.display = 'none';
                document.getElementById('completion-container').style.display = 'none';
                document.getElementById('payment-container').style.display = 'block';
                panelIndex = 2;
                break;
            case 2:
                document.getElementById('purchase-container').style.display = 'block';
                document.getElementById('payment-container').style.display = 'none';
                panelIndex = 1;
                break;
            case 1:
                window.location.href = 'agendar.php?p=alimentos';
                break;
            default:
                break;
        }
    });
    
    document.getElementById('download-default').addEventListener('click', function () {
        domtoimage
        .toPng(document.getElementById('print'), { quality: 1 })
        .then(function (dataUrl) {
            var link = document.createElement('a');
            link.download = 'tickets';
            link.href = dataUrl;
            link.click();
        });
    });
    document.getElementById('download-button').addEventListener('click', function () {
        domtoimage
        .toPng(document.getElementById('print'), { quality: 1 })
        .then(function (dataUrl) {
            var link = document.createElement('a');
            link.download = 'tickets';
            link.href = dataUrl;
            link.click();
        });
    });

}


document.addEventListener('DOMContentLoaded', () => {
    const image = document.querySelector('.hover-effect');
    const THRESHOLD = 35;

    if (image) { // Verifica que el elemento exista
        function handleHover(e) {
            const { clientX, clientY, currentTarget } = e;
            const { clientWidth, clientHeight } = currentTarget;
            const offsetLeft = currentTarget.getBoundingClientRect().left;
            const offsetTop = currentTarget.getBoundingClientRect().top;

            const horizontal = (clientX - offsetLeft) / clientWidth;
            const vertical = (clientY - offsetTop) / clientHeight;

            const rotateX = (THRESHOLD / 2 - horizontal * THRESHOLD).toFixed(2);
            const rotateY = (vertical * THRESHOLD - THRESHOLD / 2).toFixed(2);

            image.style.transform = `rotateX(${rotateY}deg) rotateY(${rotateX}deg) scale(1.05)`;
        }

        function resetStyles() {
            image.style.transform = 'rotateX(0deg) rotateY(0deg) scale(1)';
        }

        image.addEventListener('mousemove', handleHover);
        image.addEventListener('mouseleave', resetStyles);
    } else {
        console.error('No se encontró el elemento con la clase .hover-effect');
    }
});
