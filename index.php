<?php
$pageTitle = 'Robotics, Coding & STEM Classes for Kids in Malaysia | NextGen Makers';
$pageDescription = 'NextGen Makers Robotics Academy offers hands-on robotics, coding and STEM classes for children and teenagers aged 4 to 18. Book a RM99 trial class.';
include __DIR__ . '/includes/header.php';
?>

<main>
    <section class="hero">
        <div class="hero-content">
            <span class="eyebrow">Ages 4-18 | Robotics | Coding | STEM</span>
            <h1>Robotics, Coding & STEM Classes for Future-Ready Kids</h1>
            <p class="hero-lead">NextGen Makers Robotics Academy helps children and teenagers learn robotics, coding and technology through fun, structured and hands-on projects.</p>
            <p>From building their first robot to creating Arduino projects, IoT systems, websites, apps and games, students learn to think, build, code and create with confidence.</p>
            <div class="button-row">
                <a class="btn btn-primary" href="<?= htmlspecialchars(whatsapp_url()) ?>" target="_blank" rel="noopener">Book Trial Class</a>
                <a class="btn btn-secondary" href="<?= htmlspecialchars(url_path('/programs.php')) ?>">Explore Programs</a>
            </div>
        </div>
        <div class="hero-visual" aria-label="NextGen Makers learning highlights">
            <div class="hero-photo-card hero-photo-main" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/TRIAL CLASS/6213062741246200287.jpg')) ?>');">
                <span>Trial robotics class</span>
            </div>
            <div class="hero-photo-card hero-photo-secondary" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/YOUNG CODER/6289668976233530628.jpg')) ?>');">
                <span>Arduino coding project</span>
            </div>
        </div>
    </section>

    <section class="section intro-section">
        <div class="intro-layout">
            <div class="section-heading">
                <span class="eyebrow">What We Do</span>
                <h2>What Is NextGen Makers Robotics Academy?</h2>
                <p class="section-subtitle">A structured future-skills academy where children learn by building real robotics, coding and STEM projects.</p>
            </div>
            <div class="intro-copy-card">
                <article>
                    <span>Who We Are</span>
                    <p>NextGen Makers Robotics Academy is a robotics, coding and STEM education academy for children and teenagers aged 4 to 18.</p>
                </article>
                <article>
                    <span>How Students Grow</span>
                    <p>Students progress from basic coding and play-based robotics into Arduino, C++ programming, IoT, automation, web design, app development and game development.</p>
                </article>
            </div>
        </div>
        <div class="student-gallery">
            <div class="student-photo-placeholder photo-fill" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/LITTLE MAKER/6274016526272760775.jpg')) ?>');">
                <span>Little Maker robotics activity</span>
            </div>
            <div class="student-photo-placeholder photo-fill" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/junior-maker/6332120956976958538.jpg')) ?>');">
                <span>Scratch coding session</span>
            </div>
            <div class="student-photo-placeholder photo-fill" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/YOUNG CODER/6289668976233530628.jpg')) ?>');">
                <span>Arduino project demo</span>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="section-heading">
            <span class="eyebrow">Why Parents Choose Us</span>
            <h2>Structured learning, real projects and visible progress.</h2>
        </div>
        <div class="feature-grid feature-grid-wow">
            <article>
                <span>01</span>
                <h3>Complete Pathway</h3>
                <p>Children can start with beginner-friendly robotics and continue into advanced technology programs as they grow.</p>
            </article>
            <article>
                <span>02</span>
                <h3>Self-Developed Modules</h3>
                <p>Modules are structured according to age, learning level and project complexity.</p>
            </article>
            <article>
                <span>03</span>
                <h3>Hands-On Projects</h3>
                <p>Students build robots, digital games, animations, Arduino projects, IoT systems and digital products.</p>
            </article>
            <article>
                <span>04</span>
                <h3>Progress & Showcase</h3>
                <p>Parents can track learning through feedback, project outputs, certificates and showcase opportunities.</p>
            </article>
        </div>
    </section>

    <section class="section pathway-section">
        <div class="pathway-layout">
            <div class="pathway-intro">
                <span class="eyebrow">Program Pathway</span>
                <h2>A complete robotics, coding & STEM pathway.</h2>
                <p>Students start with age-friendly robotics and coding, then progress into Arduino, C++, IoT, automation, web, app and game development.</p>
                <div class="pathway-mini-points">
                    <span>Ages 4-18</span>
                    <span>Beginner to Advanced</span>
                    <span>Project-Based</span>
                </div>
            </div>
            <div class="pathway-media">
                <div class="student-photo-placeholder portrait photo-fill" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/YOUNG CODER/6289562924901057920.jpg')) ?>');">
                    <span>Student project showcase photo</span>
                </div>
            </div>
        </div>
        <div class="program-grid">
            <?php foreach ($programs as $index => $program): ?>
                <article class="program-card">
                    <div class="program-card-visual">
                        <span class="program-number"><?= str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT) ?></span>
                        <span class="program-tag"><?= htmlspecialchars($program['tag']) ?></span>
                    </div>
                    <div class="program-card-body">
                        <strong><?= htmlspecialchars($program['age']) ?></strong>
                        <h3><?= htmlspecialchars($program['name']) ?></h3>
                        <p><?= htmlspecialchars($program['focus']) ?></p>
                    </div>
                    <a class="program-link" href="<?= htmlspecialchars(url_path($program['url'])) ?>">Learn More</a>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="section skills-section">
        <div class="section-heading">
            <span class="eyebrow">Learning Outcomes</span>
            <h2>Skills your child will build.</h2>
        </div>
        <div class="skill-orbit">
            <article class="skill-hero-card">
                <span>Core Outcome</span>
                <strong>Future-ready confidence</strong>
                <p>Students learn to build, test, explain and improve their own technology projects.</p>
            </article>
            <article><span>01</span><strong>Coding Logic</strong>
                <p>Understand instructions, sequence and cause-effect thinking.</p>
            </article>
            <article><span>02</span><strong>Robotics</strong>
                <p>Build and program physical models through hands-on tasks.</p>
            </article>
            <article><span>03</span><strong>Problem-Solving</strong>
                <p>Test ideas, troubleshoot mistakes and improve solutions.</p>
            </article>
            <article><span>04</span><strong>Creativity</strong>
                <p>Turn ideas into games, robots, prototypes and digital products.</p>
            </article>
            <article><span>05</span><strong>Teamwork</strong>
                <p>Practice communication, collaboration and project ownership.</p>
            </article>
            <article><span>06</span><strong>Innovation Mindset</strong>
                <p>Explore how technology can solve real-world problems.</p>
            </article>
        </div>
    </section>

    <?php include __DIR__ . '/includes/cta.php'; ?>

    <section class="section locations-preview">
        <div class="locations-layout">
            <div class="section-heading">
                <span class="eyebrow">Locations</span>
                <h2>Find a NextGen Makers branch near you.</h2>
                <p>Classes are available across Shah Alam, Bangi, Puncak Alam, Cyberjaya and Selayang.</p>
                <a class="btn btn-primary" href="<?= htmlspecialchars(url_path('/locations.php')) ?>">View All Locations</a>
            </div>
            <div class="student-photo-placeholder locations-photo photo-fill" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/LITTLE MAKER/6127599252902364638.jpg')) ?>');">
                <span>Branch or classroom photo</span>
            </div>
        </div>
        <div class="branch-grid branch-showcase">
            <?php foreach ($branches as $index => $branch): ?>
                <article>
                    <span><?= str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT) ?></span>
                    <strong><?= htmlspecialchars($branch) ?></strong>
                    <a href="<?= htmlspecialchars(whatsapp_url('Hi NextGen Makers, I would like to book a trial class at ' . $branch . '.')) ?>" target="_blank" rel="noopener">Book Trial</a>
                </article>
            <?php endforeach; ?>
        </div>
    </section>
</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
