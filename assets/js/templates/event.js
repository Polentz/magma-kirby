const images = document.querySelectorAll(".gallery-wrapper img, .gallery-wrapper video");
const texts = document.querySelectorAll(".info-wrapper");
const handleBlur = (images, texts) => {
    images.forEach(img => {
        img.addEventListener("click", () => {
            images.forEach(img => {
                img.classList.toggle("unblur");
            });
            texts.forEach(txt => {
                txt.classList.toggle("blur");
            });
        });
    });
};

handleBlur(images, texts);