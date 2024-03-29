const covers = document.querySelectorAll(".headline-cover");
const images = document.querySelectorAll(".headline-cover img");
const texts = document.querySelectorAll(".headline-data");
const overlay = document.querySelector(".overlay");
const handleBlur = (covers, texts, overlay) => {
    covers.forEach(img => {
        let randomPos = Math.floor(Math.random() * 75);
        img.style.setProperty("--random-position", `${randomPos}` + "%");
    });
    images.forEach(img => {
        img.addEventListener("click", () => {
            images.forEach(img => {
                img.classList.toggle("unblur");
            });
            texts.forEach(txt => {
                txt.classList.toggle("blur");
            });
            overlay.classList.add("on");
        });
    })
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

const handleTitleHOverEffect = (events) => {
    events.forEach(event => {
        const title = event.querySelector(".headline-data .title h2");
        const cover = event.querySelector(".headline-cover img");
        title.addEventListener("mouseenter", () => {
            if (cover) {
                cover.classList.add("unblur");
            }
        });
        title.addEventListener("mouseleave", () => {
            if (cover) {
                cover.classList.remove("unblur");
            }
        });
    });
};

const filters = document.querySelectorAll(".filter");
const events = document.querySelectorAll(".headline-block");
const resetFilters = document.querySelectorAll(".page-title");
const handleFilters = (filters, element, resetFilters, elements) => {
    filters.forEach(filter => {
        filter.addEventListener("click", (e) => {
            resetFilters.forEach(reset => {
                reset.classList.remove("current");
            });
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
    resetFilters.forEach(reset => {
        reset.addEventListener("click", () => {
            reset.classList.add("current");
            elements.forEach(el => {
                el.classList.add("unfiltered");
                el.classList.remove("unfiltered");
            });
            filters.forEach(all => {
                all.classList.remove("current");
            });
            window.scrollTo({
                top: 0,
                left: 0,
                behavior: "smooth",
            });
        });
    });
};

handleBlur(covers, texts, overlay);
handleTitleHOverEffect(events);
handleFilters(filters, events, resetFilters, events);