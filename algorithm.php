<?php
    include 'Sicherheit/links.php';
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Matthes Böttcher">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>algorithm</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../Style/header.css">
    <link rel="icon" href="https://weristmatthes.de/Assets/M.png">
    <link rel="stylesheet" href="Style/algorithm.css">
</head>
<body>
    <?php include header; ?>
    <div class="container">
        Algorithm: Sequential-Bubble-Sort (A)
            fori ← 1 to length [A] do
            for j ← length [A] down-to i +1 do
            if A[A] < A[j-1] then
                Exchange A[j] ⟷ A[j-1]



        Bubble Sort
        Shell Sort
        Dijkstra-Algorithmus
        Insertionsort
        Merge-Sort
        Quicksort
        Floyd-Warshall-Algorithmus
        Interpolationssuche
        Countingsort
        Hashing - lineares sondieren
        Double Hashing
        Brents Algorithmus (Hashing)
        Coalesced Hashing
        Heapsort
        Binäre Suche

        <div class="img">
            <img src="./bubblesort.png" width=350px height=auto>
        </div>
        
        <div class="container d-flex justify-content-center text-center mt-5">
            <div class="row">
                <div class="row input-container border border-danger p-3 rounded">
                    <input type="number" id="inp_0" class="num_input col col-sm" oninput="jumpToNextInputField(this)" />
                    <input type="number" id="inp_1" class="num_input col col-sm" oninput="jumpToNextInputField(this)" />
                    <input type="number" id="inp_2" class="num_input col col-sm" oninput="jumpToNextInputField(this)" />
                    <input type="number" id="inp_3" class="num_input col col-sm" oninput="jumpToNextInputField(this)" />
                    <input type="number" id="inp_4" class="num_input col col-sm" oninput="jumpToNextInputField(this)" />
                    <input type="number" id="inp_5" class="num_input col col-sm" oninput="jumpToNextInputField(this)" />
                    <input type="number" id="inp_6" class="num_input col col-sm" oninput="jumpToNextInputField(this)" />
                    <input type="number" id="inp_7" class="num_input col col-sm" oninput="jumpToNextInputField(this)" />
                    <input type="number" id="inp_8" class="num_input col col-sm" oninput="jumpToNextInputField(this)" />
                    <input type="number" id="inp_9" class="num_input col col-sm" oninput="jumpToNextInputField(this)" />

                    <div class="row input-container border border-danger p-3 rounded">
                        <input type="number" id="inp_0" class="num_input col"/>
                        <input type="number" id="inp_1" class="num_input col"/>
                        <input type="number" id="inp_2" class="num_input col"/>
                        <input type="number" id="inp_3" class="num_input col"/>
                        <input type="number" id="inp_4" class="num_input col"/>
                        <input type="number" id="inp_5" class="num_input col"/>
                        <input type="number" id="inp_6" class="num_input col"/>
                        <input type="number" id="inp_7" class="num_input col"/>
                        <input type="number" id="inp_8" class="num_input col"/>
                        <input type="number" id="inp_9" class="num_input col"/>
                    </div>
                </div>
                <div>
                    <label for="submit_arr_btn">Ich möchte die Sortierung</label>
                    <br>
                    <input type="submit" class="btn btn-primary" id="submit_arr_btn" value="Algorithmisieren" onclick="saveInput()">
                </div>
            </div>
        </div>

        <div class="container">
            <table class="">
                <tr class="array-border array-value-placeholder fs-4 text-center">
                    <td class="array-td oldMainArr" id="array-td-0"></td>
                    <td class="array-td oldMainArr" id="array-td-1"></td>
                    <td class="array-td oldMainArr" id="array-td-2"></td>
                    <td class="array-td oldMainArr" id="array-td-3"></td>
                    <td class="array-td oldMainArr" id="array-td-4"></td>
                    <td class="array-td oldMainArr" id="array-td-5"></td>
                    <td class="array-td oldMainArr" id="array-td-6"></td>
                    <td class="array-td oldMainArr" id="array-td-7"></td>
                    <td class="array-td oldMainArr" id="array-td-8"></td>
                    <td class="array-td oldMainArr" id="array-td-9"></td>
                </tr>
                <tr class="text-center text-small">
                    <td id="array-tl-0">A</td>
                    <td id="array-tl-1">B</td>
                    <td id="array-tl-2">C</td>
                    <td id="array-tl-3">D</td>
                    <td id="array-tl-4">E</td>
                    <td id="array-tl-5">F</td>
                    <td id="array-tl-6">G</td>
                    <td id="array-tl-7">H</td>
                    <td id="array-tl-8">I</td>
                    <td id="array-tl-9">J</td>
                </tr>
            </table>

            <div class="mt-4">
                <p class="mb-0">Schritte:</p>
                <table id="alg_schritte"></table>
            </div>

            <div class="mt-4">
                <p class="mb-0">Ergebnis:</p>
                <h4 id="arr_ans"></h4>
            </div>
        </div>
    </div>
    <?php include footer; ?>
        <script type="application/x-javascript" src="Script/Algorithm/saveInput.js"></script>
        <script type="application/x-javascript" src="Script/Algorithm/BubbleSort.js"></script>
        <script type="application/x-javascript" src="Script/Algorithm/inputForm.js"></script>
        <script type="application/x-javascript" src="Script/Algorithm/zeichnen.js"></script>
        <script type="application/x-javascript" src="Script/ButtonListeners/headerfooter.js"></script>
</body>
</html>