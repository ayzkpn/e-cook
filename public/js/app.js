const title = document.querySelector("h2");
const txt = "Learn to Cook With us !";

function typewriter(word, index) {
    if (index < word.length) {
        setTimeout(() => {
            title.innerHTML += `<span>${word[index]}</span>`
            typewriter(txt, index + 1)
        }, 300);
    }
}
setTimeout(() => {
    typewriter(txt, 0)
}, 100);