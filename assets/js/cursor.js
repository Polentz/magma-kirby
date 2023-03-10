const cursor = document.getElementById("cursor");
const innerCursor = cursor.querySelector(".inner-cursor");
const defaultCursorElements = document.querySelectorAll("a, img, .menu-close, .overlay, .menu-link, h2");

document.addEventListener("mousemove", (event) => {
    let x = event.pageX;
    let y = event.pageY;
    cursor.style.left = x + "px";
    cursor.style.top = y + "px";
    // let w = document.body.clientWidth;
    // const xP = x / w * 100;
    // const xX = xP.toFixed(0);
    // if (xX >= 0 && xX <= 25) {
    //     cursor.style.backgroundColor = "rgb(0, 200, 255)";
    // } else if (xX >= 25 && xX <= 50) {
    //     cursor.style.backgroundColor = "rgb(140, 90, 255)";
    // } else if (xX >= 50 && xX <= 75) {
    //     cursor.style.backgroundColor = "pink";
    // } else if (xX >= 75 && xX <= 100) {
    //     cursor.style.backgroundColor = "aqua";
    // };
    defaultCursorElements.forEach(el => {
        el.addEventListener("mouseenter", () => {
            innerCursor.style.transform = "scale(1)";
        });
        el.addEventListener("mouseleave", () => {
            innerCursor.style.transform = "scale(0)";
        });
    });
});