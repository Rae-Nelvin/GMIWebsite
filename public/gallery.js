const images = document.querySelectorAll(".images img");

const modal = document.querySelector(".mymodal");
const modalImg = document.querySelector(".mymodalImg");
const modalTxt = document.querySelector(".mymodalTxt");
const close = document.querySelector(".close");

images.forEach((image) => {
    image.addEventListener("click", () => {
        modalImg.src = image.src;
        modalTxt.innerHTML = image.alt;
        modal.classList.add("appear");

        close.addEventListener("click", ()=> {
            modal.classList.remove("appear");
        });
    });
});