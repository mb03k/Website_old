
let arr = [];
let warSortiert = false;
let row_counter = 0;
let for_counter = 1;

function startBubblen(arrVal) {
    arr = arrVal;
    bubbleIt();
}

function bubbleIt() {
    do {
        warSortiert = true;
        for (let i=0; i<(arr.length-1); i++) {
            zeichneSchrittVergleichen(i);
            if (arr[i] > arr[i+1]) {
                warSortiert = false;
                vertausche(i, i+1);
                markTauschen(i)
            }
        }
        for_counter++;
    } while (!warSortiert);
    showAnswerInDOM();
}

function vertausche(i, j) {
    let h = arr[i];
    arr[i] = arr[j];
    arr[j] = h;
}

function zeichneSchrittVergleichen(vergleichIndex) {
    // Tabelle erstellen
    const tr = document.createElement("tr");
    tr.classList.add("array-border");
    tr.classList.add("fs-4");
    tr.classList.add("text-center");

    // Zellen erstellen
    for (let i=0; i<arr.length; i++) { 
        const td = document.createElement("td");
        td.classList.add("array-td");
        td.setAttribute('id','tr'+row_counter+'_i'+i);
        td.innerHTML += arr[i];
        tr.appendChild(td);
    }

    const bodySchritte = document.getElementById("alg_schritte");
    bodySchritte.appendChild(tr);

    markVergleichen(vergleichIndex);
    row_counter++;
}

function markVergleichen(vergleichIndex) {
    const element = document.getElementById('tr'+row_counter+'_i'+vergleichIndex);
    element.style.backgroundColor = "yellow";

    const element2 = document.getElementById('tr'+row_counter+'_i'+(vergleichIndex+1));
    element2.style.backgroundColor = "yellow";
}

function markTauschen(tauschIndex) {
    const element = document.getElementById('tr'+(row_counter-1)+'_i'+tauschIndex);
    element.innerHTML = '<u>'+arr[tauschIndex+1]+'</u>';

    const element2 = document.getElementById('tr'+(row_counter-1)+'_i'+(tauschIndex+1));
    element2.innerHTML = '<u>'+arr[tauschIndex]+'</u>';
    row_counter++;
}

function showAnswerInDOM() {
    const bubbleAnswer = document.getElementById('arr_ans');
    bubbleAnswer.innerHTML = arr;
}
