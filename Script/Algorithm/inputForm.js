
const input = document.querySelectorAll(".num_input");

input.forEach(input => {
    input.addEventListener("keydown", (event) => {
        if (event.key === "Backspace") { 
            jumpToPreviousInputField(input);
        }
        jumpToNextInputField(input);
    });
});


function jumpToNextInputField(input) {
    if (input.value.length > 0) {
        let next = input.nextElementSibling;
        if (next && next.tagName === "INPUT") {
            next.focus();
        }
        if (next) {
            console.log("next: "+next);
        }
        if (next.tagName === "INPUT") {
            console.log("tagName: "+next.tagName);
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
