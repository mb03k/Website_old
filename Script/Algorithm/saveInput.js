

let arrVal = [];

function saveInput() {
    removeOldSolutions();
    for (let i=0; i<10; i++) {
        let inputFieldNum = Number(document.getElementById('inp_'+i).value);
        if (!inputFieldNum) {
            continue;
        }
        arrVal.push(inputFieldNum);
    }

    if (arrVal.length == 0) {
        console.log("Du bist aber lustig!");
    } else {
        writeArrayValuesInDOM();
        startBubblen(arrVal); // Funktion in BubbleSort.js
    }
    console.log("Mein Array vor []: "+arrVal);
    arrVal = [];
    console.log("Mein Array NACH []: "+arrVal);
}

function writeArrayValuesInDOM() {
    let arrLength = arrVal.length;
    // n/10 Feldern beschreiben
    for (let i=0; i<arrLength; i++) {
        const arrPlaceholder = document.getElementById("array-td-"+i);

        if (arrPlaceholder) {
            arrPlaceholder.innerHTML = arrVal[i];
        } // Bug: eingegebenes Array wird nicht aktualisiert wenn man neue Werte eingibt
    }
    // restliche Felder entfernen
    for (let i=arrLength; i<10; i++) {
        const notUsedTableCell = document.getElementById('array-td-'+i);
        const notUsedTableLabel = document.getElementById('array-tl-'+i);

        if (notUsedTableCell) {
            console.log("cell ist da");
            notUsedTableCell.remove();
        }
        if (notUsedTableLabel) {
            console.log("label ist da");
            notUsedTableLabel.remove();
        }
    }
}

function jumpToNext(input) {
    if (input.value.length > 0) {
        let next = input.nextElementSibling;
        if (next && next.tagName === "INPUT") {
            next.focus(); // Springe zum nächsten Feld
        }
    }
}

function removeOldSolutions() {
    alg_schritte
    const e  = document.getElementById('alg_schritte');
    if (e) {
        e.innerHTML = "";
    }
}