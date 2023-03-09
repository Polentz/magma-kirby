const images = document.querySelectorAll(".gallery-wrapper img, .gallery-wrapper video");
const texts = document.querySelectorAll(".info-wrapper");
const title = document.querySelector(".title");
const handleBlur = (images, texts, title) => {
    images.forEach(img => {
        img.addEventListener("click", () => {
            images.forEach(img => {
                img.classList.toggle("unblur");
            });
            texts.forEach(txt => {
                txt.classList.toggle("blur");
            });
            title.style.cursor = "pointer";
        });
    });
    title.addEventListener("click", () => {
        images.forEach(img => {
            img.classList.remove("unblur");
        });
        texts.forEach(txt => {
            txt.classList.remove("blur");
        });
        title.style.cursor = "auto";
    });
};

handleBlur(images, texts, title);