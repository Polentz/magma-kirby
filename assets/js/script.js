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

const covers = document.querySelectorAll(".event-cover");
const texts = document.querySelectorAll(".event-data");
const overlay = document.querySelector(".overlay")
const handleBlur = (covers, texts, overlay) => {
    covers.forEach(img => {
        let randomLeft = Math.floor(Math.random() * 75);
        img.style.setProperty("--random-left", `${randomLeft}` + "%");
        img.addEventListener("click", () => {
            covers.forEach(img => {
                img.classList.toggle("unblur");
            });
            texts.forEach(txt => {
                txt.classList.toggle("blur");
            });
            overlay.style.display = "block";
        });
    });
    overlay.addEventListener("click", () => {
        covers.forEach(img => {
            img.classList.remove("unblur");
        });
        texts.forEach(txt => {
            txt.classList.remove("blur");
        });
        overlay.style.display = "none";
    });
};

const filters = document.querySelectorAll(".filter");
const events = document.querySelectorAll(".event-block");
const resetFilters = document.querySelector(".page-title")
const handleFilters = (filters, element, resetFilters, elements) => {
    filters.forEach(filter => {
        filter.addEventListener("click", (e) => {
            filters.forEach(all => {
                all.classList.remove("current");
            });
            const activeFilter = e.currentTarget;
            if (activeFilter) {
                filter.classList.add("current");
            };
            const filterName = e.currentTarget.dataset.filter;
            element.forEach(el => {
                const elementTag = el.dataset.filter;
                if (elementTag.includes(filterName)) {
                    el.classList.add("filtered");
                } else {
                    el.classList.remove("filtered");
                    el.classList.add("unfiltered");
                };
            });
        });
    });
    resetFilters.addEventListener("click", () => {
        elements.forEach(el => {
            el.classList.add("unfiltered");
            el.classList.remove("unfiltered");
        });
        filters.forEach(all => {
            all.classList.remove("current");
        });
    });
};

// const titleEvent = document.querySelectorAll(".event-data .title h2");
const handleTitleHOverEffect = (events) => {
    events.forEach(event => {
        const title = event.querySelector(".event-data .title h2");
        const cover = event.querySelector(".event-cover");
        title.addEventListener("mouseenter", () => {
            cover.classList.add("unblur");
        });
        title.addEventListener("mouseleave", () => {
            cover.classList.remove("unblur");
        });
    });
};

handleFilters(filters, events, resetFilters, events);
handleSubmenu(menuOpen, submenu, menuClose);
handleBlur(covers, texts, overlay);
handleTitleHOverEffect(events)