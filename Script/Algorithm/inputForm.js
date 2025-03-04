
const input = document.querySelectorAll(".num_input");

input.forEach(input => { // Tastatur-Listener
    input.addEventListener("keydown", (event) => {
        if (event.key === "Backspace") { 
            jumpToPreviousInputField(input);
        }
        else if (typeof event.key === 'number') { // was brauche ich um eine Eingabe herauszufinden?
            jumpToNextInputField(input);
        }
            
    });
});

function jumpToNextInputField(input) {
    if (input.value.length > 0) {
        let next = input.nextElementSibling;
        if (next && next.tagName === "INPUT") {
            next.focus();
        }
    }
}

function jumpToPreviousInputField(input) {
    if (input.value.length <= 0) {
        let previous = input.previousElementSibling;
        if (previous && previous.tagName === "INPUT") {
            previous.focus();
        }
    }
}
