
import { startBubblen, getSolution} from "./BubbleSort.js";
import { zeichneAlgErgebnis, zeichneErsteInformationen, zeichneEingaben } from "./zeichnen.js";
window.saveInput = saveInput; // Funktion für onclick() erreichbar machen
window.randomise = randomise; 

/* saveInput.js */
let arrVal = [];
let arr_length = 0;

export function saveInput() {
    for (let i=0; i<10; i++) {
        let inputFieldNum = Number(document.getElementById('inp_'+i).value);

        // keine Zahl eingegeben
        if (!inputFieldNum) {
            continue;
        }
        arrVal.push(inputFieldNum);
    }

    arr_length = arrVal.length;

    if (!arr_length) { // nichts eingegeben
        console.log("Du bist aber lustig!");
    } else {
        removeOldSolutions();
        zeichneErsteInformationen(arrVal, arr_length);
        zeichneEingaben(arrVal);
        startBubblen(arrVal, arr_length); // Funktion in BubbleSort.js
        let arr=getSolution();
        zeichneAlgErgebnis(arr, arr_length);
    }

    arrVal = [];
}


export function randomise() {
    for (let i=0; i<10; i++) {
        let randNum = Math.floor(Math.random() * 10); // Zahl von 0-10
        let randPrintCheck = Math.floor(Math.random() * 10);
        const el = document.getElementById("inp_"+i);
        if (randPrintCheck % 2 == 0 || randPrintCheck < 5) {
            el.value = randNum;
        } else {
            el.value = "";
        }
    }
}

function removeOldSolutions() {
    resestMainArr();
    removeSteps("oldSolution");
    removeSolution();
}

function resestMainArr() {
    for (let i=0; i<10; i++) {
        const el = document.getElementById("array-td-"+i);
        el.innerHTML = "";
        el.style.backgroundColor = "white";
    }
}

function removeSteps(className) {
    const elements = document.getElementsByClassName(className);

    while(elements.length > 0){
        elements[0].parentNode.removeChild(elements[0]);
    }
}

function removeSolution() {
    let table = document.getElementById("input_solution");

    while (table.firstChild) {
        table.removeChild(table.firstChild);
    }
}