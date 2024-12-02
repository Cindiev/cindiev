document.addEventListener("DOMContentLoaded", function () {
    const contentDiv = document.getElementById("content-panel");
    var curPage = contentDiv.dataset.name;
    switch (curPage) {
        case 'funciones':
            var navItem = document.getElementById("funcs-nav");
            navItem.classList.remove('disabled-icon');
            break;
        case 'ticket':
            var navItem = document.getElementById("tickets-nav");
            navItem.classList.remove('disabled-icon');
            break;
        case 'asientos':
            var navItem = document.getElementById("tickets-nav");
            navItem.classList.remove('disabled-icon');
            console.log("asientos");
            break;
        case 'alimentos':
            var navItem = document.getElementById("food-nav");
            navItem.classList.remove('disabled-icon');
            break;
        case 'pago':
            var navItem = document.getElementById("pay-nav");
            navItem.classList.remove('disabled-icon');
            break;
        default:
            break;
    }
});

