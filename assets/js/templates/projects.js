const menuLinks = document.querySelectorAll(".js-href");
const resetCurrent = document.querySelector(".page-title");
const handlePagelinks = () => {
    menuLinks.forEach(link => {
        link.addEventListener("click", (e) => {
            e.preventDefault();
            resetCurrent.classList.remove("current");
            menuLinks.forEach(all => {
                all.classList.remove("current");
            });
            const active = e.currentTarget;
            if (active) {
                link.classList.add("current");
            };
            const href = link.getAttribute("href");
            document.querySelector(href).scrollIntoView({
                behavior: "smooth"
            });
        });
    });
    resetCurrent.addEventListener("click", () => {
        resetCurrent.classList.add("current");
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
        menuLinks.forEach(all => {
            all.classList.remove("current");
        });
    });
};

const images = document.querySelectorAll(".gallery-wrapper img, .video-wrapper video");
const texts = document.querySelectorAll(".info-wrapper, .headline-data");
const overlays = document.querySelectorAll(".overlay");
const handleBlur = (images, texts, overlays) => {
    images.forEach(img => {
        img.addEventListener("click", () => {
            images.forEach(img => {
                img.classList.add("unblur");
            });
            texts.forEach(txt => {
                txt.classList.add("blur");
            });
            overlays.forEach(overlay => {
                overlay.classList.add("on");
            });
        });
    });
    overlays.forEach(overlay => {
        overlay.addEventListener("click", () => {
            images.forEach(img => {
                img.classList.remove("unblur");
            });
            texts.forEach(txt => {
                txt.classList.remove("blur");
            });
            overlays.forEach(overlay => {
                overlay.classList.remove("on");
            });
        });
    });
};

const handleHeight = () => {
    const sections = document.querySelectorAll(".section-wrapper");
    sections.forEach(section => {
        const sectionText = section.querySelector(".info-section");
        const sectionImages = section.querySelector(".gallery-section");
        const textHeight = sectionText.clientHeight;
        const imagesHeight = sectionImages.clientHeight;
        if (textHeight > imagesHeight) {
            sectionImages.style.setProperty("--section-height", `${textHeight}px`);
        } else {
            sectionText.style.setProperty("--section-height", `${imagesHeight}px`);
        };
    });
};

handlePagelinks(menuLinks, resetCurrent);
handleBlur(images, texts, overlays);
window.addEventListener("resize", handleHeight);
handleHeight();