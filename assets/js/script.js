const documentHeight = () => {
    const doc = document.documentElement
    doc.style.setProperty("--doc-height", `${window.innerHeight}px`)
};
window.addEventListener("resize", documentHeight);
documentHeight();

const menuOpen = document.getElementById("menu-open");
const menuClose = document.getElementById("menu-close");
const submenu = document.querySelector(".submenu");
const handleMenu = (open, submenu, close) => {
    open.addEventListener("click", () => {
        submenu.classList.toggle("show");
        close.classList.toggle("show");
    });
    close.addEventListener("click", () => {
        submenu.classList.remove("show");
        close.classList.remove("show");
    });
};

const unblurOnScroll = () => {
    const images = document.querySelectorAll(".gallery-wrapper img, .headline-cover img, .gallery-wrapper video");
    for (let i = 0; i < images.length; i++) {
        const windowHeight = window.innerHeight;
        const elementTop = images[i].getBoundingClientRect().top;
        const elementVisible = 100;
        if (elementTop < windowHeight - elementVisible) {
            images[i].classList.add("scroll-unblur");
        } else {
            images[i].classList.remove("scroll-unblur");
        };
    };
};

const opener = document.querySelectorAll(".popup-open");
const popup = document.getElementById("support");
const closer = popup.querySelector(".popup-close");
const handlePopup = () => {
    opener.forEach(btn => {
        btn.addEventListener("click", () => {
            popup.classList.toggle("show");
        });
    });
    closer.addEventListener("click", () => {
        popup.classList.remove("show");
    });
};

handleMenu(menuOpen, submenu, menuClose);
window.addEventListener("scroll", unblurOnScroll);
unblurOnScroll();
handlePopup();