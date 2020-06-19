<!-- SECTION - HERO -->
<section class="wuc-section wuc-section--hero row" id="hero">
    <div class="col-12 col-lg-4 offset-lg-2 wuc-section__content">
        <h6 class="wuc-section__sub-heading sub-heading--white">
            Woodlands UC...
        </h6>
        <h1 class="wuc-section__heading heading--white heading--lg">
            Courses
        </h1>
        <p class="wuc-section__excerpt excerpt--white">
            Woodlands offer a wide range of courses spanning various subjects
            from science and computing to nursing and law.
        </p>
        <a href="#" class="wuc-btn wuc-btn--primary">Book an Open Day</a>
    </div>
</section>

<!-- SECTION - PANEL BUTTONS -->
<nav class="panel__btn-group">
    <a
        href="/courses?panel=search"
        class="panel__btn <?php echo $panel === 'search' ? 'panel__btn--active' : ''?>"
    >Course Search</a>
    <a
        href="/courses?panel=a-z"
        class="panel__btn <?php echo $panel === 'a-z' ? 'panel__btn--active' : ''?>"
    >Courses A to Z</a>
    <a
        href="/courses?panel=faculties"
        class="panel__btn <?php echo $panel === 'faculties' ? 'panel__btn--active' : ''?>"
    >Courses by Faculties</a>
</nav>

<?php if ($panel === 'search'): ?>
    <!-- PANEL 1 - COURSE SEARCH -->
    <section class="wuc-section wuc-section--default row" id="courses">
        <div class="wuc-section__content col-12 col-lg-4 offset-lg-2">
            <h6 class="wuc-section__sub-heading">Course Search</h6>
            <h2 class="wuc-section__heading">Find Your Course</h2>
            <p class="wuc-section__excerpt">
                Search and discover the course that's right for you. Type. Search.
                Click.
            </p>
            <form action="/courses" class="wuc-form mt-4">
                <input type="hidden" name="panel" value="search" />
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
    </section>

    <?php if (isset($_GET['q'])): ?>
        <section class="wuc-section wuc-section--primary row">
            <div class="col-12 col-lg-8 offset-lg-2">
                <h6 class="wuc-section__sub-heading">Search Results for...</h6>
                <h2 class="wuc-section__heading"><?php echo '"' . htmlspecialchars($_GET['q'] === '' ? 'All Courses' : $_GET['q'], ENT_QUOTES, 'UTF-8') . '"'; ?></h2>
                <?php if (count($courses) === 0): ?>
                    <h3>No results found.</h3>
                <?php else: ?>
                    <ul class="wuc-results-list">
                        <?php foreach ($courses as $course): ?>
                            <li class="wuc-results-list__item">
                                <a
                                    href="/courses/course?id=<?php echo $course->course_id ?>"
                                    class="wuc-results-list__link"
                                >
                                    <h3 class="wuc-results-list__heading">
                                        <?php echo htmlspecialchars($course->name . ', ' . $course->discipline, ENT_QUOTES, 'UTF-8'); ?>
                                    </h3>
                                    <p class="wuc-results-list__excerpt">
                                        <?php echo htmlspecialchars(strlen($course->excerpt) > 128 ? substr($course->excerpt, 0, 128) . '...' : $course->excerpt, ENT_QUOTES, 'UTF-8'); ?>
                                    </p>
                                    <ul class="wuc-metadata">
                                        <li class="wuc-metadata__item">
                                            <span class="wuc-metadata__icon"
                                                ><i class="fas fa-clock fa-fw"></i
                                            ></span>
                                            <span class="wuc-metadata__text">
                                                <?php echo htmlspecialchars($course->attendance, ENT_QUOTES, 'UTF-8'); ?>
                                            </span>
                                        </li>
                                        <li class="wuc-metadata__item">
                                            <span class="wuc-metadata__icon"
                                                ><i class="fas fa-hourglass-half fa-fw"></i
                                            ></span>
                                            <span class="wuc-metadata__text">
                                                <?php echo htmlspecialchars($course->duration . ' year(s)', ENT_QUOTES, 'UTF-8'); ?>
                                            </span>
                                        </li>
                                        <li class="wuc-metadata__item">
                                            <span class="wuc-metadata__icon"
                                                ><i class="fas fa-medal fa-fw"></i
                                            ></span>
                                            <span class="wuc-metadata__text"
                                            >Single honours</span>
                                        </li>
                                        <li class="wuc-metadata__item">
                                            <span class="wuc-metadata__icon"
                                                ><i class="fas fa-calendar-day fa-fw"></i
                                            ></span>
                                            <span class="wuc-metadata__text">
                                                <?php echo htmlspecialchars($course->start_date, ENT_QUOTES, 'UTF-8'); ?>
                                            </span>
                                        </li>
                                        <li class="wuc-metadata__item">
                                            <span class="wuc-metadata__icon"
                                                ><i class="fas fa-map-marked-alt fa-fw"></i
                                            ></span>
                                            <span class="wuc-metadata__text">
                                                <?php echo htmlspecialchars($course->location, ENT_QUOTES, 'UTF-8'); ?>
                                            </span>
                                        </li>
                                    </ul>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>

                    <nav aria-label="Page navigation example" class="mt-5 <?php echo count($courses) < 10 ? 'd-none' : '' ?>">
                        <ul class="pagination justify-content-center">
                            <?php if ($currentPage <= 1): ?>
                                <li class="page-item disabled">
                                    <span class="page-link">Previous</span>
                                </li>
                            <?php else: ?>
                                <li class="page-item">
                                    <a
                                        href="/courses?panel=search&q=<?php echo $_GET['q'] ?? '' ?>&page=<?php echo $currentPage - 1 ?>"
                                        class="page-link"
                                    >
                                        Previous
                                    </a>
                                </li>
                            <?php endif; ?>

                            <?php for ($i = 1; $i <= ceil($totalCourses/10); $i++): ?>
                                <li class="page-item <?php echo $i == $currentPage ? 'active' : ''; ?>">
                                    <a
                                        href="/courses?panel=search&q=<?php echo $_GET['q'] ?? '' ?>&page=<?php echo $i ?>"
                                        class="page-link"
                                    >
                                        <?php echo $i ?>
                                    </a>
                                </li>
                            <?php endfor; ?>

                            <?php if ($currentPage >= ceil($totalCourses/10)): ?>
                                <li class="page-item disabled">
                                    <span class="page-link">Next</span>
                                </li>
                            <?php else: ?>
                                <li class="page-item">
                                    <a
                                        href="/courses?panel=search&q=<?php echo $_GET['q'] ?? '' ?>&page=<?php echo $currentPage + 1 ?>"
                                        class="page-link disabled"
                                    >
                                        Next
                                    </a>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </nav>
                <?php endif; ?>
            </div>
        </section>
    <?php endif; ?>
<?php endif; ?>

<?php if ($panel === 'a-z'): ?>
    <!-- PANEL 2 - COURSES A TO Z -->
    <section class="wuc-section wuc-section--default row">
        <div class="col-12 col-lg-8 offset-lg-2">
            <h6 class="wuc-section__sub-heading">Courses A to Z</h6>
            <h2 class="wuc-section__heading">Find Your Course</h2>
            <p class="wuc-section__excerpt">
                Select a letter to show corresponding results.
            </p>
            <ul class="wuc-alphabet">
            <?php foreach ($coursesAZ as $key => $value): ?>
                <li class="wuc-alphabet__item">
                    <?php if ($value === null): ?>
                        <span
                            class="wuc-alphabet__text"
                            title="0 results found"
                        ><?php echo $key ?></span>
                    <?php else: ?>
                        <a
                            href="/courses?panel=a-z&letter=<?php echo $key ?>"
                            class="wuc-alphabet__link <?php echo ($_GET['letter'] ?? null) === $key ? 'wuc-alphabet__link--active' : '' ?>"
                            title="<?php echo count($value) ?> results found"
                        ><?php echo $key ?></a>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
        </div>
    </section>
    <?php if (
        isset($_GET['letter']) &&
        in_array(strtolower($_GET['letter']), range('a', 'z'))
    ): ?>
        <section class="wuc-section wuc-section--primary row">
            <div class="col-12 col-lg-8 offset-lg-2">
                <?php if (count($courses) === 0): ?>
                    <h3>No results found.</h3>
                <?php else: ?>
                    <ul class="wuc-results-list">
                        <?php foreach ($courses as $course): ?>
                            <li class="wuc-results-list__item">
                                <a
                                    href="/courses/course?id=<?php echo $course->course_id ?>"
                                    class="wuc-results-list__link"
                                >
                                    <h3 class="wuc-results-list__heading">
                                        <?php echo htmlspecialchars($course->name . ', ' . $course->discipline, ENT_QUOTES, 'UTF-8'); ?>
                                    </h3>
                                    <p class="wuc-results-list__excerpt">
                                        <?php echo htmlspecialchars(strlen($course->description) > 128 ? substr($course->description, 0, 128) . '...' : $course->description, ENT_QUOTES, 'UTF-8'); ?>
                                    </p>
                                    <ul class="wuc-metadata">
                                        <li class="wuc-metadata__item">
                                            <span class="wuc-metadata__icon"
                                                ><i class="fas fa-clock fa-fw"></i
                                            ></span>
                                            <span class="wuc-metadata__text">
                                                <?php echo htmlspecialchars($course->attendance, ENT_QUOTES, 'UTF-8'); ?>
                                            </span>
                                        </li>
                                        <li class="wuc-metadata__item">
                                            <span class="wuc-metadata__icon"
                                                ><i class="fas fa-hourglass-half fa-fw"></i
                                            ></span>
                                            <span class="wuc-metadata__text">
                                                <?php echo htmlspecialchars($course->duration . ' year(s)', ENT_QUOTES, 'UTF-8'); ?>
                                            </span>
                                        </li>
                                        <li class="wuc-metadata__item">
                                            <span class="wuc-metadata__icon"
                                                ><i class="fas fa-medal fa-fw"></i
                                            ></span>
                                            <span class="wuc-metadata__text"
                                                >Single honours</span
                                            >
                                        </li>
                                        <li class="wuc-metadata__item">
                                            <span class="wuc-metadata__icon"
                                                ><i class="fas fa-calendar-day fa-fw"></i
                                            ></span>
                                            <span class="wuc-metadata__text">
                                                <?php echo htmlspecialchars($course->start_date, ENT_QUOTES, 'UTF-8'); ?>
                                            </span>
                                        </li>
                                        <li class="wuc-metadata__item">
                                            <span class="wuc-metadata__icon"
                                                ><i class="fas fa-map-marked-alt fa-fw"></i
                                            ></span>
                                            <span class="wuc-metadata__text">
                                                <?php echo htmlspecialchars($course->location, ENT_QUOTES, 'UTF-8'); ?>
                                            </span>
                                        </li>
                                    </ul>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>

                    <nav aria-label="Page navigation example" class="mt-5 <?php echo count($courses) < 10 ? 'd-none' : '' ?>">
                        <ul class="pagination justify-content-center">
                            <?php if ($currentPage <= 1): ?>
                                <li class="page-item disabled">
                                    <span class="page-link">Previous</span>
                                </li>
                            <?php else: ?>
                                <li class="page-item">
                                    <a
                                        href="/courses?panel=a-z&letter=<?php echo $_GET['letter'] ?? '' ?>&page=<?php echo $currentPage - 1 ?>"
                                        class="page-link"
                                    >
                                        Previous
                                    </a>
                                </li>
                            <?php endif; ?>

                            <?php for ($i = 1; $i <= ceil($totalCourses/10); $i++): ?>
                                <li class="page-item <?php echo $i == $currentPage ? 'active' : ''; ?>">
                                    <a
                                        href="/courses?panel=a-z&letter=<?php echo $_GET['letter'] ?? '' ?>&page=<?php echo $i ?>"
                                        class="page-link"
                                    >
                                        <?php echo $i ?>
                                    </a>
                                </li>
                            <?php endfor; ?>

                            <?php if ($currentPage >= ceil($totalCourses/10)): ?>
                                <li class="page-item disabled">
                                    <span class="page-link">Next</span>
                                </li>
                            <?php else: ?>
                                <li class="page-item">
                                    <a
                                        href="/courses?panel=a-z&letter=<?php echo $_GET['letter'] ?? '' ?>&page=<?php echo $currentPage + 1 ?>"
                                        class="page-link disabled"
                                    >
                                        Next
                                    </a>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </nav>
                <?php endif; ?>
            </div>
        </section>
    <?php endif; ?>
<?php endif;?>

<?php if ($panel === 'faculties'): ?>
    <!-- PANEL 3 - COURSES BY FACULTIES -->
    <section class="wuc-section wuc-section--default row">
        <div class="col-12 col-lg-8 offset-lg-2">
            <h6 class="wuc-section__sub-heading">Courses by Faculties</h6>
            <h2 class="wuc-section__heading">Find Your Course</h2>
            <p class="wuc-section__excerpt">
                Select a faculty to view corresponding results.
            </p>
            <nav class="wuc-tabs">
            <a href="/courses?panel=faculties&faculty=1" class="wuc-tabs__tab">
                <span class="wuc-tabs__tab-icon"><i class="fas fa-paint-brush fa-fw"></i></span>
                <span class="wuc-tabs__tab-text">Arts</span>
            </a>
            <a href="/courses?panel=faculties&faculty=2" class="wuc-tabs__tab">
                <span class="wuc-tabs__tab-icon"><i class="fas fa-wrench fa-fw"></i></span>
                <span class="wuc-tabs__tab-text">Engineering</span>
            </a>
            <a href="/courses?panel=faculties&faculty=3" class="wuc-tabs__tab">
                <span class="wuc-tabs__tab-icon"><i class="fas fa-medkit fa-fw"></i></span>
                <span class="wuc-tabs__tab-text">Health Sciences</span>
            </a>
            <a href="/courses?panel=faculties&faculty=4" class="wuc-tabs__tab">
                <span class="wuc-tabs__tab-icon"><i class="fas fa-microscope fa-fw"></i></span>
                <span class="wuc-tabs__tab-text">Life Sciences</span>
            </a>
            <a href="/courses?panel=faculties&faculty=5" class="wuc-tabs__tab">
                <span class="wuc-tabs__tab-icon"><i class="fas fa-atom fa-fw"></i></span>
                <span class="wuc-tabs__tab-text">Science</span>
            </a>
            <a href="/courses?panel=faculties&faculty=6" class="wuc-tabs__tab">
                <span class="wuc-tabs__tab-icon"><i class="fas fa-balance-scale-left fa-fw"></i></span>
                <span class="wuc-tabs__tab-text">Social Sciences &amp; Law</span>
            </a>
        </nav>
        </div>
    </section>

    <?php if (isset($_GET['faculty'])): ?>
        <section class="wuc-section wuc-section--primary row">
            <div class="col-12 col-lg-8 offset-lg-2">
                <?php if (count($courses) === 0): ?>
                    <h3>No results found.</h3>
                <?php else: ?>
                    <ul class="wuc-results-list">
                        <?php foreach ($courses as $course): ?>
                            <li class="wuc-results-list__item">
                                <a
                                    href="/courses/course?id=<?php echo $course->course_id ?>"
                                    class="wuc-results-list__link"
                                >
                                    <h3 class="wuc-results-list__heading">
                                        <?php echo htmlspecialchars($course->name . ', ' . $course->discipline, ENT_QUOTES, 'UTF-8'); ?>
                                    </h3>
                                    <p class="wuc-results-list__excerpt">
                                        <?php echo htmlspecialchars(strlen($course->description) > 128 ? substr($course->description, 0, 128) . '...' : $course->description, ENT_QUOTES, 'UTF-8'); ?>
                                    </p>
                                    <ul class="wuc-metadata">
                                        <li class="wuc-metadata__item">
                                            <span class="wuc-metadata__icon"
                                                ><i class="fas fa-clock fa-fw"></i
                                            ></span>
                                            <span class="wuc-metadata__text">
                                                <?php echo htmlspecialchars($course->attendance, ENT_QUOTES, 'UTF-8'); ?>
                                            </span>
                                        </li>
                                        <li class="wuc-metadata__item">
                                            <span class="wuc-metadata__icon"
                                                ><i class="fas fa-hourglass-half fa-fw"></i
                                            ></span>
                                            <span class="wuc-metadata__text">
                                                <?php echo htmlspecialchars($course->duration . ' year(s)', ENT_QUOTES, 'UTF-8'); ?>
                                            </span>
                                        </li>
                                        <li class="wuc-metadata__item">
                                            <span class="wuc-metadata__icon"
                                                ><i class="fas fa-medal fa-fw"></i
                                            ></span>
                                            <span class="wuc-metadata__text"
                                                >Single honours</span
                                            >
                                        </li>
                                        <li class="wuc-metadata__item">
                                            <span class="wuc-metadata__icon"
                                                ><i class="fas fa-calendar-day fa-fw"></i
                                            ></span>
                                            <span class="wuc-metadata__text">
                                                <?php echo htmlspecialchars($course->start_date, ENT_QUOTES, 'UTF-8'); ?>
                                            </span>
                                        </li>
                                        <li class="wuc-metadata__item">
                                            <span class="wuc-metadata__icon"
                                                ><i class="fas fa-map-marked-alt fa-fw"></i
                                            ></span>
                                            <span class="wuc-metadata__text">
                                                <?php echo htmlspecialchars($course->location, ENT_QUOTES, 'UTF-8'); ?>
                                            </span>
                                        </li>
                                    </ul>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>

                    <nav aria-label="Page navigation example" class="mt-5 <?php echo count($courses) < 10 ? 'd-none' : '' ?>">
                        <ul class="pagination justify-content-center">
                            <?php if ($currentPage <= 1): ?>
                                <li class="page-item disabled">
                                    <span class="page-link">Previous</span>
                                </li>
                            <?php else: ?>
                                <li class="page-item">
                                    <a
                                        href="/courses?panel=faculties&faculty=<?php echo $_GET['faculty'] ?? '' ?>&page=<?php echo $currentPage - 1 ?>"
                                        class="page-link"
                                    >
                                        Previous
                                    </a>
                                </li>
                            <?php endif; ?>

                            <?php for ($i = 1; $i <= ceil($totalCourses/10); $i++): ?>
                                <li class="page-item <?php echo $i == $currentPage ? 'active' : ''; ?>">
                                    <a
                                        href="/courses?panel=faculties&faculty=<?php echo $_GET['faculty'] ?? '' ?>&page=<?php echo $i ?>"
                                        class="page-link"
                                    >
                                        <?php echo $i ?>
                                    </a>
                                </li>
                            <?php endfor; ?>

                            <?php if ($currentPage >= ceil($totalCourses/10)): ?>
                                <li class="page-item disabled">
                                    <span class="page-link">Next</span>
                                </li>
                            <?php else: ?>
                                <li class="page-item">
                                    <a
                                        href="/courses?panel=faculties&faculty=<?php echo $_GET['faculty'] ?? '' ?>&page=<?php echo $currentPage + 1 ?>"
                                        class="page-link disabled"
                                    >
                                        Next
                                    </a>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </nav>
                <?php endif; ?>
            </div>
        </section>
    <?php endif; ?>
<?php endif; ?>
