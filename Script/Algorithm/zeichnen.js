
/* zeichneAlg.js */
export function zeichneUndMarkiereVergleichen(arr, cell_for_id, cell_id, arr_length) {
    // Zeile erstellen
    const tr = document.createElement("tr");
    tr.classList.add("array-border");
    tr.classList.add("fs-4");
    tr.classList.add("text-center");
    tr.classList.add("oldSolution");

    // Zellen erstellen
    for (let i=0; i<arr_length; i++) { 
        const td = document.createElement("td");
        td.classList.add("array-td");
        td.setAttribute('id','tcf'+cell_for_id+'_i'+i);
        td.innerHTML += arr[i];
        tr.appendChild(td);
    }

    const bodySchritte = document.getElementById("input_calculation");
    bodySchritte.appendChild(tr);

    const element = document.getElementById('tcf'+cell_for_id+'_i'+cell_id);
    const element2 = document.getElementById('tcf'+cell_for_id+'_i'+(cell_id+1));
    element.style.backgroundColor = "yellow";
    element2.style.backgroundColor = "yellow";
}

export function markiereTauschen(arr, for_counter, i) {
    const element = document.getElementById('tcf'+for_counter+'_i'+i);
    const element2 = document.getElementById('tcf'+for_counter+'_i'+(i+1));
    element.innerHTML = '<u>'+arr[i]+'</u>';
    element2.innerHTML = '<u>'+arr[i+1]+'</u>';
}

export function zeichneAlgErgebnis(arr, arr_length) {
    const tr = document.createElement("tr");
    tr.classList.add("array-border");
    tr.classList.add("fs-4");
    tr.classList.add("text-center");

    // Zellen erstellen
    for (let i=0; i<arr_length; i++) { 
        const td = document.createElement("td");
        td.classList.add("array-td");
        td.classList.add("oldSolutionArray");
        td.innerHTML += arr[i];
        td.style.backgroundColor = "#F0F8FF";
        tr.appendChild(td);
    }

    const bodyErgebnis = document.getElementById("input_solution");
    bodyErgebnis.appendChild(tr);
}

// in andere Datei transferieren
export function zeichneErsteInformationen(arrVal, arr_length) {
    for (let i=0; i<arr_length; i++) {
        const el = document.getElementById("array-td-"+i);
        el.style.backgroundColor = "#F0F8FF";
        el.innerHTML = arrVal[i];
    }
}

export function zeichneEingaben(arrVal) {
    const el = document.getElementById("input_algorithm");
    const el2 = document.getElementById("input_array");
    
    el.innerHTML = "Bubblesort"; // noch dynamisch anpassen
    el2.innerHTML = arrVal;
}