function openNav() {
    if (window.innerWidth < 820) {
        if (window.innerWidth < 480) {
            document.getElementById("main").style.marginLeft = "20px";
        } else {
            document.getElementById("main").style.marginLeft = "100px";

        }
        document.getElementById("side-panel").style.width = "180px";
    } else {
        document.getElementById("side-panel").style.width = "270px";
        document.getElementById("main").style.marginLeft = "250px";
    }
}

function closeNav() {
    document.getElementById("side-panel").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
}