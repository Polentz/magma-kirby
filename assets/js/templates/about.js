const aboutOpener = document.querySelector(".about-popup-open");
const aboutPopup = document.getElementById("trasparenza");
const aboutCloser = aboutPopup.querySelector(".popup-close");
const handleAboutPopup = () => {
    aboutOpener.addEventListener("click", () => {
        aboutPopup.classList.toggle("show");
    });
    aboutCloser.addEventListener("click", () => {
        aboutPopup.classList.remove("show");
    });
};

handleAboutPopup();