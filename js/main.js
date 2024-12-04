function concatAmPm(time){
    let hours = parseInt(time.split(':')[0], 10);
    let period = hours >= 12 ? "PM" : "AM";
    return `${time} ${period}`;
}
document.addEventListener("DOMContentLoaded", () => {
    const eyeIcon = document.getElementById('header-icon');
    if (eyeIcon != null) {
        document.getElementById('header-icon').addEventListener('click', ()=>{
            localStorage.clear();
            window.location.href = 'index.php';
        });
    }

    const cindiev = document.getElementById('header-logo');
    if (cindiev != null) {
        cindiev.addEventListener('click', ()=> {
            window.location.href = 'index.php';
        });    
    }
});