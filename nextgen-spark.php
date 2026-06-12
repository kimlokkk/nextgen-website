<?php
$pageTitle = 'NextGen Spark Student Project Showcase | Robotics, Coding & STEM | NextGen Makers';
$pageDescription = 'NextGen Spark by NextGen Makers is a student project showcase where children and teenagers present robotics, coding, Arduino, IoT, digital product and STEM projects with confidence.';
include __DIR__ . '/includes/header.php';

$sparkWhatsapp = whatsapp_url("Hi NextGen Makers, I would like to know more about NextGen Spark.\n\nChild's age:\nCurrent program/interest:\nPreferred branch:\n\nPlease share more details. Thank you.");

$benefits = [
    ['title' => 'Builds Confidence', 'text' => 'Students gain confidence when they explain what they built, how it works and what they improved.'],
    ['title' => 'Improves Communication', 'text' => 'Students practise sharing ideas clearly with parents, facilitators and other learners.'],
    ['title' => 'Encourages Project Ownership', 'text' => 'Students learn to take pride in their own work, decisions, effort and progress.'],
    ['title' => 'Strengthens Problem-Solving', 'text' => 'Students reflect on project challenges and explain how they tested, fixed and improved their work.'],
    ['title' => 'Supports Creativity', 'text' => 'Students are encouraged to show original ideas through robotics, coding, design and digital creation.'],
    ['title' => 'Builds Future Skills', 'text' => 'Students develop presentation, innovation, collaboration and technical communication skills.'],
];

$showcases = [
    ['title' => 'Robotics Projects', 'text' => 'Moving robots, motorized builds, obstacle challenges and robotics demonstrations.', 'image' => 'nextgen spark/photo_6079869040823748752_y.jpg'],
    ['title' => 'Scratch Games & Animations', 'text' => 'Interactive games, animations, quizzes and creative coding projects.', 'image' => 'nextgen spark/photo_6079869040823749079_y.jpg'],
    ['title' => 'Arduino & Electronics Projects', 'text' => 'Sensor projects, LED systems, motors, buzzers and hands-on electronics builds.', 'image' => 'nextgen spark/photo_6082120840637432540_y.jpg'],
    ['title' => 'Automation Prototypes', 'text' => 'Simple automated systems that react to inputs, conditions or programmed rules.', 'image' => 'nextgen spark/photo_6079869040823749145_y.jpg'],
    ['title' => 'IoT Smart Systems', 'text' => 'Connected devices, monitoring projects, smart systems and data-driven prototypes.', 'image' => 'nextgen spark/photo_6079869040823749206_y.jpg'],
    ['title' => 'Digital Products', 'text' => 'Websites, apps, games, digital tools and technology products built by students.', 'image' => 'nextgen spark/photo_6079869040823748832_y.jpg'],
];

$sparkGallery = [
    'nextgen spark/photo_6079869040823748738_y.jpg',
    'nextgen spark/photo_6079869040823748759_y.jpg',
    'nextgen spark/photo_6079869040823748769_y.jpg',
    'nextgen spark/photo_6079869040823748781_y.jpg',
    'nextgen spark/photo_6079869040823748805_y.jpg',
    'nextgen spark/photo_6079869040823748834_y.jpg',
    'nextgen spark/photo_6079869040823748911_y.jpg',
    'nextgen spark/photo_6079869040823748916_y.jpg',
    'nextgen spark/photo_6079869040823749033_y.jpg',
    'nextgen spark/photo_6079869040823749250_y.jpg',
    'nextgen spark/photo_6082120840637432535_y.jpg',
    'nextgen spark/photo_6098377424996784141_y.jpg',
];

$participants = [
    'Students who are already learning robotics, coding or STEM',
    'Children who have completed a project and are ready to share it',
    'Students who need encouragement to speak about their ideas',
    'Learners who enjoy building, testing and improving projects',
    'Parents who want to see visible learning progress',
    'Students from beginner to advanced levels',
];

$flow = [
    ['title' => 'Project Preparation', 'text' => 'Students choose or complete a project that matches their program level and readiness.'],
    ['title' => 'Project Improvement', 'text' => 'Facilitators guide students to test, refine and improve their project before showcase day.'],
    ['title' => 'Presentation Practice', 'text' => 'Students practise explaining what they built, how it works and what they learned.'],
    ['title' => 'Showcase Day', 'text' => 'Students present their project in a supportive, parent-friendly showcase environment.'],
    ['title' => 'Feedback & Recognition', 'text' => 'Students receive encouragement, feedback and recognition for their effort and progress.'],
    ['title' => 'Portfolio Building', 'text' => 'Students can keep project evidence as part of a learning portfolio for future growth.'],
];

$skills = [
    'Project Confidence',
    'Communication Skills',
    'Problem-Solving',
    'Presentation Skills',
    'Teamwork',
    'Technical Understanding',
    'Innovation Mindset',
    'Project Ownership',
];

$parentBenefits = [
    ['title' => 'Visible Progress', 'text' => 'Parents can see what their child has built, not just hear about class activities.'],
    ['title' => 'Better Confidence', 'text' => 'Children learn to speak about their work in a structured and supportive setting.'],
    ['title' => 'Stronger Motivation', 'text' => 'Showcase opportunities give students a meaningful reason to complete and improve projects.'],
    ['title' => 'Future-Ready Exposure', 'text' => 'Students practise communication, creativity, technology and problem-solving together.'],
];

$programConnection = [
    ['program' => 'Little Maker', 'text' => 'Simple robotics builds, movement activities and early STEM creations.'],
    ['program' => 'Junior Maker', 'text' => 'Scratch animations, games, creative coding and DIY STEM projects.'],
    ['program' => 'Young Coder', 'text' => 'Arduino, electronics, sensors and beginner engineering projects.'],
    ['program' => 'Young Innovator', 'text' => 'C++, Arduino prototypes, automation and functional project builds.'],
    ['program' => 'Senior Innovator', 'text' => 'IoT, smart systems, sensors, automation and connected technology projects.'],
    ['program' => 'Senior Coder', 'text' => 'Websites, apps, games and digital products.'],
    ['program' => 'NextGen Genius', 'text' => 'Adaptive project sharing based on each child\'s ability and confidence level.'],
];

$portfolioItems = [
    'Project photos',
    'Presentation photos',
    'Project description',
    'What the student learned',
    'Problem-solving notes',
    'Improvement steps',
    'Showcase participation',
    'Future project ideas',
];

$futureSkills = [
    'Creativity',
    'Critical Thinking',
    'Communication',
    'Collaboration',
    'Confidence',
    'Innovation',
];

$faqs = [
    ['question' => 'What is NextGen Spark?', 'answer' => 'NextGen Spark is a student project showcase by NextGen Makers where students present robotics, coding, STEM, Arduino, IoT or digital projects in a supportive environment.'],
    ['question' => 'Who can join NextGen Spark?', 'answer' => 'Students from different NextGen Makers programs can participate when they have a suitable project or learning outcome to showcase.'],
    ['question' => 'What kind of projects can students showcase?', 'answer' => 'Students can showcase robotics projects, Scratch games, animations, Arduino electronics projects, automation prototypes, IoT smart systems, websites, apps, games and other digital products.'],
    ['question' => 'Is NextGen Spark only for advanced students?', 'answer' => 'No. NextGen Spark can support beginner, intermediate and advanced students. The showcase level depends on the student\'s age, program and readiness.'],
    ['question' => 'Does NextGen Spark help with confidence?', 'answer' => 'Yes. Students practise explaining their ideas, project process, challenges and results, which helps build confidence and communication skills.'],
    ['question' => 'Can parents attend the showcase?', 'answer' => 'NextGen Spark is designed to help parents see visible learning progress. Parent attendance may depend on the event format and branch arrangement.'],
    ['question' => 'Is NextGen Spark a competition?', 'answer' => 'NextGen Spark is mainly a showcase and recognition platform. The focus is student growth, project ownership, communication and confidence.'],
    ['question' => 'How can my child start?', 'answer' => 'Parents can contact NextGen Makers to check suitable programs, trial class availability and the best pathway for their child to start building projects.'],
];
?>

<main>
    <section class="hero spark-hero">
        <div class="hero-content">
            <span class="eyebrow">NextGen Spark</span>
            <h1>A Student Project Showcase for Young Makers</h1>
            <p class="hero-lead">NextGen Spark gives students a platform to present robotics, coding, STEM and digital projects with confidence.</p>
            <p>Students do more than attend classes. They build, test, improve and explain their work. NextGen Spark helps parents see visible learning progress while students practise communication, creativity and project ownership.</p>
            <div class="button-row">
                <a class="btn btn-primary" href="<?= htmlspecialchars($sparkWhatsapp) ?>" target="_blank" rel="noopener">Ask About NextGen Spark</a>
                <a class="btn btn-secondary" href="<?= htmlspecialchars(url_path('/trial-class.php')) ?>">Book Trial Class</a>
            </div>
            <div class="program-detail-badges">
                <span>Student Showcase</span>
                <span>Robotics</span>
                <span>Coding</span>
                <span>STEM</span>
                <span>Presentation Skills</span>
            </div>
        </div>
        <div class="hero-visual spark-hero-visual" aria-label="NextGen Spark student showcase">
            <div class="hero-photo-card hero-photo-main" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/nextgen spark/photo_6079869040823748769_y.jpg')) ?>');">
                <span>Project showcase</span>
            </div>
            <div class="hero-photo-card hero-photo-secondary" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/nextgen spark/photo_6079869040823748752_y.jpg')) ?>');">
                <span>Confident young makers</span>
            </div>
            <div class="spark-burst-card">
                <strong>Show. Share. Shine.</strong>
                <small>Build confidence through real projects.</small>
            </div>
        </div>
    </section>

    <section class="section spark-intro-section">
        <div class="program-detail-split">
            <div>
                <span class="eyebrow">What Is NextGen Spark?</span>
                <h2>A showcase platform for student projects.</h2>
                <p>NextGen Spark is a project showcase initiative by NextGen Makers where students present what they have built through robotics, coding, STEM and technology learning.</p>
                <p>It helps students move from simply completing activities to communicating their ideas, explaining their process and taking ownership of their project outcome.</p>
                <p>The showcase can include robotics builds, Scratch games, Arduino projects, automation prototypes, IoT smart systems, apps, websites, games and other digital creations.</p>
            </div>
            <aside class="spark-highlight-box">
                <span>Highlight</span>
                <strong>Students learn to present the story behind their project.</strong>
                <p>What they built, why they built it, how it works, what went wrong and how they improved it.</p>
            </aside>
        </div>
    </section>

    <section class="section spark-benefits-section">
        <div class="section-heading">
            <span class="eyebrow">Why It Matters</span>
            <h2>NextGen Spark turns learning into visible progress.</h2>
            <p>Children build deeper confidence when they can show their work, explain their thinking and receive encouragement for real effort.</p>
        </div>
        <div class="program-benefit-grid">
            <?php foreach ($benefits as $benefit): ?>
                <article>
                    <h3><?= htmlspecialchars($benefit['title']) ?></h3>
                    <p><?= htmlspecialchars($benefit['text']) ?></p>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="section spark-showcase-section">
        <div class="section-heading">
            <span class="eyebrow">Project Showcase Examples</span>
            <h2>What students can showcase.</h2>
            <p>NextGen Spark can feature different project types based on the student's program, age, skill level and readiness.</p>
        </div>
        <div class="spark-showcase-grid">
            <?php foreach ($showcases as $item): ?>
                <article>
                    <div class="spark-showcase-photo photo-fill" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/' . $item['image'])) ?>');"></div>
                    <div>
                        <h3><?= htmlspecialchars($item['title']) ?></h3>
                        <p><?= htmlspecialchars($item['text']) ?></p>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
        <div class="parent-note">
            <strong>Parent Value</strong>
            <p>Parents get to see real student output, not just class attendance. This makes progress easier to understand and celebrate.</p>
        </div>
    </section>

    <section class="section spark-gallery-section">
        <div class="section-heading">
            <span class="eyebrow">Spark Gallery</span>
            <h2>Students presenting, testing and celebrating their projects.</h2>
            <p>Moments from NextGen Spark where young makers share their work with facilitators, parents and the NextGen community.</p>
        </div>
        <div class="little-maker-slider spark-gallery-slider" data-gallery-slider>
            <button class="gallery-control gallery-prev" type="button" aria-label="Previous NextGen Spark photo" data-gallery-prev>Prev</button>
            <div class="little-maker-gallery spark-gallery" data-gallery-track>
                <?php foreach ($sparkGallery as $index => $image): ?>
                    <div class="gallery-slide <?= $index === 0 ? 'is-active' : '' ?>" data-gallery-slide>
                        <div class="student-photo-placeholder photo-fill" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/' . $image)) ?>');" aria-label="NextGen Spark gallery photo <?= $index + 1 ?>"></div>
                    </div>
                <?php endforeach; ?>
            </div>
            <button class="gallery-control gallery-next" type="button" aria-label="Next NextGen Spark photo" data-gallery-next>Next</button>
            <div class="gallery-dots" aria-label="NextGen Spark gallery navigation" data-gallery-dots>
                <?php foreach ($sparkGallery as $index => $image): ?>
                    <button class="<?= $index === 0 ? 'is-active' : '' ?>" type="button" aria-label="Show NextGen Spark photo <?= $index + 1 ?>" data-gallery-dot="<?= $index ?>"></button>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="section spark-participate-section">
        <div class="program-detail-split reverse">
            <div class="student-photo-placeholder portrait photo-fill program-suitable-photo" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/nextgen spark/photo_6079869040823749079_y.jpg')) ?>');">
                <span>Student project presentation</span>
            </div>
            <div>
                <span class="eyebrow">Who Can Participate?</span>
                <h2>Suitable for students ready to share what they built.</h2>
                <p>NextGen Spark is suitable for students who are learning through hands-on projects and are ready to communicate their progress in a guided, supportive setting.</p>
                <div class="program-chip-grid">
                    <?php foreach ($participants as $item): ?>
                        <span><?= htmlspecialchars($item) ?></span>
                    <?php endforeach; ?>
                </div>
                <div class="parent-note">
                    <strong>Participation Note</strong>
                    <p>Students do not need to be perfect presenters. The goal is to practise confidence, communication and ownership step by step.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section spark-flow-section">
        <div class="section-heading">
            <span class="eyebrow">How It Works</span>
            <h2>From project preparation to showcase day.</h2>
            <p>NextGen Spark is designed as a guided flow so students can prepare, improve and present with confidence.</p>
        </div>
        <div class="program-flow">
            <?php foreach ($flow as $index => $step): ?>
                <article>
                    <span><?= str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT) ?></span>
                    <h3><?= htmlspecialchars($step['title']) ?></h3>
                    <p><?= htmlspecialchars($step['text']) ?></p>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="section spark-skills-section">
        <div class="section-heading">
            <span class="eyebrow">Skills Grid</span>
            <h2>Skills students build through NextGen Spark.</h2>
        </div>
        <div class="spark-skill-grid">
            <?php foreach ($skills as $index => $skill): ?>
                <article>
                    <span><?= str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT) ?></span>
                    <strong><?= htmlspecialchars($skill) ?></strong>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="section spark-parent-section">
        <div class="section-heading">
            <span class="eyebrow">Why Parents Value It</span>
            <h2>A clearer way to see your child's learning growth.</h2>
            <p>NextGen Spark helps connect class learning with visible outcomes parents can understand, celebrate and remember.</p>
        </div>
        <div class="program-feature-grid">
            <?php foreach ($parentBenefits as $index => $benefit): ?>
                <article>
                    <span><?= str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT) ?></span>
                    <h3><?= htmlspecialchars($benefit['title']) ?></h3>
                    <p><?= htmlspecialchars($benefit['text']) ?></p>
                </article>
            <?php endforeach; ?>
        </div>
        <div class="program-key-message">
            <strong>Parent-friendly message</strong>
            <p>Your child is not only learning robotics or coding. They are learning how to think, build, explain and improve.</p>
        </div>
    </section>

    <section class="section spark-program-section">
        <div class="section-heading">
            <span class="eyebrow">Program Connection</span>
            <h2>Connected to the full NextGen Makers pathway.</h2>
            <p>NextGen Spark can reflect the work students build across different NextGen Makers programs.</p>
        </div>
        <div class="spark-program-lane">
            <?php foreach ($programConnection as $item): ?>
                <article>
                    <strong><?= htmlspecialchars($item['program']) ?></strong>
                    <p><?= htmlspecialchars($item['text']) ?></p>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="section spark-portfolio-section">
        <div class="program-detail-split">
            <div>
                <span class="eyebrow">Project Portfolio Value</span>
                <h2>Students can start building a record of their work.</h2>
                <p>NextGen Spark gives students an opportunity to collect project evidence and reflect on what they learned. This can become part of a personal learning portfolio over time.</p>
                <div class="program-chip-grid">
                    <?php foreach ($portfolioItems as $item): ?>
                        <span><?= htmlspecialchars($item) ?></span>
                    <?php endforeach; ?>
                </div>
            </div>
            <aside class="parent-value-card">
                <strong>Supporting Text</strong>
                <p>A simple portfolio helps students remember their progress and gives parents a clearer picture of how their child is growing through project-based learning.</p>
                <div class="student-photo-placeholder photo-fill" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/nextgen spark/photo_6079869040823749206_y.jpg')) ?>');">
                    <span>Project portfolio evidence</span>
                </div>
            </aside>
        </div>
    </section>

    <section class="section spark-experience-section">
        <div class="program-detail-split reverse">
            <div class="student-photo-placeholder portrait photo-fill program-suitable-photo" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/nextgen spark/photo_6079869040823748916_y.jpg')) ?>');">
                <span>Supportive student experience</span>
            </div>
            <div>
                <span class="eyebrow">Student Experience</span>
                <h2>A supportive stage, not a pressure stage.</h2>
                <p>NextGen Spark is designed to help students feel proud of their effort. They are guided to speak about their project in a simple, age-appropriate way.</p>
                <p>Students can share what they enjoyed, what was challenging, how they solved problems and what they want to build next.</p>
                <div class="program-key-message">
                    <strong>Key Message</strong>
                    <p>Every project is a chance for students to learn how to communicate ideas with more confidence.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section spark-future-section">
        <div class="section-heading">
            <span class="eyebrow">Future Skills</span>
            <h2>NextGen Spark supports future-ready learning.</h2>
            <p>Students practise skills that matter beyond the classroom: creativity, critical thinking, communication, collaboration, confidence and innovation.</p>
        </div>
        <div class="spark-future-grid">
            <?php foreach ($futureSkills as $skill): ?>
                <article><?= htmlspecialchars($skill) ?></article>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="section program-trial-detail-section">
        <div class="program-trial-detail-inner">
            <div>
                <span class="eyebrow">Trial Class Details</span>
                <h2>Start with a trial class first.</h2>
                <p>If your child is new to NextGen Makers, start with a trial class. Our team can recommend a suitable program pathway based on age, interest and readiness.</p>
                <div class="trial-detail-row">
                    <span>Trial Class Fee: <strong>RM99</strong></span>
                    <span>Duration: <strong>1 hour</strong></span>
                    <span>Ages: <strong>4 to 18</strong></span>
                    <span>Booking: <strong>WhatsApp</strong></span>
                </div>
            </div>
            <a class="btn btn-dark" href="<?= htmlspecialchars(whatsapp_url("Hi NextGen Makers, I would like to book a trial class and learn more about the NextGen Spark project showcase.\n\nChild's age:\nPreferred branch:\nPreferred day/time:")) ?>" target="_blank" rel="noopener">Book Trial Class</a>
        </div>
    </section>

    <section class="section about-faq-section">
        <div class="section-heading">
            <span class="eyebrow">NextGen Spark FAQ</span>
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
                <span class="eyebrow">Let Your Child Shine</span>
                <h2>Help your child build, present and grow with confidence.</h2>
                <p>NextGen Spark celebrates student projects while helping children develop communication, confidence, creativity and future-ready technology skills.</p>
            </div>
            <a class="btn btn-dark" href="<?= htmlspecialchars($sparkWhatsapp) ?>" target="_blank" rel="noopener">Ask About NextGen Spark</a>
        </div>
    </section>
</main>

<script type="application/ld+json">
<?= json_encode([
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => 'EducationalEvent',
            'name' => 'NextGen Spark Student Project Showcase',
            'description' => 'A NextGen Makers student project showcase for robotics, coding, STEM, Arduino, IoT, digital product and technology projects.',
            'organizer' => [
                '@type' => 'EducationalOrganization',
                'name' => 'NextGen Makers',
                'url' => $siteUrl,
                'telephone' => $whatsappDisplay,
            ],
            'eventAttendanceMode' => 'https://schema.org/OfflineEventAttendanceMode',
            'audience' => [
                '@type' => 'Audience',
                'audienceType' => 'Children and teenagers aged 4 to 18 learning robotics, coding and STEM',
            ],
        ],
        [
            '@type' => 'FAQPage',
            'mainEntity' => array_map(fn($faq) => [
                '@type' => 'Question',
                'name' => $faq['question'],
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => $faq['answer'],
                ],
            ], $faqs),
        ],
    ],
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) ?>
</script>

<?php include __DIR__ . '/includes/footer.php'; ?>
