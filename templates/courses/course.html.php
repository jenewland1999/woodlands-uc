<!-- SECTION - HERO -->
<section class="wuc-section wuc-section--hero wuc-section--course-hero row" id="hero">
    <div class="col-12 col-lg-6 offset-lg-2">
        <div class="wuc-course-hero__content">
            <h1 class="wuc-section__heading"><?php echo htmlspecialchars($course->name . ' ' . $course->discipline, ENT_QUOTES, 'UTF-8'); ?></h1>
            <dl class="wuc-course-metadata">
                <div>
                    <dt class="wuc-course-metadata__term">Type</dt>
                    <dd class="wuc-course-metadata__details">
                        <?php echo htmlspecialchars($course->attendance . ', Undergraduate, Single Honours', ENT_QUOTES, 'UTF-8'); ?>
                    </dd>
                </div>

                <div>
                    <dt class="wuc-course-metadata__term">Duration</dt>
                    <dd class="wuc-course-metadata__details"><?php echo htmlspecialchars($course->duration . ' years', ENT_QUOTES, 'UTF-8'); ?></dd>
                </div>

                <div>
                    <dt class="wuc-course-metadata__term">Start Date</dt>
                    <dd class="wuc-course-metadata__details"><?php echo htmlspecialchars($course->start_date, ENT_QUOTES, 'UTF-8'); ?></dd>
                </div>

                <div>
                    <dt class="wuc-course-metadata__term">Location</dt>
                    <dd class="wuc-course-metadata__details"><?php echo htmlspecialchars($course->location, ENT_QUOTES, 'UTF-8'); ?></dd>
                </div>
            </dl>
            <a href="#" class="wuc-btn wuc-btn--primary mr-2">Apply</a>
            <a href="#" class="wuc-btn wuc-btn--secondary wuc-btn--outline">Open Days</a>
        </div>
    </div>
</section>

<!-- SECTION - PANEL BUTTONS -->
<nav class="panel__btn-group">
    <a
        href="/courses/course?id=<?php echo $course->course_id ?>&panel=details"
        class="panel__btn <?php echo $panel === 'details' ? 'panel__btn--active' : ''?>"
    >Course Details</a>
    <a
        href="/courses/course?id=<?php echo $course->course_id ?>&panel=entry"
        class="panel__btn <?php echo $panel === 'entry' ? 'panel__btn--active' : ''?>"
    >Entry Requirements</a>
    <a
        href="/courses/course?id=<?php echo $course->course_id ?>&panel=funding"
        class="panel__btn <?php echo $panel === 'funding' ? 'panel__btn--active' : ''?>"
    >Fees &amp; Funding</a>
</nav>

<section class="wuc-section wuc-section--default wuc-course row">
    <div class="col-12 col-lg-8 offset-lg-2">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6 order-lg-last">
                <img src="/public/img/video-thumbnail.jpg" alt="" class="img-fluid" />
                <i class="fas fa-play fa-3x" style="color: var(--wuc-color-white); position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);"></i>
            </div>
            <div class="col-12 col-lg-6">
                <p class="wuc-course__excerpt"><?php echo htmlspecialchars($course->excerpt, ENT_QUOTES, 'UTF-8'); ?></p>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-lg-6">
                <h2 class="wuc-course__heading">Overview</h2>
                <div class="wuc-course__overview">
                    <?php echo (new \CupOfPHP\Markdown($course->description))->toHtml(); ?>
                </div>
                <h2 class="wuc-course__heading">Learning Strategies</h2>
                <div class="wuc-course__overview">
                    <?php echo (new \CupOfPHP\Markdown($course->learning_strategy))->toHtml(); ?>
                </div>
                <h2 class="wuc-course__heading">Assessment Methods</h2>
                <div class="wuc-course__overview">
                    <?php echo (new \CupOfPHP\Markdown($course->assessment_method))->toHtml(); ?>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <h2 class="wuc-course__heading">Module Content</h2>
                <dl class="wuc-mod-content">
                    <dt class="wuc-mod-content__term wuc-mod-content__term--active">Year 01</dt>
                    <dd class="wuc-mod-content__details wuc-mod-content__details--active">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit corrupti blanditiis magni quis, autem atque.
                        </p>
                        <ul class="wuc-mod-content__modules">
                            <li>Module 1-01 (20 credits)</li>
                            <li>Module 1-02 (20 credits)</li>
                            <li>Module 1-03 (20 credits)</li>
                            <li>Module 1-04 (20 credits)</li>
                            <li>Module 1-05 (20 credits)</li>
                            <li>Module 1-06 (20 credits)</li>
                        </ul>
                    </dd>
                    <dt class="wuc-mod-content__term">Year 02</dt>
                    <dd class="wuc-mod-content__details">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit corrupti blanditiis magni quis, autem atque.
                        </p>
                        <ul class="wuc-mod-content__modules">
                            <li>Module 2-01 (20 credits)</li>
                            <li>Module 2-02 (20 credits)</li>
                            <li>Module 2-03 (20 credits)</li>
                            <li>Module 2-04 (20 credits)</li>
                            <li>Module 2-05 (20 credits)</li>
                            <li>Module 2-06 (20 credits)</li>
                        </ul>
                    </dd>
                    <dt class="wuc-mod-content__term">Year 03</dt>
                    <dd class="wuc-mod-content__details">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit corrupti blanditiis magni quis, autem atque.
                        </p>
                        <ul class="wuc-mod-content__modules">
                            <li>Dissertation (40 credits)</li>
                            <li>Module 3-02 (20 credits)</li>
                            <li>Module 3-03 (20 credits)</li>
                            <li>Module 3-04 (20 credits)</li>
                            <li>Module 3-05 (20 credits)</li>
                        </ul>
                    </dd>
                </dl>
                <h2 class="wuc-course__heading">Course Stats</h2>
                <article class="wuc-stat">
                    <div class="wuc-stat__top">
                        <h3 class="wuc-stat__figure h1">95%</h3>
                        <p class="wuc-stat__desc">... of students were satisfied with this course.</p>
                    </div>
                    <div class="wuc-stat__bottom">
                        <p class="wuc-stat__credit">For more information visit UniStats.</p>
                        <a href="#" class="wuc-btn wuc-btn--secondary">Learn More</a>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>
