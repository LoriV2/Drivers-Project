var c;
var cc;
var ccc;

function focuss(x) {
    c = x.placeholder;
    x.placeholder = "";
}

function blurr(x) {
    x.placeholder = c;
}

function Mapy(x) {
    cc = x.id - 1;
    ccc = document.getElementById(cc).innerHTML;
    window.location.href = "https://www.google.com/maps/place/" + ccc + '/';
}