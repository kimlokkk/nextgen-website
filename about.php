<?php
$pageTitle = 'About NextGen Makers Robotics Academy | Robotics, Coding & STEM for Kids';
$pageDescription = 'Learn about NextGen Makers Robotics Academy, a robotics, coding and STEM education academy for children and teenagers aged 4 to 18 in Malaysia. We help students build future-ready skills through hands-on technology programs.';
include __DIR__ . '/includes/header.php';

$approachSteps = [
    ['title' => 'Learn', 'text' => 'Students are introduced to robotics, coding or STEM concepts in a simple and age-appropriate way.'],
    ['title' => 'Build', 'text' => 'Students use robotics kits, coding platforms, electronics or digital tools to build their own project.'],
    ['title' => 'Code', 'text' => 'Students apply instructions, sequencing, logic or programming based on their age and level.'],
    ['title' => 'Test', 'text' => 'Students test their project, identify problems and understand what needs to be improved.'],
    ['title' => 'Improve', 'text' => 'Students troubleshoot, adjust, debug and refine their project.'],
    ['title' => 'Present', 'text' => 'Students are encouraged to explain their project and share their ideas confidently.'],
];

$differentiators = [
    ['title' => 'Complete Pathway from Age 4 to 18', 'text' => 'Students can start with beginner-friendly robotics and coding at a young age, then progress into Arduino, C++ programming, IoT, web design, app development and game development.'],
    ['title' => 'Self-Developed Modules', 'text' => 'Our robotics, coding and STEM modules are structured according to age, learning level and project complexity.'],
    ['title' => 'Real Hands-On Projects', 'text' => 'Students build real outputs such as robots, games, animations, Arduino projects, IoT systems, websites, apps and digital products.'],
    ['title' => 'Future-Ready Skills', 'text' => 'Students build computational thinking, creativity, problem-solving, teamwork, communication and digital confidence.'],
    ['title' => 'Trained Facilitators', 'text' => 'Our facilitators deliver robotics, coding and STEM lessons in a child-friendly, structured and hands-on way.'],
    ['title' => 'Visible Progress', 'text' => 'Parents can track learning through progress reports, project outputs, certificates, showcase opportunities and project portfolios.'],
];

$pathwayItems = [
    ['age' => 'Age 4-5', 'text' => 'Play-based robotics and early coding'],
    ['age' => 'Age 6-9', 'text' => 'Scratch, STEM, animation and digital creativity'],
    ['age' => 'Age 10+', 'text' => 'Arduino, electronics and robotics projects'],
    ['age' => 'Age 13+', 'text' => 'C++ programming, automation and prototype development'],
    ['age' => 'Age 15+', 'text' => 'IoT, sensors, smart systems and automation'],
    ['age' => 'Age 16+', 'text' => 'Web design, app development, game development and digital products'],
];

$progressItems = [
    'Progress reports',
    'Learning feedback',
    'Project outputs',
    'Certificate of completion',
    'Student showcase opportunities',
    'Project portfolio development',
    'NextGen Spark participation',
];

$audienceItems = [
    'Children aged 4 to 18',
    'Parents who want early technology exposure for their child',
    'Children who enjoy building, creating and solving problems',
    'Primary school students interested in Scratch, games and STEM',
    'Teenagers interested in Arduino, IoT, automation, web design, app development or game development',
    'Children who need enrichment activities beyond school academics',
    'Children with special needs who may benefit from adaptive robotics learning through NextGen Genius',
];

$faqs = [
    ['question' => 'What is NextGen Makers Robotics Academy?', 'answer' => 'NextGen Makers Robotics Academy is a robotics, coding and STEM education academy for children and teenagers aged 4 to 18. The academy helps students learn technology through hands-on projects, including robotics, Scratch, Arduino, IoT, web design, app development and game development.'],
    ['question' => 'What makes NextGen Makers different?', 'answer' => 'NextGen Makers offers a complete learning pathway from age 4 to 18, self-developed modules, hands-on project-based learning, trained facilitators, progress reports, certificates and student showcase opportunities.'],
    ['question' => 'Is NextGen Makers suitable for beginners?', 'answer' => 'Yes. Children with no prior coding or robotics experience can begin with beginner-friendly programs such as Little Maker or Junior Maker, depending on their age and readiness.'],
    ['question' => 'How does NextGen Makers teach children?', 'answer' => 'NextGen Makers uses hands-on project-based learning. Students learn by exploring concepts, building projects, coding, testing, improving and presenting their work.'],
    ['question' => 'How can parents start?', 'answer' => 'Parents can start by booking a RM99 trial class through WhatsApp at 011-5662 0871.'],
];
?>

<main>
    <section class="hero about-hero">
        <div class="hero-content">
            <span class="eyebrow">About NextGen Makers</span>
            <h1>About NextGen Makers Robotics Academy</h1>
            <p class="hero-lead">We help children and teenagers become confident, creative and future-ready through robotics, coding and STEM education.</p>
            <p>NextGen Makers Robotics Academy is a future skills academy for children and teenagers aged 4 to 18. Our programs help students learn technology through structured, hands-on projects in robotics, coding, STEM, Arduino, IoT, web design, app development and game development.</p>
            <div class="button-row">
                <a class="btn btn-primary" href="<?= htmlspecialchars(whatsapp_url()) ?>" target="_blank" rel="noopener">Book Trial Class</a>
                <a class="btn btn-secondary" href="<?= htmlspecialchars(url_path('/programs.php')) ?>">Explore Programs</a>
            </div>
            <div class="about-hero-badges">
                <span>Ages 4-18</span>
                <span>Robotics, Coding & STEM</span>
                <span>Hands-On Projects</span>
                <span>Self-Developed Modules</span>
                <span>7 Active Branches</span>
            </div>
        </div>
        <div class="hero-visual about-hero-visual" aria-label="Children learning robotics and coding">
            <div class="hero-photo-card hero-photo-main" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/LITTLE MAKER/6127599252902364638.jpg')) ?>');">
                <span>Guided robotics class</span>
            </div>
            <div class="hero-photo-card hero-photo-secondary" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/YOUNG CODER/6289562924901057920.jpg')) ?>');">
                <span>Building real projects</span>
            </div>
        </div>
    </section>

    <section class="section about-story-section">
        <div class="about-split">
            <div>
                <span class="eyebrow">Who We Are</span>
                <h2>We turn young learners into confident makers.</h2>
                <p>NextGen Makers Robotics Academy is a robotics, coding and STEM education academy for children and teenagers aged 4 to 18.</p>
                <p>We provide a structured learning pathway that introduces children to technology from an early age and helps them progress into more advanced skills as they grow.</p>
                <p>Students begin with basic coding, play-based robotics and STEM activities before moving into Scratch, Arduino, C++ programming, IoT, automation, web design, app development and game development.</p>
                <p>At NextGen Makers, students do not just learn how to use technology. They learn how to build, code, test, troubleshoot, create and present their own projects.</p>
            </div>
            <aside class="about-highlight-card">
                <strong>Through hands-on robotics, coding and STEM learning, students build real skills that prepare them for the future.</strong>
                <div class="student-photo-placeholder photo-fill" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/junior-maker/6332120956976958538.jpg')) ?>');">
                    <span>Confident young makers</span>
                </div>
            </aside>
        </div>
    </section>

    <section class="section belief-section">
        <div class="belief-layout">
            <div class="section-heading">
                <span class="eyebrow">Our Belief</span>
                <h2>Every child can become a maker.</h2>
            </div>
            <div class="belief-copy">
                <p>We believe every child has the potential to become a maker, creator and problem-solver. Technology education should not feel too difficult, too technical or too far from a child's world.</p>
                <p>That is why our classes are designed to be practical, engaging and age-appropriate. Children learn best when they can touch, build, experiment and see their ideas come to life.</p>
                <p>Through hands-on projects, students develop confidence, curiosity and the courage to try again when something does not work. At NextGen Makers, mistakes are part of learning.</p>
            </div>
            <div class="belief-message">
                <span>Key Message</span>
                <strong>Technology learning is not just about coding.</strong>
                <p>It is about helping children think, solve problems and create with confidence.</p>
            </div>
        </div>
        <div class="about-photo-rail" aria-label="NextGen Makers classroom moments">
            <div class="student-photo-placeholder photo-fill" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/junior-maker/6292029357119180673.jpg')) ?>');">
                <span>Scratch coding</span>
            </div>
            <div class="student-photo-placeholder photo-fill" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/YOUNG CODER/6289668976233530628.jpg')) ?>');">
                <span>Arduino project</span>
            </div>
            <div class="student-photo-placeholder photo-fill" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/TRIAL CLASS/6233119207726369610.jpg')) ?>');">
                <span>Classroom activity</span>
            </div>
            <div class="student-photo-placeholder photo-fill" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/TRIAL CLASS/6213062741246200287.jpg')) ?>');">
                <span>Trial class</span>
            </div>
        </div>
    </section>

    <section class="section approach-section">
        <div class="section-heading">
            <span class="eyebrow">Our Approach</span>
            <h2>Our learning approach.</h2>
            <p>NextGen Makers uses a structured hands-on learning approach that helps students understand technology step by step.</p>
        </div>
        <div class="approach-flow">
            <?php foreach ($approachSteps as $index => $step): ?>
                <article>
                    <span><?= str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT) ?></span>
                    <h3><?= htmlspecialchars($step['title']) ?></h3>
                    <p><?= htmlspecialchars($step['text']) ?></p>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="section vision-mission-section">
        <div class="vision-card">
            <span class="eyebrow">Our Vision</span>
            <h2>Preparing future-ready innovators.</h2>
            <p>To become a leading robotics, coding and STEM education academy that prepares children and teenagers to become confident, creative and future-ready innovators.</p>
        </div>
        <div class="mission-card">
            <span class="eyebrow">Our Mission</span>
            <h2>Make technology learning practical and meaningful.</h2>
            <ol>
                <li>Introduce children to robotics, coding and STEM from an early age.</li>
                <li>Build a structured technology learning pathway from beginner to advanced level.</li>
                <li>Help students develop creativity, logical thinking and problem-solving skills.</li>
                <li>Encourage children to learn through real hands-on projects.</li>
                <li>Prepare young learners with future-ready digital and innovation skills.</li>
                <li>Support students in building confidence through project presentation and showcase opportunities.</li>
            </ol>
        </div>
    </section>

    <section class="section difference-section">
        <div class="section-heading">
            <span class="eyebrow">What Makes Us Different?</span>
            <h2>Designed for long-term learning, not one-time activities.</h2>
            <p>Our programs grow with the child and help students build skills step by step.</p>
        </div>
        <div class="difference-grid">
            <?php foreach ($differentiators as $index => $item): ?>
                <article>
                    <span><?= str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT) ?></span>
                    <h3><?= htmlspecialchars($item['title']) ?></h3>
                    <p><?= htmlspecialchars($item['text']) ?></p>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="section about-pathway-section">
        <div class="about-pathway-layout">
            <div>
                <span class="eyebrow">Beginner to Future Innovator</span>
                <h2>A learning pathway that grows with your child.</h2>
                <p>NextGen Makers programs are designed to support students from early childhood to teenage years.</p>
                <p>A young child may begin by learning basic coding through play-based robotics. As they grow, they can move into Scratch programming, Arduino, electronics, C++ programming, IoT, automation and digital creation.</p>
                <a class="btn btn-primary" href="<?= htmlspecialchars(url_path('/programs.php')) ?>">Explore Our Programs</a>
                <div class="pathway-photo-stack">
                    <div class="student-photo-placeholder photo-fill" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/LITTLE MAKER/6274016526272760775.jpg')) ?>');">
                        <span>Robot build</span>
                    </div>
                    <div class="student-photo-placeholder photo-fill" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/junior-maker/6292029357119180673.jpg')) ?>');">
                        <span>Coding session</span>
                    </div>
                </div>
            </div>
            <div class="pathway-timeline">
                <?php foreach ($pathwayItems as $item): ?>
                    <article>
                        <strong><?= htmlspecialchars($item['age']) ?></strong>
                        <p><?= htmlspecialchars($item['text']) ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="section progress-section">
        <div class="progress-layout">
            <div class="student-photo-placeholder portrait photo-fill" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/YOUNG CODER/6289562924901057920.jpg')) ?>');">
                <span>Student showcase project</span>
            </div>
            <div>
                <span class="eyebrow">Student Progress & Showcase</span>
                <h2>Learning that parents can see.</h2>
                <p>At NextGen Makers, learning progress is shown through real project outputs. Students are guided to complete activities, build projects, improve their skills and showcase their work.</p>
                <p>Parents may receive learning feedback, progress reports and visible project outcomes. Students may also receive certificates of completion and opportunities to participate in student showcase activities such as NextGen Spark.</p>
                <div class="progress-chip-grid">
                    <?php foreach ($progressItems as $item): ?>
                        <span><?= htmlspecialchars($item) ?></span>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="section audience-section">
        <div class="section-heading">
            <span class="eyebrow">Who We Serve</span>
            <h2>Who is NextGen Makers for?</h2>
            <p>NextGen Makers is suitable for children and teenagers who want to explore robotics, coding, STEM and digital technology in a fun and practical way.</p>
        </div>
        <div class="audience-grid">
            <?php foreach ($audienceItems as $item): ?>
                <article><?= htmlspecialchars($item) ?></article>
            <?php endforeach; ?>
        </div>
        <div class="audience-note">
            <strong>Main Audience</strong>
            <p>Our main audience is parents of children aged 6 to 12 around Shah Alam, Bangi, Puncak Alam, Cyberjaya and Selayang, with broader programs available for ages 4 to 18.</p>
        </div>
    </section>

    <section class="section about-branches-section">
        <div class="locations-layout">
            <div class="section-heading">
                <span class="eyebrow">Branch Presence</span>
                <h2>Active branches across Selangor.</h2>
                <p>NextGen Makers classes are available at active branches across Shah Alam, Bangi, Puncak Alam, Cyberjaya and Selayang.</p>
                <a class="btn btn-primary" href="<?= htmlspecialchars(url_path('/locations.php')) ?>">View Branch Locations</a>
            </div>
            <div class="student-photo-placeholder locations-photo photo-fill" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/LITTLE MAKER/6127599252902364638.jpg')) ?>');">
                <span>Classroom learning space</span>
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

    <?php include __DIR__ . '/includes/cta.php'; ?>

    <section class="section about-faq-section">
        <div class="section-heading">
            <span class="eyebrow">About Us FAQ</span>
            <h2>Questions parents often ask.</h2>
        </div>
        <div class="faq-list">
            <?php foreach ($faqs as $faq): ?>
                <details>
                    <summary><?= htmlspecialchars($faq['question']) ?></summary>
                    <p><?= htmlspecialchars($faq['answer']) ?></p>
                </details>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="section final-cta-section">
        <div class="final-cta-inner">
            <div>
                <span class="eyebrow">Start Today</span>
                <h2>Let your child learn, build, code and create.</h2>
                <p>NextGen Makers Robotics Academy helps children and teenagers build future-ready skills through hands-on robotics, coding and STEM education.</p>
            </div>
            <a class="btn btn-dark" href="<?= htmlspecialchars(whatsapp_url()) ?>" target="_blank" rel="noopener">Book Trial Class</a>
        </div>
    </section>
</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
