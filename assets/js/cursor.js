const cursor = document.getElementById("cursor");
// const innerCursor = cursor.querySelector(".inner-cursor");
const changeCursorMedia = document.querySelectorAll("img, video, .overlay");
const changeCursorLinks = document.querySelectorAll("a, .menu-link, .page-title.home, .page-title.projects, .menu-close");

const handleCursor = () => {
    document.addEventListener("mousemove", (event) => {
        let y = event.pageY;
        let x = event.pageX;
        cursor.style.display = "block";
        cursor.style.top = y + "px";
        cursor.style.left = x + "px";
        changeCursorMedia.forEach(el => {
            el.addEventListener("mouseenter", () => {
                cursor.classList.add("change-z-index");
            });
            el.addEventListener("mouseleave", () => {
                cursor.classList.remove("change-z-index");
            });
        });
        changeCursorLinks.forEach(el => {
            el.addEventListener("mouseenter", () => {
                cursor.classList.add("change-background");
            });
            el.addEventListener("mouseleave", () => {
                cursor.classList.remove("change-background");
            });
        });
    });
    document.addEventListener("mouseout", () => {
        cursor.style.display = "none";
    })
};

handleCursor();