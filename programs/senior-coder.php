<?php
$pageTitle = 'Senior Coder Web, App & Game Development Program for Teens 16+ | NextGen Makers';
$pageDescription = 'Senior Coder by NextGen Makers is an advanced web design, app development, game development and digital product creation program for teenagers aged 16 and above. Students learn to design, build and present real digital products.';
include __DIR__ . '/../includes/header.php';

$seniorCoderWhatsapp = whatsapp_url("Hi NextGen Makers, I would like to book a Senior Coder trial class for my child.\n\nChild's age:\nPreferred branch:\nPreferred day/time:\n\nPlease share the available trial class slots. Thank you.");

$suitableItems = [
    'Students aged 16 years old and above',
    'Learners interested in web design, apps and digital products',
    'Teenagers who want to build websites, games or app prototypes',
    'Students ready for structured digital project development',
    'Learners who enjoy design, coding, logic and creative problem-solving',
    'Students interested in software, UI design or technology careers',
    'Parents who want their teen to build practical digital creation skills',
];

$learningAreas = [
    ['title' => 'Web Design Fundamentals', 'text' => 'Students learn how websites are structured, designed and built for users.'],
    ['title' => 'Frontend Development', 'text' => 'Students explore layout, interface elements, styling and interactive website behaviour.'],
    ['title' => 'App Development Concepts', 'text' => 'Students learn how app ideas are planned, structured and turned into usable digital experiences.'],
    ['title' => 'Game Development Basics', 'text' => 'Students explore game logic, interaction, scoring, levels and player experience.'],
    ['title' => 'UI and UX Thinking', 'text' => 'Students learn how to design screens that are clear, useful and easy to navigate.'],
    ['title' => 'Digital Product Planning', 'text' => 'Students learn how to define a problem, plan features and build a working digital solution.'],
    ['title' => 'Project Presentation', 'text' => 'Students practise explaining their idea, design choices, features and final project outcome.'],
];

$tools = [
    ['title' => 'Web Design Tools', 'text' => 'Students use beginner-friendly tools and coding workflows to design and build website interfaces.'],
    ['title' => 'App and Game Logic', 'text' => 'Students learn how digital products use screens, rules, interactions and user input.'],
    ['title' => 'Digital Project Workflow', 'text' => 'Students plan, build, test, improve and present a finished digital product.'],
];

$projectOutputs = [
    'Personal website',
    'Landing page design',
    'Interactive web page',
    'Simple app prototype',
    'Game concept or playable mini game',
    'Digital product mockup',
    'User interface design',
    'Portfolio-style project',
    'Problem-solving digital tool',
    'Final digital showcase project',
];

$learningFlow = [
    ['title' => 'Define the Idea', 'text' => 'Students identify the purpose of their website, app, game or digital product.'],
    ['title' => 'Plan the Features', 'text' => 'Students decide what screens, sections, interactions or game rules are needed.'],
    ['title' => 'Design the Interface', 'text' => 'Students create layouts that are clear, usable and visually organised.'],
    ['title' => 'Build the Project', 'text' => 'Students turn their plan into a working digital product using guided coding and design activities.'],
    ['title' => 'Test the Experience', 'text' => 'Students check whether their product works clearly and fix issues.'],
    ['title' => 'Improve the Product', 'text' => 'Students refine layout, interaction, content and user experience.'],
    ['title' => 'Present the Outcome', 'text' => 'Students explain what they built, who it is for and how it works.'],
];

$benefits = [
    ['title' => 'Builds Practical Digital Skills', 'text' => 'Students learn how websites, apps, games and digital products are planned and created.'],
    ['title' => 'Develops Product Thinking', 'text' => 'Students learn to think about users, features, purpose and usability.'],
    ['title' => 'Strengthens Creative Problem-Solving', 'text' => 'Students turn ideas into structured digital solutions.'],
    ['title' => 'Improves Design Confidence', 'text' => 'Students learn to organise screens, layouts and content clearly.'],
    ['title' => 'Encourages Project Ownership', 'text' => 'Students build projects they can test, improve and present.'],
    ['title' => 'Prepares Students for Future Digital Pathways', 'text' => 'Senior Coder supports future learning in software development, design, product building and technology careers.'],
];

$skills = [
    ['title' => 'Web Design', 'text' => 'Understanding page structure, layout, sections and visual hierarchy.'],
    ['title' => 'Frontend Thinking', 'text' => 'Building interfaces that users can read, click and interact with.'],
    ['title' => 'App Planning', 'text' => 'Turning an app idea into screens, flows and useful features.'],
    ['title' => 'Game Logic', 'text' => 'Understanding rules, interaction, scoring and feedback.'],
    ['title' => 'UI and UX Awareness', 'text' => 'Designing clear screens that help users complete tasks.'],
    ['title' => 'Problem-Solving', 'text' => 'Finding practical ways to make digital ideas work.'],
    ['title' => 'Project Development', 'text' => 'Planning, building, testing and improving a complete digital project.'],
    ['title' => 'Creative Confidence', 'text' => 'Using technology to create original digital products.'],
    ['title' => 'Presentation Skills', 'text' => 'Explaining the purpose, features and value of a project.'],
];

$classDetails = [
    'Age group: 16 years old and above',
    'Level: Advanced',
    'Class duration: 1 hour per slot',
    'Frequency: 4 classes per month',
    'Available on weekdays and weekends',
    'Morning and afternoon/evening slots available',
    'Available at all active NextGen Makers branches',
    'Trial class available at RM99',
];

$faqs = [
    ['question' => 'What age is Senior Coder suitable for?', 'answer' => 'Senior Coder is suitable for students aged 16 years old and above.'],
    ['question' => 'What will my child learn in Senior Coder?', 'answer' => 'Students will learn web design, app development concepts, game development basics, UI and UX thinking, digital product planning and project presentation.'],
    ['question' => 'Will my child build real digital projects?', 'answer' => 'Yes. Students will create websites, app prototypes, mini games or digital product projects that can be tested, improved and presented.'],
    ['question' => 'Does my child need advanced coding experience?', 'answer' => 'Students do not need to be experts, but this program is best for teenagers who are ready for structured digital project development.'],
    ['question' => 'Is this program only about websites?', 'answer' => 'No. Senior Coder covers web design, app concepts, game development and digital product creation.'],
    ['question' => 'How long is each class?', 'answer' => 'Each class is 1 hour. Classes are conducted 4 times per month.'],
    ['question' => 'Is there a trial class?', 'answer' => 'Yes. Parents can book a Senior Coder trial class for RM99.'],
    ['question' => 'How do I book?', 'answer' => 'You can book a trial class by contacting NextGen Makers on WhatsApp at 011-5662 0871.'],
];
?>

<main>
    <section class="hero program-detail-hero senior-coder-hero">
        <div class="hero-content">
            <span class="eyebrow">Senior Coder</span>
            <h1>Senior Coder: Web, App & Game Development for Ages 16+</h1>
            <p class="hero-lead">An advanced digital creation program where students design and build websites, apps, games and digital products.</p>
            <p>Senior Coder is designed for teenagers aged 16 and above who are ready to move into more practical digital product creation.</p>
            <p>Students explore web design, app development concepts, game development, interface design and project planning through hands-on learning.</p>
            <p>The program helps students build digital confidence by turning ideas into usable products they can test, improve and present.</p>
            <div class="button-row">
                <a class="btn btn-primary" href="<?= htmlspecialchars($seniorCoderWhatsapp) ?>" target="_blank" rel="noopener">Book Trial Class</a>
                <a class="btn btn-secondary" href="<?= htmlspecialchars(url_path('/programs.php')) ?>">Explore Program Pathway</a>
            </div>
            <div class="program-detail-badges">
                <span>Age 16+</span>
                <span>Web Design</span>
                <span>App Development</span>
                <span>Game Development</span>
                <span>Digital Products</span>
                <span>Trial Class RM99</span>
            </div>
        </div>
        <div class="hero-visual" aria-label="Senior Coder digital product activity">
            <div class="hero-photo-card hero-photo-main" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/YOUNG INNOVATOR/6057412559503474754 (1).jpg')) ?>');">
                <span>Web and app development</span>
            </div>
            <div class="hero-photo-card hero-photo-secondary" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/YOUNG INNOVATOR/6332477108546291204.jpg')) ?>');">
                <span>Digital product showcase</span>
            </div>
        </div>
    </section>

    <section class="section program-intro-section">
        <div class="program-detail-split">
            <div>
                <span class="eyebrow">Program Overview</span>
                <h2>What Is Senior Coder?</h2>
                <p>Senior Coder is an advanced digital creation program for teenagers aged 16 years old and above.</p>
                <p>This program helps students move from learning coding concepts into building practical digital products such as websites, app prototypes, mini games and interactive digital experiences.</p>
                <p>Students learn how to plan ideas, design user interfaces, build digital products, test usability and present their final outcome.</p>
                <p>Senior Coder helps students understand how technology products are created from idea to design, development, improvement and presentation.</p>
            </div>
            <aside class="program-highlight-card">
                <strong>From coding skills to real digital products.</strong>
                <p>Senior Coder helps teenagers turn ideas into websites, apps, games and project portfolios.</p>
                <div class="student-photo-placeholder photo-fill" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/YOUNG INNOVATOR/6140662404523082140.jpg')) ?>');">
                    <span>Digital product creation</span>
                </div>
            </aside>
        </div>
    </section>

    <section class="section suitable-section">
        <div class="program-detail-split reverse">
            <div class="student-photo-placeholder portrait photo-fill program-suitable-photo" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/senior-coder-2.jpg')) ?>');">
                <span>Teen coding class</span>
            </div>
            <div>
                <span class="eyebrow">Who Is This For?</span>
                <h2>Is Senior Coder Suitable for My Teen?</h2>
                <p>Senior Coder is suitable for students who are interested in websites, apps, games, design, digital products or software development.</p>
                <p>This program is ideal for teenagers who want to create practical digital projects and understand how digital products are planned, designed and built.</p>
                <div class="program-chip-grid">
                    <?php foreach ($suitableItems as $item): ?>
                        <span><?= htmlspecialchars($item) ?></span>
                    <?php endforeach; ?>
                </div>
                <div class="parent-note">
                    <strong>Parent-Friendly Note</strong>
                    <p>Your child does not need to be a professional developer before joining, but this program is best for students who are ready to build structured digital projects.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section learning-areas-section">
        <div class="section-heading">
            <span class="eyebrow">What Students Learn</span>
            <h2>What Will Students Learn in Senior Coder?</h2>
            <p>Senior Coder helps students build practical digital creation skills through websites, apps, games and product-based projects.</p>
        </div>
        <div class="program-feature-grid">
            <?php foreach ($learningAreas as $index => $area): ?>
                <article>
                    <span><?= str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT) ?></span>
                    <h3><?= htmlspecialchars($area['title']) ?></h3>
                    <p><?= htmlspecialchars($area['text']) ?></p>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="section tools-section">
        <div class="section-heading">
            <span class="eyebrow">Tools & Workflow</span>
            <h2>Tools & Workflow Used in Senior Coder</h2>
            <p>Senior Coder uses guided digital project workflows to help students plan, build and improve websites, app ideas, games and digital products.</p>
        </div>
        <div class="tools-layout">
            <?php foreach ($tools as $index => $tool): ?>
                <article>
                    <div class="tool-icon"><?= str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT) ?></div>
                    <h3><?= htmlspecialchars($tool['title']) ?></h3>
                    <p><?= htmlspecialchars($tool['text']) ?></p>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="section learning-flow-section">
        <div class="section-heading">
            <span class="eyebrow">How Learning Happens</span>
            <h2>How Students Learn in Senior Coder</h2>
            <p>Senior Coder uses project-based learning to help students build complete digital products from idea to presentation.</p>
        </div>
        <div class="program-flow">
            <?php foreach ($learningFlow as $index => $step): ?>
                <article>
                    <span><?= str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT) ?></span>
                    <h3><?= htmlspecialchars($step['title']) ?></h3>
                    <p><?= htmlspecialchars($step['text']) ?></p>
                </article>
            <?php endforeach; ?>
        </div>
        <div class="program-key-message">
            <strong>Senior Coder helps students think like digital product builders.</strong>
            <p>Students learn to design for users, build with purpose and improve their projects based on testing and feedback.</p>
        </div>
    </section>

    <section class="section project-output-section">
        <div class="program-detail-split">
            <div>
                <span class="eyebrow">Final Project / Output</span>
                <h2>What Will My Teen Be Able to Create?</h2>
                <p>By joining Senior Coder, students will create websites, app prototypes, mini games or digital products that demonstrate practical design and development skills.</p>
                <p>Students will be guided to complete a project they can test, improve and present as part of their digital learning portfolio.</p>
                <div class="program-chip-grid">
                    <?php foreach ($projectOutputs as $item): ?>
                        <span><?= htmlspecialchars($item) ?></span>
                    <?php endforeach; ?>
                </div>
            </div>
            <aside class="parent-value-card">
                <strong>Parent Value</strong>
                <p>These projects help parents see practical outcomes. Students are not only learning coding theory. They are creating digital products that can be viewed, tested and presented.</p>
                <div class="student-photo-placeholder photo-fill" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/YOUNG INNOVATOR/6269433018775094371.jpg')) ?>');">
                    <span>Digital project presentation</span>
                </div>
            </aside>
        </div>
    </section>

    <section class="section benefits-section">
        <div class="section-heading">
            <span class="eyebrow">Why Digital Products?</span>
            <h2>Why Learn Web, App & Game Development at Age 16+?</h2>
            <p>Teenagers aged 16 and above are ready to create more complete digital products that combine planning, design, logic and user experience.</p>
            <p>Web, app and game development help students understand how real digital tools are built and improved.</p>
            <p>This gives students practical experience that can support future learning in software development, UI design, product building, entrepreneurship and creative technology.</p>
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

    <section class="section skills-detail-section">
        <div class="section-heading">
            <span class="eyebrow">Skills Students Develop</span>
            <h2>Skills Your Teen Will Build</h2>
        </div>
        <div class="skills-detail-grid">
            <?php foreach ($skills as $skill): ?>
                <article>
                    <strong><?= htmlspecialchars($skill['title']) ?></strong>
                    <p><?= htmlspecialchars($skill['text']) ?></p>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="section next-pathway-section">
        <div class="program-detail-split">
            <div>
                <span class="eyebrow">NextGen Pathway</span>
                <h2>The Stage Where Students Build Digital Products</h2>
                <p>Senior Coder is the stage where students move into websites, apps, games and digital product creation.</p>
                <p>After students have built technical confidence through robotics, coding and innovation programs, Senior Coder helps them turn ideas into user-facing digital experiences.</p>
                <a class="btn btn-primary" href="<?= htmlspecialchars(url_path('/programs.php')) ?>">View Full Learning Pathway</a>
            </div>
            <div class="pathway-preview-stack">
                <article><span>Age 15+</span><strong>Senior Innovator</strong>
                    <p>IoT, smart systems, sensors, cloud connectivity and automation.</p>
                </article>
                <article><span>Age 16+</span><strong>Senior Coder</strong>
                    <p>Web design, app development, game development and digital product creation.</p>
                </article>
                <article><span>Special Program</span><strong>NextGen Genius</strong>
                    <p>Adaptive robotics and STEM learning for children with special needs.</p>
                </article>
            </div>
        </div>
    </section>

    <section class="section class-structure-section">
        <div class="section-heading">
            <span class="eyebrow">Class Structure</span>
            <h2>Class Structure</h2>
            <p>Senior Coder classes are designed for teenagers who are ready for advanced digital product development.</p>
        </div>
        <div class="class-detail-grid">
            <?php foreach ($classDetails as $detail): ?>
                <article><?= htmlspecialchars($detail) ?></article>
            <?php endforeach; ?>
        </div>
        <div class="parent-note">
            <strong>Schedule Note</strong>
            <p>Parents may contact NextGen Makers on WhatsApp to check the latest schedule and suitable class slot.</p>
        </div>
    </section>

    <section class="section program-trial-detail-section">
        <div class="program-trial-detail-inner">
            <div>
                <span class="eyebrow">Trial Class CTA</span>
                <h2>Book a Senior Coder Trial Class</h2>
                <p>Want your teen to explore web design, app development, game development or digital product creation? Book a trial class and let your child experience an age-appropriate digital project activity before enrolling.</p>
                <p>During the trial class, your child will be introduced to a suitable coding or digital creation activity based on age and readiness.</p>
                <div class="trial-detail-row">
                    <span>Trial Class Fee: <strong>RM99</strong></span>
                    <span>Duration: <strong>1 hour</strong></span>
                    <span>Suitable for: <strong>Age 16+</strong></span>
                    <span>Booking: <strong>WhatsApp</strong></span>
                    <span>Available: <strong>Weekdays & weekends</strong></span>
                </div>
            </div>
            <a class="btn btn-dark" href="<?= htmlspecialchars($seniorCoderWhatsapp) ?>" target="_blank" rel="noopener">Book Trial Class on WhatsApp</a>
        </div>
    </section>

    <section class="section branch-availability-section">
        <div class="locations-layout">
            <div class="section-heading">
                <span class="eyebrow">Branch Availability</span>
                <h2>Available at All Active NextGen Makers Branches</h2>
                <p>Senior Coder is available at all active NextGen Makers branches, subject to schedule and slot availability.</p>
                <p>Parents searching for web design class for teens, app development class for teenagers, game development for kids, coding class Malaysia, coding class Shah Alam, coding class Bangi, coding class Cyberjaya or coding class Selayang can check the latest Senior Coder schedule with our team.</p>
                <a class="btn btn-primary" href="<?= htmlspecialchars(whatsapp_url('Hi NextGen Makers, I would like to check the Senior Coder schedule and available branches.')) ?>" target="_blank" rel="noopener">Check Senior Coder Schedule</a>
            </div>
            <div class="student-photo-placeholder locations-photo photo-fill" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/YOUNG INNOVATOR/6332477108546291204.jpg')) ?>');">
                <span>Senior Coder branches</span>
            </div>
        </div>
        <div class="branch-grid branch-showcase">
            <?php foreach ($branches as $index => $branch): ?>
                <article>
                    <span><?= str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT) ?></span>
                    <strong><?= htmlspecialchars($branch) ?></strong>
                    <a href="<?= htmlspecialchars(whatsapp_url('Hi NextGen Makers, I would like to check the Senior Coder schedule at ' . $branch . '.')) ?>" target="_blank" rel="noopener">Check Schedule</a>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="section about-faq-section">
        <div class="section-heading">
            <span class="eyebrow">Senior Coder FAQ</span>
            <h2>Questions Parents Often Ask</h2>
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
                <span class="eyebrow">Build Digital Products</span>
                <h2>Help Your Teen Create Their First Website, App or Game</h2>
                <p>Senior Coder helps teenagers turn ideas into real digital products through web design, app development, game development and project-based learning. Start with a trial class and let your child explore practical digital creation.</p>
            </div>
            <a class="btn btn-dark" href="<?= htmlspecialchars($seniorCoderWhatsapp) ?>" target="_blank" rel="noopener">Book Senior Coder Trial Class</a>
        </div>
    </section>
</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>
