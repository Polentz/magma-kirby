const images = document.querySelectorAll(".gallery-wrapper img, .video-wrapper figure");
const texts = document.querySelectorAll(".info-wrapper, .headline-data");
const overlay = document.querySelector(".overlay");
const handleBlur = (images, texts, overlay) => {
    images.forEach(img => {
        img.addEventListener("click", () => {
            images.forEach(img => {
                img.classList.add("unblur");
            });
            texts.forEach(txt => {
                txt.classList.add("blur");
            });
            overlay.classList.add("on");
        });
    });
    overlay.addEventListener("click", () => {
        images.forEach(img => {
            img.classList.remove("unblur");
        });
        texts.forEach(txt => {
            txt.classList.remove("blur");
        });
        overlay.classList.remove("on");
    });
};

const sectionText = document.querySelector(".info-section");
const sectionImages = document.querySelector(".gallery-section");
const handleHeight = () => {
    const textHeight = sectionText.clientHeight;
    const imagesHeight = sectionImages.clientHeight;
    if (textHeight > imagesHeight) {
        sectionImages.style.setProperty("--section-height", `${textHeight}px`);
    } else {
        sectionText.style.setProperty("--section-height", `${imagesHeight}px`);
    };
};

handleBlur(images, texts, overlay);
window.addEventListener("resize", handleHeight);
handleHeight();