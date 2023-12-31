const phrases = ["Designer,", "Ilustradora,", "Web Designer,", "Criativa,", "Front-end,", "Nikkoin Design,", "Nicole H."];
const typeDelay = 100; // delay between typing each character in ms
const deleteDelay = 50; // delay before deleting each character in ms
const nextPhraseDelay = 2000; // delay before starting to type the next phrase in ms
const loopDelay = 200; // delay between loops in ms

let currentPhraseIndex = 0;
let isDeleting = false;
let currentText = "";
let typeTimeoutId = null;

function type() {
    const currentPhrase = phrases[currentPhraseIndex];
    currentText = isDeleting
    ? currentPhrase.substring(0, currentText.length - 1)
    : currentPhrase.substring(0, currentText.length + 1);
    document.getElementById("typewriter").textContent = currentText;

    if (!isDeleting && currentText === currentPhrase) {
    isDeleting = true;
    typeTimeoutId = setTimeout(() => {
        type();
    }, nextPhraseDelay);
    } else if (isDeleting && currentText === "") {
    isDeleting = false;
    currentPhraseIndex = (currentPhraseIndex + 1) % phrases.length;
    typeTimeoutId = setTimeout(() => {
        type();
    }, loopDelay);
    } else {
    typeTimeoutId = setTimeout(() => {
        type();
    }, isDeleting ? deleteDelay : typeDelay);
    }
}
type();

