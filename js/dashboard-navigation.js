// Navigation
function openNav() {
    document.getElementById("side-panel").style.width = "180px";
    document.getElementById("booking-main").style.marginLeft = "200px";
}

function closeNav() {
    document.getElementById("side-panel").style.width = "0";
    if (window.innerWidth < 420) {
        document.getElementById("booking-main").style.marginLeft = "10px";
    } else {
        document.getElementById("booking-main").style.marginLeft = "50px";
    }
}
