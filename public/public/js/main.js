$(document).ready(() => {
    $(".toolbar__btn").click((e) => {
        e.preventDefault();
        $(".toolbar__menu").toggleClass("toolbar__menu--active");
        $(".wuc-nav").removeClass("wuc-nav--active");
        $(".wuc-search").removeClass("wuc-search--active");
    });

    $(".header__nav-btn").click((e) => {
        e.preventDefault();
        $(".wuc-nav").toggleClass("wuc-nav--active");
        $(".wuc-toolbar").removeClass("wuc-toolbar--active");
        $(".wuc-search").removeClass("wuc-search--active");
    });

    $(".header__search-btn").click((e) => {
        e.preventDefault();
        $(".wuc-search").toggleClass("wuc-search--active");
        $(".wuc-toolbar").removeClass("wuc-toolbar--active");
        $(".wuc-nav").removeClass("wuc-nav--active");
    });

    if (document.querySelector(".wuc-mod-content")) {
        const accordionBtns = document.querySelectorAll(
            ".wuc-mod-content__term"
        );
        const accordionBodies = document.querySelectorAll(
            ".wuc-mod-content__details"
        );

        accordionBtns.forEach((accordionBtn) => {
            accordionBtn.addEventListener("click", function (e) {
                e.preventDefault();

                if (
                    accordionBtn.classList.contains(
                        "wuc-mod-content__term--active"
                    )
                ) {
                    return;
                }

                accordionBtns.forEach((el) => {
                    el.classList.remove("wuc-mod-content__term--active");
                });

                accordionBodies.forEach((el) => {
                    el.classList.remove("wuc-mod-content__details--active");
                });

                this.classList.add("wuc-mod-content__term--active");
                this.nextElementSibling.classList.add(
                    "wuc-mod-content__details--active"
                );
            });
        });
    }

    if (Cookies.get("demoDisclaimer")) {
        document.querySelector(".disclaimer").remove();
    } else {
        document.querySelector(".disclaimer").classList.add("disclaimer--show");
        document
            .querySelector(".disclaimer__btn")
            .addEventListener("click", function (e) {
                e.preventDefault();

                this.parentElement.classList.remove("disclaimer--show");
                this.parentElement.remove();
                Cookies.set("demoDisclaimer", "true", { expires: 7 });
            });
    }

    if (Cookies.get("browserNotice")) {
        document.querySelector(".browser-notice").remove();
    } else {
        document
            .querySelector(".browser-notice")
            .classList.add("browser-notice--show");
        document
            .querySelector(".browser-notice__btn")
            .addEventListener("click", function (e) {
                e.preventDefault();

                this.parentElement.parentElement.classList.remove(
                    "browser-notice--show"
                );
                this.parentElement.parentElement.remove();
                Cookies.set("browserNotice", "true", { expires: 7 });
            });
    }

    if (Cookies.get("cookieNotice")) {
        document.querySelector(".cookie-notice").remove();
    } else {
        document
            .querySelector(".cookie-notice")
            .classList.add("cookie-notice--show");
        document
            .querySelector(".cookie-notice__btn")
            .addEventListener("click", function (e) {
                e.preventDefault();

                this.parentElement.parentElement.classList.remove(
                    "cookie-notice--show"
                );
                this.parentElement.parentElement.remove();
                Cookies.set("cookieNotice", "true", { expires: 7 });
            });
    }
});
