const documentHeight = () => {
    const doc = document.documentElement
    doc.style.setProperty("--doc-height", `${window.innerHeight}px`)
};
window.addEventListener("resize", documentHeight);
documentHeight();


const menuOpen = document.getElementById("menu-open");
const menuClose = document.getElementById("menu-close");
const submenu = document.querySelector(".submenu");
const handleSubmenu = (open, submenu, close) => {
    open.addEventListener("click", () => {
        submenu.classList.toggle("show");
        close.classList.toggle("show");
    });
    close.addEventListener("click", () => {
        submenu.classList.remove("show");
        close.classList.remove("show");
    });
};

handleSubmenu(menuOpen, submenu, menuClose);