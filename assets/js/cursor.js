const cursor = document.getElementById("cursor");
const innerCursor = cursor.querySelector(".inner-cursor");
const changeCursorMedia = document.querySelectorAll("img, video, .overlay");
const changeCursorLinks = document.querySelectorAll("a, .menu-link, .page-title.home, .page-title.projects");
const changeCursorSvgs = document.querySelectorAll(".menu-close");

const handleCursor = () => {
    document.addEventListener("mousemove", (event) => {
        let x = event.pageX;
        let y = event.pageY;
        cursor.style.display = "block";
        cursor.style.left = x + "px";
        cursor.style.top = y + "px";
        // let w = document.body.clientWidth;
        // const xP = x / w * 100;
        // const xX = xP.toFixed(0);
        // if (xX >= 0 && xX <= 25) {
        //     cursor.style.backgroundColor = " ";
        // } else if (xX >= 25 && xX <= 50) {
        //     cursor.style.backgroundColor = " ";
        // } else if (xX >= 50 && xX <= 75) {
        //     cursor.style.backgroundColor = " ";
        // } else if (xX >= 75 && xX <= 100) {
        //     cursor.style.backgroundColor = " ";
        // };
        changeCursorMedia.forEach(el => {
            el.addEventListener("mouseenter", () => {
                cursor.style.opacity = ".5";
                cursor.style.zIndex = "9";
            });
            el.addEventListener("mouseleave", () => {
                cursor.style.opacity = "1";
                cursor.style.zIndex = "-1";
            });
        });
        changeCursorLinks.forEach(el => {
            el.addEventListener("mouseenter", () => {
                innerCursor.style.transform = "scale(1)";
                el.style.color = "var(--bg-color)";
                el.style.mixBlendMode = "difference";
            });
            el.addEventListener("mouseleave", () => {
                innerCursor.style.transform = "scale(0)";
                el.style.color = "var(--txt-color)";
                el.style.mixBlendMode = "unset";
            });
        });
        changeCursorSvgs.forEach(el => {
            el.addEventListener("mouseenter", () => {
                innerCursor.style.transform = "scale(1)";
                el.style.stroke = "var(--bg-color)";
                el.style.mixBlendMode = "difference";
            });
            el.addEventListener("mouseleave", () => {
                innerCursor.style.transform = "scale(0)";
                el.style.stroke = "var(--txt-color)";
                el.style.mixBlendMode = "unset";
            });
        });
    });
};

const handleMediaQuery = (x) => {
    if (x.matches) {
        cursor.style.display = "none";
    } else {
        handleCursor();
    };
};

const x = window.matchMedia("(max-width: 720px)");
window.addEventListener("resize", handleMediaQuery(x));
handleMediaQuery(x);
x.addListener(handleMediaQuery);