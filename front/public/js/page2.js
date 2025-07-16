const triggerButtons = document.querySelectorAll(".offcanvas-trigger");

const offcanvas = document.querySelector("#offcanvas-menu")

triggerButtons.forEach(button => {
    button.addEventListener("click", () => {
        offcanvas.classList.toggle("active");
    });
})

const counterText = document.querySelector("#counter");
let counter = 0;

counterText.addEventListener("click", () => {
    counter++;
    counterText.innerText = counter;
});