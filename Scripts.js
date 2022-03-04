//the placeholder holder
var c;
//the id of the morada
var cc;
//the innerHTML of morada
var ccc;
//input id
var input;

//this is for the list.js
var options = {
    valueNames: ['nome', 'categoria']
};

var FirmList = new List('firms', options);
//this is for the list.js

//functions for search input
function focuss(x) {
    c = x.placeholder;
    x.placeholder = "";
}

function blurr(x) {
    x.placeholder = c;
}

function Category(ategory) {
    input = document.getElementById('searchinput');
    input.value = '';
    input.value = ategory.innerHTML;
    document.getElementById('searchinput').focus();
    var ev = new KeyboardEvent('keyup', {
        altKey: false,
        bubbles: true,
        cancelBubble: false,
        cancelable: true,
        charCode: 0,
        code: "Enter",
        composed: true,
        ctrlKey: false,
        currentTarget: null,
        defaultPrevented: true,
        detail: 0,
        eventPhase: 0,
        isComposing: false,
        isTrusted: true,
        key: "Enter",
        keyCode: 13,
        location: 0,
        metaKey: false,
        repeat: false,
        returnValue: false,
        shiftKey: false,
        type: "keyup",
        which: 13
    });

    input.dispatchEvent(ev);
}
//functions for search input

//buttons 'maps' function
function Mapy(x) {
    cc = x.id - 1;
    ccc = document.getElementById(cc).innerHTML;
    window.location.href = "https://www.google.com/maps/place/" + ccc + '/';
}
//buttons 'maps' function