<?php
$pageTitle = 'Little Maker Robotics & Coding Program for Kids Aged 4-5 | NextGen Makers';
$pageDescription = 'Little Maker by NextGen Makers is a play-based robotics and coding program for children aged 4 to 5. Students learn basic coding, robotics and engineering concepts using coding robots, motorized building blocks and LEGO WeDo.';
include __DIR__ . '/../includes/header.php';

$littleMakerWhatsapp = whatsapp_url("Hi NextGen Makers, I would like to book a Little Maker trial class for my child.\n\nChild's age:\nPreferred branch:\nPreferred day/time:\n\nPlease share the available trial class slots. Thank you.");

$suitableItems = [
    'Children aged 4 to 5',
    'Beginners with no coding or robotics experience',
    'Children who enjoy building blocks and hands-on play',
    'Children who like robots, movement and creative activities',
    'Parents who want early STEM exposure for their child',
    'Children who need a fun enrichment activity beyond normal preschool learning',
];

$learningAreas = [
    ['title' => 'Basic Coding Concepts', 'text' => 'Children learn that robots and machines follow instructions. They begin to understand simple sequencing, direction and step-by-step thinking.'],
    ['title' => 'Robotics Introduction', 'text' => 'Children explore how robots move, respond and complete simple tasks through guided activities.'],
    ['title' => 'Sequencing and Simple Instructions', 'text' => 'Children practise arranging actions in the correct order, helping them build early logical thinking.'],
    ['title' => 'Early Engineering Thinking', 'text' => 'Children learn how parts connect, how structures are built and how simple mechanisms work.'],
    ['title' => 'Motorized Building Skills', 'text' => 'Children use motorized mechanical building blocks and LEGO WeDo to create moving models.'],
    ['title' => 'Problem-Solving Through Play', 'text' => 'Children are encouraged to try, test, adjust and improve their projects when something does not work.'],
    ['title' => 'Hands-On Building Confidence', 'text' => 'Children build confidence by completing simple robotics projects and seeing their ideas come to life.'],
];

$tools = [
    ['title' => 'Coding Robot', 'text' => 'Children use coding robots to explore movement, direction, simple commands and early coding logic.'],
    ['title' => 'Motorized Mechanical Building Blocks', 'text' => 'Children build moving structures and learn how basic mechanical parts work together.'],
    ['title' => 'LEGO WeDo', 'text' => 'Children explore robotics and engineering concepts using LEGO WeDo, helping them connect building with basic programming and movement.'],
];

$learningFlow = [
    ['title' => 'Discover', 'text' => 'Children are introduced to a simple robotics or STEM concept through storytelling, demonstration or guided play.'],
    ['title' => 'Build', 'text' => 'Children use robotics kits, blocks or LEGO WeDo to build a simple model.'],
    ['title' => 'Code', 'text' => 'Children apply simple instructions or coding steps to control movement or action.'],
    ['title' => 'Test', 'text' => 'Children test whether their robot or model works as expected.'],
    ['title' => 'Improve', 'text' => 'Children are guided to adjust, fix or improve their model when needed.'],
    ['title' => 'Celebrate', 'text' => 'Children are encouraged to show their completed project and explain what they built in a simple way.'],
];

$projectOutputs = [
    'Simple moving robot',
    'Motorized animal or vehicle model',
    'LEGO WeDo robotic model',
    'Direction-based coding robot activity',
    'Simple machine movement project',
    'Guided robotics challenge',
];

$littleMakerGallery = [
    'LITTLE MAKER/6127599252902364638.jpg',
    'LITTLE MAKER/6274016526272760775.jpg',
    'LITTLE MAKER/6064332481965526171.jpg',
    'LITTLE MAKER/6314530536164101417.jpg',
    'LITTLE MAKER/6332480312595647602.jpg',
    'LITTLE MAKER/6127599252902364639.jpg',
];

$benefits = [
    ['title' => 'Builds Early Logical Thinking', 'text' => 'Children learn that actions happen in sequence and instructions need to be arranged correctly.'],
    ['title' => 'Encourages Problem-Solving', 'text' => 'Children learn to try again when something does not work.'],
    ['title' => 'Develops Creativity', 'text' => 'Children build models, explore ideas and create their own simple projects.'],
    ['title' => 'Strengthens Focus and Patience', 'text' => 'Children practise following steps, completing tasks and testing their work.'],
    ['title' => 'Builds Confidence with Technology', 'text' => 'Children see technology as something they can create with, not just something they watch or consume.'],
];

$skills = [
    ['title' => 'Coding Readiness', 'text' => 'Understanding simple instructions, sequence and direction.'],
    ['title' => 'Fine Motor Skills', 'text' => 'Building, connecting, arranging and handling robotics parts.'],
    ['title' => 'Problem-Solving', 'text' => 'Trying different ways to make a robot or model work.'],
    ['title' => 'Creative Thinking', 'text' => 'Creating models and exploring how they move or function.'],
    ['title' => 'Focus and Task Completion', 'text' => 'Following guided steps from start to finish.'],
    ['title' => 'Communication', 'text' => 'Explaining what they built in simple words.'],
    ['title' => 'Confidence', 'text' => 'Feeling proud when their project works.'],
    ['title' => 'STEM Curiosity', 'text' => 'Developing early interest in science, technology, engineering and robotics.'],
];

$classDetails = [
    'Age group: 4-5 years old',
    'Level: Beginner to Intermediate',
    'Class duration: 1 hour per slot',
    'Frequency: 4 classes per month',
    'Available on weekdays and weekends',
    'Morning and afternoon/evening slots available',
    'Available at all active NextGen Makers branches',
    'Trial class available at RM99',
];

$faqs = [
    ['question' => 'Is Little Maker suitable for beginners?', 'answer' => 'Yes. Little Maker is designed for beginners with no prior coding or robotics experience.'],
    ['question' => 'What age is Little Maker for?', 'answer' => 'Little Maker is suitable for children aged 4 to 5 years old.'],
    ['question' => 'What will my child learn in Little Maker?', 'answer' => 'Children will learn basic coding, robotics introduction, sequencing, simple instructions, early engineering concepts, motorized building and problem-solving through play.'],
    ['question' => 'What tools are used in Little Maker?', 'answer' => 'Students use coding robots, motorized mechanical building blocks and LEGO WeDo.'],
    ['question' => 'Does my child need to know how to read or code first?', 'answer' => 'No. Little Maker is beginner-friendly and uses age-appropriate hands-on activities.'],
    ['question' => 'How long is each class?', 'answer' => 'Each class is 1 hour. Classes are conducted 4 times per month.'],
    ['question' => 'Is there a trial class?', 'answer' => 'Yes. Parents can book a Little Maker trial class for RM99.'],
    ['question' => 'How do I book?', 'answer' => 'You can book a trial class by contacting NextGen Makers on WhatsApp at 011-5662 0871.'],
];
?>

<main>
    <section class="hero program-detail-hero little-maker-hero">
        <div class="hero-content">
            <span class="eyebrow">Little Maker</span>
            <h1>Little Maker: Robotics & Coding for Ages 4-5</h1>
            <p class="hero-lead">A playful introduction to robotics, coding and engineering for young children.</p>
            <p>Little Maker is a beginner-friendly robotics and coding program designed for children aged 4 to 5. Through fun, hands-on and play-based activities, children are introduced to basic coding, robotics, engineering concepts, problem-solving and creative building.</p>
            <p>This program is suitable for children with no prior coding or robotics experience.</p>
            <div class="button-row">
                <a class="btn btn-primary" href="<?= htmlspecialchars($littleMakerWhatsapp) ?>" target="_blank" rel="noopener">Book Trial Class</a>
                <a class="btn btn-secondary" href="<?= htmlspecialchars(url_path('/programs.php')) ?>">Explore Learning Pathway</a>
            </div>
            <div class="program-detail-badges">
                <span>Age 4-5 Years</span>
                <span>Beginner Friendly</span>
                <span>Play-Based Learning</span>
                <span>Coding Robot</span>
                <span>LEGO WeDo</span>
                <span>Trial Class RM99</span>
            </div>
        </div>
        <div class="hero-visual" aria-label="Little Maker robotics and coding activity">
            <div class="hero-photo-card hero-photo-main" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/LITTLE MAKER/6274016526272760775.jpg')) ?>');">
                <span>Play-based robotics</span>
            </div>
            <div class="hero-photo-card hero-photo-secondary" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/LITTLE MAKER/6127599252902364638.jpg')) ?>');">
                <span>Guided STEM class</span>
            </div>
        </div>
    </section>

    <section class="section program-intro-section">
        <div class="program-detail-split">
            <div>
                <span class="eyebrow">Program Overview</span>
                <h2>What is Little Maker?</h2>
                <p>Little Maker is an early robotics and coding program for young children who are new to technology learning.</p>
                <p>This program introduces children to robotics, basic coding and simple engineering concepts through hands-on activities. Instead of starting with complicated screens or difficult coding language, children learn through play, movement, building and guided exploration.</p>
                <p>Using coding robots, motorized mechanical building blocks and LEGO WeDo, students begin to understand how instructions, sequencing, movement, motors and simple machines work.</p>
                <p>Little Maker helps children build curiosity, confidence and early problem-solving skills while having fun with technology.</p>
            </div>
            <aside class="program-highlight-card">
                <strong>No coding experience needed.</strong>
                <p>Little Maker is designed for young beginners who are just starting their robotics and STEM learning journey.</p>
                <div class="student-photo-placeholder photo-fill" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/LITTLE MAKER/6064332481965526171.jpg')) ?>');">
                    <span>Beginner friendly</span>
                </div>
            </aside>
        </div>
    </section>

    <section class="section suitable-section">
        <div class="program-detail-split reverse">
            <div class="student-photo-placeholder portrait photo-fill program-suitable-photo" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/LITTLE MAKER/6314530536164101417.jpg')) ?>');">
                <span>Preschool STEM learning</span>
            </div>
            <div>
                <span class="eyebrow">Who Is This For?</span>
                <h2>Is Little Maker suitable for my child?</h2>
                <p>Little Maker is suitable for young children who enjoy hands-on play, building activities and exploring how things move.</p>
                <p>It is designed for children who are ready to follow simple instructions, participate in guided activities and explore robotics through a fun and structured class setting.</p>
                <div class="program-chip-grid">
                    <?php foreach ($suitableItems as $item): ?>
                        <span><?= htmlspecialchars($item) ?></span>
                    <?php endforeach; ?>
                </div>
                <div class="parent-note">
                    <strong>Parent-Friendly Note</strong>
                    <p>Your child does not need to know coding before joining. The program starts with simple, age-appropriate activities that help children understand basic concepts step by step.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section learning-areas-section">
        <div class="section-heading">
            <span class="eyebrow">What Students Learn</span>
            <h2>What will children learn in Little Maker?</h2>
            <p>In Little Maker, children are introduced to early robotics, coding and engineering concepts in a simple and playful way.</p>
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
            <span class="eyebrow">Tools & Kits</span>
            <h2>Tools & kits used in Little Maker.</h2>
            <p>Little Maker uses age-appropriate robotics and building tools to make technology learning fun and easy to understand.</p>
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
            <h2>How children learn in Little Maker.</h2>
            <p>Little Maker follows a simple hands-on learning flow that helps young children explore robotics and coding step by step.</p>
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
            <strong>At this age, the goal is not to make learning complicated.</strong>
            <p>The goal is to help children enjoy creating, exploring and solving small challenges with confidence.</p>
        </div>
    </section>

    <section class="section project-output-section">
        <div class="program-detail-split">
            <div>
                <span class="eyebrow">Final Project / Output</span>
                <h2>What will my child be able to build?</h2>
                <p>By joining Little Maker, students will build and program their own robotic models while applying basic coding and engineering concepts in real hands-on projects.</p>
                <p>The final output may include simple moving robots, motorized models or LEGO-based robotics projects that children can test, improve and proudly present.</p>
                <div class="program-chip-grid">
                    <?php foreach ($projectOutputs as $item): ?>
                        <span><?= htmlspecialchars($item) ?></span>
                    <?php endforeach; ?>
                </div>
            </div>
            <aside class="parent-value-card">
                <strong>Parent Value</strong>
                <p>These projects help parents see real learning outcomes, not just worksheets or theory, but actual models that the child builds, tests and explains.</p>
                <div class="student-photo-placeholder photo-fill" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/LITTLE MAKER/6332480312595647602.jpg')) ?>');">
                    <span>Real project output</span>
                </div>
            </aside>
        </div>
    </section>

    <section class="section little-maker-gallery-section">
        <div class="section-heading">
            <span class="eyebrow">Little Maker Gallery</span>
            <h2>Young children learning through play, building and robotics.</h2>
            <p>A look at hands-on activities, guided exploration and playful STEM learning moments in the Little Maker journey.</p>
        </div>
        <div class="little-maker-slider" data-gallery-slider>
            <button class="gallery-control gallery-prev" type="button" aria-label="Previous Little Maker photo" data-gallery-prev>Prev</button>
            <div class="little-maker-gallery" data-gallery-track>
                <?php foreach ($littleMakerGallery as $index => $image): ?>
                    <div class="gallery-slide <?= $index === 0 ? 'is-active' : '' ?>" data-gallery-slide>
                        <div class="student-photo-placeholder photo-fill" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/' . $image)) ?>');" aria-label="Little Maker gallery photo <?= $index + 1 ?>"></div>
                    </div>
                <?php endforeach; ?>
            </div>
            <button class="gallery-control gallery-next" type="button" aria-label="Next Little Maker photo" data-gallery-next>Next</button>
            <div class="gallery-dots" aria-label="Little Maker gallery navigation" data-gallery-dots>
                <?php foreach ($littleMakerGallery as $index => $image): ?>
                    <button class="<?= $index === 0 ? 'is-active' : '' ?>" type="button" aria-label="Show Little Maker photo <?= $index + 1 ?>" data-gallery-dot="<?= $index ?>"></button>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="section benefits-section">
        <div class="section-heading">
            <span class="eyebrow">Why Start Early?</span>
            <h2>Why start robotics & coding at this age?</h2>
            <p>Young children learn best through play, movement and hands-on exploration. Robotics and coding activities can help them develop early thinking skills in a fun and meaningful way.</p>
            <p>At age 4 to 5, children are naturally curious. Little Maker uses this curiosity to introduce early technology skills in a way that feels like play.</p>
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
            <span class="eyebrow">Skills Children Develop</span>
            <h2>Skills your child will build.</h2>
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
                <h2>The first step in the NextGen Makers pathway.</h2>
                <p>Little Maker is the first stage in the NextGen Makers robotics, coding and STEM pathway.</p>
                <p>Children begin with play-based robotics and basic coding. As they grow, they can progress into Junior Maker, where they explore Scratch, STEM, animation, game development and digital creativity.</p>
                <p>This pathway allows children to build confidence gradually and continue developing future-ready skills as they grow older.</p>
                <a class="btn btn-primary" href="<?= htmlspecialchars(url_path('/programs.php')) ?>">View Full Learning Pathway</a>
            </div>
            <div class="pathway-preview-stack">
                <article><span>Age 4-5</span><strong>Little Maker</strong><p>Play-based robotics, coding robot, motorized blocks and LEGO WeDo.</p></article>
                <article><span>Age 6-9</span><strong>Junior Maker</strong><p>Scratch, STEM, animation, games and digital creativity.</p></article>
                <article><span>Age 10+</span><strong>Young Coder</strong><p>Arduino, electronics, robotics and engineering projects.</p></article>
            </div>
        </div>
    </section>

    <section class="section class-structure-section">
        <div class="section-heading">
            <span class="eyebrow">Class Structure</span>
            <h2>Little Maker class structure.</h2>
            <p>Little Maker classes are designed to be short, structured and suitable for young children.</p>
        </div>
        <div class="class-detail-grid">
            <?php foreach ($classDetails as $detail): ?>
                <article><?= htmlspecialchars($detail) ?></article>
            <?php endforeach; ?>
        </div>
        <div class="parent-note">
            <strong>Schedule Note</strong>
            <p>Parents may contact NextGen Makers on WhatsApp to check the latest schedule and branch availability.</p>
        </div>
    </section>

    <section class="section program-trial-detail-section">
        <div class="program-trial-detail-inner">
            <div>
                <span class="eyebrow">Trial Class CTA</span>
                <h2>Book a Little Maker trial class.</h2>
                <p>Want to see whether your child enjoys robotics and coding? Book a trial class and let your child experience a fun, age-appropriate hands-on activity before enrolling.</p>
                <p>During the trial class, your child will be introduced to simple robotics or coding activities. Parents may receive basic feedback on the child's interest, participation and suitable learning level.</p>
                <div class="trial-detail-row">
                    <span>Trial Class Fee: <strong>RM99</strong></span>
                    <span>Duration: <strong>1 hour</strong></span>
                    <span>Suitable for: <strong>Age 4-5</strong></span>
                    <span>Booking: <strong>WhatsApp</strong></span>
                </div>
            </div>
            <a class="btn btn-dark" href="<?= htmlspecialchars($littleMakerWhatsapp) ?>" target="_blank" rel="noopener">Book Trial Class on WhatsApp</a>
        </div>
    </section>

    <section class="section branch-availability-section">
        <div class="locations-layout">
            <div class="section-heading">
                <span class="eyebrow">Branch Availability</span>
                <h2>Available at all active NextGen Makers branches.</h2>
                <p>Little Maker is available at all active NextGen Makers branches, subject to schedule and slot availability.</p>
                <a class="btn btn-primary" href="<?= htmlspecialchars(whatsapp_url('Hi NextGen Makers, I would like to check the Little Maker schedule and available branches.')) ?>" target="_blank" rel="noopener">Check Little Maker Schedule</a>
            </div>
            <div class="student-photo-placeholder locations-photo photo-fill" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/LITTLE MAKER/6127599252902364638.jpg')) ?>');">
                <span>Available branches</span>
            </div>
        </div>
        <div class="branch-grid branch-showcase">
            <?php foreach ($branches as $index => $branch): ?>
                <article>
                    <span><?= str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT) ?></span>
                    <strong><?= htmlspecialchars($branch) ?></strong>
                    <a href="<?= htmlspecialchars(whatsapp_url('Hi NextGen Makers, I would like to check the Little Maker schedule at ' . $branch . '.')) ?>" target="_blank" rel="noopener">Check Schedule</a>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="section about-faq-section">
        <div class="section-heading">
            <span class="eyebrow">Little Maker FAQ</span>
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
                <span class="eyebrow">Start Early</span>
                <h2>Let your child build their first robot.</h2>
                <p>Little Maker gives young children a fun and meaningful first step into robotics, coding and STEM. Through play-based hands-on learning, your child can begin building confidence, creativity and problem-solving skills from an early age.</p>
            </div>
            <a class="btn btn-dark" href="<?= htmlspecialchars($littleMakerWhatsapp) ?>" target="_blank" rel="noopener">Book Little Maker Trial Class</a>
        </div>
    </section>
</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>
