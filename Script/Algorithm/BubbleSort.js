
import { zeichneUndMarkiereVergleichen, markiereTauschen } from './zeichnen.js';
/* BubbleSort.js */
let arr = [];
let arrLength = 0;
let for_counter = 0;
let warSortiert = false;

export function startBubblen(arrVal, newArrLength) {
    arr = arrVal;
    arrLength = newArrLength;
    bubbleIt();
}

function bubbleIt() {
    do {
        warSortiert = true;
        for (let i=0; i<(arrLength-1); i++) {
            zeichneUndMarkiereVergleichen(arr, for_counter, i, arrLength);
            if (arr[i] > arr[i+1]) {
                warSortiert = false;
                markiereTauschen(arr, for_counter, i);
                vertausche(i, i+1);
            }
            for_counter++;
        }
    } while (!warSortiert);

}

function vertausche(i, j) {
    let h = arr[i];
    arr[i] = arr[j];
    arr[j] = h;
}

export function getSolution() {
    return arr;
}