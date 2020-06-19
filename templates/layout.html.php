<!DOCTYPE html>
<html lang="en" prefix="og: https://ogp.me/ns#">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1.0, shrink-to-fit=no, viewport-fit=cover"
        />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />

        <title>
            <?php if ($title !== '') { echo $title . ' | Woodlands University
            College'; } else { echo 'Woodlands University College'; } ?>
        </title>

        <!-- Font Awesome -->
        <script
            src="https://kit.fontawesome.com/5b67f7f0e3.js"
            crossorigin="anonymous"
        ></script>

        <!-- Google Fonts -->
        <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Lora|Source+Sans+Pro:400,400i,700&display=swap"
        />

        <!-- Bootstrap -->
        <link rel="stylesheet" href="/public/css/lib/bootstrap.min.css" />

        <!-- Homemade CSS -->
        <link rel="stylesheet" href="/public/css/main.css" />
        <link rel="stylesheet" href="/public/css/main-desktop.css" />

        <!-- jQuery, Popper.js and Bootstrap.js -->
        <script defer src="/public/js/lib/jquery.min.js"></script>
        <script defer src="/public/js/lib/popper.min.js"></script>
        <script defer src="/public/js/lib/bootstrap.min.js"></script>
        <script defer src="/public/js/lib/cookie.min.js"></script>

        <!-- Homemade JavaScript -->
        <script defer src="/public/js/main.js"></script>

        <!-- Favicons -->
        <link
            rel="apple-touch-icon"
            sizes="180x180"
            href="/public/img/favicons/apple-touch-icon.png"
        />
        <link
            rel="icon"
            type="image/png"
            sizes="32x32"
            href="/public/img/favicons/favicon-32x32.png"
        />
        <link
            rel="icon"
            type="image/png"
            sizes="16x16"
            href="/public/img/favicons/favicon-16x16.png"
        />
        <link rel="shortcut icon" href="/favicon.ico" />

        <!-- SEO - Basic -->
        <meta name="author" content="@jenewland1999" />
        <meta
            name="description"
            content="The university of the future. Committed to empowering and encouraging the next generation of minds to seek out opportunities and achieve greatness."
        />

        <!-- SEO - Open Graph -->
        <meta property="og:title" content="Woodlands UC" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="https://woodlandsuc.uk/" />
        <meta
            property="og:image"
            content="/public/img/favicon/android-chrome-384x384.png"
        />

        <!-- PWA - Web App Manifest -->
        <link rel="manifest" href="/site.webmanifest" />
        <meta name="theme-color" content="#ffffff" />
    </head>
    <body class="wuc">
        <div class="disclaimer">
            <button
                aria-label="Dismiss demonstration disclaimer"
                class="disclaimer__btn wuc-btn wuc-btn--link"
            >
                <span class="disclaimer__btn-icon"
                    ><i aria-hidden="true" class="fas fa-times fa-fw"></i
                ></span>
                <span class="disclaimer__btn-text">Dismiss</span>
            </button>
            <span class="disclaimer__icon">
                <i
                    aria-hidden="true"
                    class="fas fa-exclamation-triangle fa-3x fa-fw"
                ></i>
            </span>
            <p class="disclaimer__text">
                <strong>NOTICE:</strong> This is not a real institution. This
                website was developed for a university assignment and purely
                serves as a demo.
            </p>
        </div>
        <div class="browser-notice">
            <h3>⚠️ Outdated Browser</h3>
            <p>
                Uh Oh! It appears you're using an older web browser. This
                website isn't guaranteed to work on the web browser you are
                using. Please consider installing a more current web browser
                such as Google Chrome, Microsoft Edge, Mozilla Firefox, etc.
            </p>
            <div class="browser-notice__btn-wrapper">
                <button class="browser-notice__btn">Dismiss Notice</button>
            </div>
        </div>
        <div class="cookie-notice">
            <h3>🍪 Cookies</h3>
            <p>
                This website uses cookies to remember if you pressed dismiss on
                any of the banners. No personal information is stored. If you
                continue to use the site or dismiss this banner you agree to
                using cookies.
            </p>
            <div class="cookie-notice__btn-wrapper">
                <button class="cookie-notice__btn">Dismiss Notice</button>
            </div>
        </div>
        <nav class="toolbar">
            <div class="wuc-container">
                <ul class="toolbar__list">
                    <li class="toolbar__item">
                        <a
                            href="/uploads/term-dates-2020.pdf"
                            target="_blank"
                            class="toolbar__link"
                        >
                            <i
                                class="far fa-calendar-alt fa-2x toolbar__link-icon"
                            ></i>
                            <span class="toolbar__link-text"
                                >Term 1, Week 5</span
                            >
                        </a>
                    </li>
                    <li class="toolbar__item">
                        <button class="toolbar__btn">
                            <span class="toolbar__btn-text">Login As</span>
                            <i
                                class="fas fa-chevron-down toolbar__btn-icon"
                            ></i>
                        </button>
                        <ul class="toolbar__menu">
                            <li class="toolbar__menu-item">
                                <a
                                    href="https://portal.woodlandsuc.uk/student/"
                                    target="_blank"
                                    class="toolbar__menu-link"
                                >
                                    Student
                                </a>
                            </li>
                            <li class="toolbar__menu-item">
                                <a
                                    href="https://portal.woodlandsuc.uk/staff/"
                                    target="_blank"
                                    class="toolbar__menu-link"
                                >
                                    Staff
                                </a>
                            </li>
                            <li class="toolbar__menu-item">
                                <a
                                    href="https://portal.woodlandsuc.uk/alumni/"
                                    target="_blank"
                                    class="toolbar__menu-link"
                                >
                                    Alumni
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>

        <header class="wuc-header">
            <div class="wuc-container">
                <a href="/" class="header__brand">
                    <img
                        src="/public/img/woodlands.png"
                        alt=""
                        class="brand__img"
                    />
                    <span class="sr-only">Woodlands UC</span>
                </a>
                <button class="header__search-btn">
                    <i class="fas fa-search fa-2x fa-fw"></i>
                </button>
                <button class="header__nav-btn">
                    <i class="fas fa-bars fa-2x fa-fw"></i>
                </button>

                <nav class="wuc-nav">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="/courses" class="nav__link">Courses</a>
                        </li>
                        <li class="nav__item">
                            <a href="/student-life" class="nav__link"
                                >Student Life</a
                            >
                        </li>
                        <li class="nav__item">
                            <a href="/events-news" class="nav__link"
                                >Events &amp; News</a
                            >
                        </li>
                        <li class="nav__item">
                            <a href="/business-research" class="nav__link"
                                >Business &amp; Research</a
                            >
                        </li>
                        <li class="nav__item">
                            <a href="/about-us" class="nav__link">About Us</a>
                        </li>
                        <li class="nav__item">
                            <a href="/contact-us" class="nav__link"
                                >Contact Us</a
                            >
                        </li>
                    </ul>
                </nav>

                <div class="wuc-search">
                    <form action="/courses" class="wuc-form wuc-form--search">
                        <label class="wuc-label">
                            <span class="wuc-label__text">Course Search</span>
                            <input
                                type="search"
                                name="q"
                                class="wuc-input"
                                placeholder="Enter a search term..."
                            />
                        </label>
                        <button class="wuc-btn wuc-btn--primary wuc-btn--block">
                            <i
                                class="fas fa-search fa-fw"
                                aria-hidden="true"
                                aria-label="Search for..."
                                title="Search for..."
                            ></i>
                            Search
                        </button>
                    </form>
                </div>
            </div>
        </header>

        <main class="wuc-main container">
            <?php echo $output ?>
            <!-- BANNER - GOING DIGITAL -->
            <section class="wuc-banner row" id="going-digital">
                <div class="col-12 col-lg-4 offset-lg-7 wuc-banner__content">
                    <h2 class="wuc-banner__heading">
                        Woodlands is Going Digital...
                    </h2>
                    <p class="wuc-banner__excerpt">
                        Read the story about the process of creating our new
                        online digital presence.
                    </p>
                    <a href="/news?id=1" class="wuc-btn wuc-btn--primary"
                        >Learn More</a
                    >
                </div>
            </section>
        </main>

        <footer class="wuc-footer container-lg">
            <div class="footer__cta-wrapper">
                <a href="/courses" class="footer__cta"
                    >Discover Your Potential</a
                >
            </div>
            <section
                class="footer__section footer__section--top col-lg-4 offset-lg-4"
            >
                <img
                    src="/public/img/woodlands.png"
                    alt=""
                    class="footer__brand"
                />
                <p class="h1">Woodlands UC</p>
            </section>
            <section
                class="footer__section footer__section--middle col-lg-10 offset-lg-1"
            >
                <h3 class="footer__heading">Contact Us</h3>
                <address class="footer__contact-info">
                    <a
                        href="tel:01234242442"
                        class="contact-item"
                        aria-label="Call Woodlands University College's main switchboard on 01234242442"
                    >
                        <i
                            class="fas fa-phone fa-fw contact-item__icon"
                            aria-hidden="true"
                        ></i>
                        <span class="contact-item__text">01234 242 442</span>
                    </a>
                    <a
                        href="mailto:enquiries@woodlandsuc.uk"
                        target="_blank"
                        class="contact-item"
                        aria-label="Email Woodlands University College"
                    >
                        <i
                            class="fas fa-envelope fa-fw contact-item__icon"
                            aria-hidden="true"
                        ></i>
                        <span class="contact-item__text"
                            >enquiries@woodlandsuc.uk</span
                        >
                    </a>
                </address>
                <h3 class="footer__heading">Find Us</h3>
                <address class="footer__contact-info">
                    <a
                        href="https://goo.gl/maps/PCWEANYoLmGBmguv9"
                        target="_blank"
                        class="location-item"
                        aria-label="Find our main campus on Google Maps"
                    >
                        <i
                            class="fas fa-compass fa-fw location-item__icon"
                            aria-hidden="true"
                        ></i>
                        <span class="location-item__text">
                            Main Campus,<br />
                            123 Woodland Drive,<br />
                            Winslow,<br />
                            Buckinghamshire,<br />
                            WL1 C01
                        </span>
                    </a>
                </address>
                <h3 class="footer__heading">Follow Us</h3>
                <address
                    class="footer__contact-info footer__contact-info--social"
                >
                    <a
                        href="#"
                        class="social-item"
                        aria-label="Woodlands UC on Facebook"
                        title="Woodlands UC on Facebook"
                    >
                        <i
                            class="fab fa-facebook-f fa-fw social-item__icon"
                        ></i>
                    </a>
                    <a
                        href="#"
                        class="social-item"
                        aria-label="Woodlands UC on Instagram"
                        title="Woodlands UC on Instagram"
                    >
                        <i
                            aria-hidden="true"
                            class="fab fa-instagram fa-fw social-item__icon"
                        ></i>
                    </a>
                    <a
                        href="#"
                        class="social-item"
                        aria-label="Woodlands UC on Twitter"
                        title="Woodlands UC on Twitter"
                    >
                        <i
                            aria-hidden="true"
                            class="fab fa-twitter fa-fw social-item__icon"
                        ></i>
                    </a>
                    <a
                        href="#"
                        class="social-item"
                        aria-label="Woodlands UC on Snapchat"
                        title="Woodlands UC on Snapchat"
                    >
                        <i
                            aria-hidden="true"
                            class="fab fa-snapchat-ghost fa-fw social-item__icon"
                        ></i>
                    </a>
                    <a
                        href="#"
                        class="social-item"
                        aria-label="Woodlands UC on YouTube"
                        title="Woodlands UC on YouTube"
                    >
                        <i
                            aria-hidden="true"
                            class="fab fa-youtube fa-fw social-item__icon"
                        ></i>
                    </a>
                </address>
            </section>
            <section
                class="footer__section footer__section--bottom col-lg-4 offset-lg-4"
            >
                <ul class="legal-nav">
                    <li class="legal-nav__item">
                        <a
                            href="/about-us/legal/accessibility"
                            class="legal-nav__link"
                            >Accessibility</a
                        >
                    </li>
                    <li class="legal-nav__item">
                        <a
                            href="/about-us/legal/cookies"
                            class="legal-nav__link"
                            >Cookies</a
                        >
                    </li>
                    <li class="legal-nav__item">
                        <a
                            href="/about-us/legal/privacy"
                            class="legal-nav__link"
                            >Privacy Policy</a
                        >
                    </li>
                    <li class="legal-nav__item">
                        <a href="/about-us/legal/terms" class="legal-nav__link"
                            >Terms &amp; Conditions</a
                        >
                    </li>
                </ul>
                <p class="copyright">
                    &copy;
                    <?php echo (new \DateTime())->format('Y'); ?> Woodlands
                    University College
                    <br />
                    Crafted with &hearts; by Jordan Newland
                </p>
            </section>
        </footer>
    </body>
</html>
