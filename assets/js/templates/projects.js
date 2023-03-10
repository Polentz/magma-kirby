const menuLinks = document.querySelectorAll(".js-href");
const resetCurrent = document.querySelector(".page-title");
const handlePagelinks = () => {
    menuLinks.forEach(link => {
        link.addEventListener("click", (e) => {
            e.preventDefault();
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
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
        menuLinks.forEach(all => {
            all.classList.remove("current");
        });
    });
};

const images = document.querySelectorAll(".gallery-wrapper img, .gallery-wrapper video");
const texts = document.querySelectorAll(".info-wrapper");
const titles = document.querySelectorAll(".title");
const handleBlur = (images, texts) => {
    images.forEach(img => {
        img.addEventListener("click", () => {
            images.forEach(img => {
                img.classList.toggle("unblur");
            });
            texts.forEach(txt => {
                txt.classList.toggle("blur");
            });
            titles.forEach(title => {
                title.style.cursor = "pointer";
            })
        });
    });
    titles.forEach(title => {
        title.addEventListener("click", () => {
            images.forEach(img => {
                img.classList.remove("unblur");
            });
            texts.forEach(txt => {
                txt.classList.remove("blur");
            });
            title.style.cursor = "none";
        });
    });
};

const projects = document.querySelectorAll(".section-wrapper");
const handleHeight = () => {
    projects.forEach(project => {
        const sectionText = project.querySelector(".info-section");
        const sectionImages = project.querySelector(".gallery-section");
        const textHeight = sectionText.offsetHeight;
        let sectionHeight = textHeight;
        console.log(sectionHeight);
        sectionImages.style.setProperty("--section-height", `${sectionHeight}px`);
    });
};

handleBlur(images, texts);
handlePagelinks(menuLinks, resetCurrent);
window.addEventListener("resize", handleHeight);
handleHeight();