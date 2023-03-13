const cursor = document.getElementById("cursor");
const innerCursor = cursor.querySelector(".inner-cursor");
const defaultCursorElements = document.querySelectorAll("a, img, .menu-close, .overlay, .menu-link");

document.addEventListener("mousemove", (event) => {
    let x = event.pageX;
    let y = event.pageY;
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
    defaultCursorElements.forEach(el => {
        el.addEventListener("mouseenter", () => {
            innerCursor.style.transform = "scale(.97)";
        });
        el.addEventListener("mouseleave", () => {
            innerCursor.style.transform = "scale(0)";
        });
    });
});