<?php
$pageTitle = 'Junior Maker Coding & STEM Program for Kids Aged 6-9 | NextGen Makers';
$pageDescription = 'Junior Maker by NextGen Makers is a coding, STEM and digital creativity program for children aged 6 to 9. Students learn ScratchJr, Scratch, animation, game development, digital storytelling and creative problem-solving through hands-on projects.';
include __DIR__ . '/../includes/header.php';

$juniorMakerWhatsapp = whatsapp_url("Hi NextGen Makers, I would like to book a Junior Maker trial class for my child.\n\nChild's age:\nPreferred branch:\nPreferred day/time:\n\nPlease share the available trial class slots. Thank you.");

$suitableItems = [
    'Children aged 6 to 9',
    'Beginner to intermediate students',
    'Children who enjoy games and animation',
    'Children who like storytelling and creative activities',
    'Children interested in coding and technology',
    'Students ready for structured STEM learning',
    'Parents who want their child to build digital confidence',
    'Children who need an enrichment program beyond school academics',
];

$learningAreas = [
    ['title' => 'STEM Fundamentals', 'text' => 'Students explore basic science, technology, engineering and math concepts through simple hands-on activities and projects.'],
    ['title' => 'ScratchJr and Scratch Coding', 'text' => 'Students learn visual programming using ScratchJr and Scratch, helping them understand coding logic without needing complex text-based programming.'],
    ['title' => 'Game Development Basics', 'text' => 'Students learn how simple games are built using characters, movement, conditions, timing, scores and interactions.'],
    ['title' => 'Animation', 'text' => 'Students create animated scenes, moving characters and simple digital sequences.'],
    ['title' => 'Digital Storytelling', 'text' => 'Students learn how to combine characters, backgrounds, movement and dialogue to create interactive stories.'],
    ['title' => 'Computational Thinking', 'text' => 'Students develop step-by-step thinking, sequencing, logic, pattern recognition and debugging skills.'],
    ['title' => 'Creative Problem-Solving', 'text' => 'Students learn to plan, test, improve and complete their own projects creatively.'],
];

$tools = [
    ['title' => 'DIY STEM Kit', 'text' => 'Students explore hands-on STEM activities that help them understand basic engineering, design and problem-solving concepts.'],
    ['title' => 'ScratchJr', 'text' => 'ScratchJr introduces younger learners to visual coding through simple blocks, characters, movement and storytelling.'],
    ['title' => 'Scratch Programming', 'text' => 'Scratch helps students create interactive stories, animations and simple games while learning core coding concepts.'],
];

$learningFlow = [
    ['title' => 'Explore', 'text' => 'Students are introduced to a coding, STEM or creative technology concept in a simple and engaging way.'],
    ['title' => 'Plan', 'text' => 'Students learn to plan their project, such as a game, animation, story or STEM activity.'],
    ['title' => 'Build', 'text' => 'Students create their project using ScratchJr, Scratch or STEM kits.'],
    ['title' => 'Code', 'text' => 'Students apply coding blocks, sequencing, movement, events or interactions.'],
    ['title' => 'Test & Debug', 'text' => 'Students test their project, identify what does not work and improve it.'],
    ['title' => 'Present', 'text' => 'Students are encouraged to share what they created and explain their ideas.'],
];

$projectOutputs = [
    'Interactive Scratch game',
    'Digital story with characters and dialogue',
    'Animated scene',
    'Simple quiz game',
    'Character movement project',
    'STEM-based creative project',
    'Problem-solving challenge',
    'Mini digital showcase project',
];

$benefits = [
    ['title' => 'Builds Logical Thinking', 'text' => 'Children learn how actions, instructions and sequences work together.'],
    ['title' => 'Encourages Creativity', 'text' => 'Children create their own characters, games, animations and stories.'],
    ['title' => 'Improves Problem-Solving', 'text' => 'Children learn to test, debug and improve their projects.'],
    ['title' => 'Develops Digital Confidence', 'text' => 'Children become more confident using technology to create something meaningful.'],
    ['title' => 'Strengthens Focus and Patience', 'text' => 'Children practise completing projects step by step.'],
    ['title' => 'Introduces Future Skills Early', 'text' => 'Children begin learning skills that can support future learning in coding, robotics, engineering and digital creation.'],
];

$skills = [
    ['title' => 'Coding Logic', 'text' => 'Understanding sequencing, events, instructions and simple conditions.'],
    ['title' => 'Computational Thinking', 'text' => 'Breaking ideas into steps and solving problems logically.'],
    ['title' => 'Creativity', 'text' => 'Creating digital stories, games, animations and characters.'],
    ['title' => 'Problem-Solving', 'text' => 'Testing, debugging and improving projects.'],
    ['title' => 'STEM Thinking', 'text' => 'Applying simple science, technology, engineering and math ideas in projects.'],
    ['title' => 'Digital Confidence', 'text' => 'Using technology to create, not just consume.'],
    ['title' => 'Focus and Persistence', 'text' => 'Completing structured projects from start to finish.'],
    ['title' => 'Communication', 'text' => 'Explaining their project, idea or game in simple words.'],
    ['title' => 'Project Ownership', 'text' => 'Feeling proud of something they created themselves.'],
];

$classDetails = [
    'Age group: 6-9 years old',
    'Level: Beginner to Intermediate',
    'Class duration: 1 hour per slot',
    'Frequency: 4 classes per month',
    'Available on weekdays and weekends',
    'Morning and afternoon/evening slots available',
    'Available at all active NextGen Makers branches',
    'Trial class available at RM99',
];

$faqs = [
    ['question' => 'Is Junior Maker suitable for beginners?', 'answer' => 'Yes. Junior Maker is suitable for beginner to intermediate students, including children with no prior coding experience.'],
    ['question' => 'What age is Junior Maker for?', 'answer' => 'Junior Maker is suitable for children aged 6 to 9 years old.'],
    ['question' => 'What will my child learn in Junior Maker?', 'answer' => 'Children will learn STEM fundamentals, ScratchJr, Scratch coding, game development basics, animation, digital storytelling, computational thinking and creative problem-solving.'],
    ['question' => 'What tools are used in Junior Maker?', 'answer' => 'Students use DIY STEM kits, ScratchJr and Scratch Programming.'],
    ['question' => 'Will my child create real projects?', 'answer' => 'Yes. Students will create interactive games, digital stories, animations and creative digital projects.'],
    ['question' => 'Does my child need to be good at computers first?', 'answer' => 'No. Junior Maker uses visual coding and guided activities, making it suitable for children who are new to coding.'],
    ['question' => 'How long is each class?', 'answer' => 'Each class is 1 hour. Classes are conducted 4 times per month.'],
    ['question' => 'Is there a trial class?', 'answer' => 'Yes. Parents can book a Junior Maker trial class for RM99.'],
    ['question' => 'How do I book?', 'answer' => 'You can book a trial class by contacting NextGen Makers on WhatsApp at 011-5662 0871.'],
];
?>

<main>
    <section class="hero program-detail-hero junior-maker-hero">
        <div class="hero-content">
            <span class="eyebrow">Junior Maker</span>
            <h1>Junior Maker: Coding, STEM & Digital Creativity for Ages 6-9</h1>
            <p class="hero-lead">A fun and structured program where children create games, animations, digital stories and hands-on STEM projects.</p>
            <p>Junior Maker is designed for children aged 6 to 9 who are ready to explore coding, STEM and digital creativity.</p>
            <p>Through ScratchJr, Scratch Programming and DIY STEM activities, students learn how to think logically, solve problems creatively and build their own interactive digital projects.</p>
            <p>This program is suitable for beginner to intermediate students, including children with no prior coding experience.</p>
            <div class="button-row">
                <a class="btn btn-primary" href="<?= htmlspecialchars($juniorMakerWhatsapp) ?>" target="_blank" rel="noopener">Book Trial Class</a>
                <a class="btn btn-secondary" href="<?= htmlspecialchars(url_path('/programs.php')) ?>">Explore Program Pathway</a>
            </div>
            <div class="program-detail-badges">
                <span>Age 6-9 Years</span>
                <span>Beginner to Intermediate</span>
                <span>ScratchJr & Scratch</span>
                <span>DIY STEM Projects</span>
                <span>Game & Animation Creation</span>
                <span>Trial Class RM99</span>
            </div>
        </div>
        <div class="hero-visual" aria-label="Junior Maker coding and STEM activity">
            <div class="hero-photo-card hero-photo-main" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/junior-maker/6332120956976958538.jpg')) ?>');">
                <span>Scratch coding for kids</span>
            </div>
            <div class="hero-photo-card hero-photo-secondary" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/junior-maker/6292029357119180673.jpg')) ?>');">
                <span>Game & animation projects</span>
            </div>
        </div>
    </section>

    <section class="section program-intro-section">
        <div class="program-detail-split">
            <div>
                <span class="eyebrow">Program Overview</span>
                <h2>What Is Junior Maker?</h2>
                <p>Junior Maker is a coding, STEM and digital creativity program for primary school children aged 6 to 9.</p>
                <p>The program helps children move from simple hands-on exploration into more structured creative technology learning.</p>
                <p>Students are introduced to coding logic, animation, game development, digital storytelling and STEM concepts using platforms and activities that are suitable for their age.</p>
                <p>Through ScratchJr, Scratch Programming and DIY STEM kits, students learn how to create interactive projects while developing computational thinking, creativity and problem-solving skills.</p>
                <p>At this stage, children are not just using technology for entertainment. They begin learning how to create with technology.</p>
            </div>
            <aside class="program-highlight-card">
                <strong>From playing games to creating games.</strong>
                <p>Junior Maker helps children understand how digital stories, animations and simple games are built.</p>
                <div class="student-photo-placeholder photo-fill" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/junior-maker/6330251267514943076.jpg')) ?>');">
                    <span>Digital project showcase</span>
                </div>
            </aside>
        </div>
    </section>

    <section class="section suitable-section">
        <div class="program-detail-split reverse">
            <div class="student-photo-placeholder portrait photo-fill program-suitable-photo" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/junior-maker/6289387149069501889.jpg')) ?>');">
                <span>Primary school coding class</span>
            </div>
            <div>
                <span class="eyebrow">Who Is This For?</span>
                <h2>Is Junior Maker Suitable for My Child?</h2>
                <p>Junior Maker is suitable for children who enjoy technology, games, animation, storytelling, creative projects or hands-on STEM activities.</p>
                <p>It is also suitable for beginners who have never learned coding before, as the program starts with visual and age-appropriate learning activities before moving into more structured projects.</p>
                <div class="program-chip-grid">
                    <?php foreach ($suitableItems as $item): ?>
                        <span><?= htmlspecialchars($item) ?></span>
                    <?php endforeach; ?>
                </div>
                <div class="parent-note">
                    <strong>Parent-Friendly Note</strong>
                    <p>Your child does not need to be an expert in computers or coding. Junior Maker uses visual coding and guided activities to help children learn step by step.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section learning-areas-section">
        <div class="section-heading">
            <span class="eyebrow">What Students Learn</span>
            <h2>What Will Children Learn in Junior Maker?</h2>
            <p>Junior Maker introduces children to coding, STEM and digital creativity in a fun, structured and practical way.</p>
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
            <h2>Tools & Kits Used in Junior Maker</h2>
            <p>Junior Maker uses a mix of digital and hands-on tools to help children understand both coding and STEM concepts.</p>
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
            <h2>How Children Learn in Junior Maker</h2>
            <p>Junior Maker uses project-based learning to help children understand coding and STEM through real creation.</p>
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
            <strong>Junior Maker helps children learn that technology is something they can design, control and create.</strong>
            <p>Students use visual coding to turn ideas into digital stories, Scratch games, animations and hands-on STEM projects.</p>
        </div>
    </section>

    <section class="section project-output-section">
        <div class="program-detail-split">
            <div>
                <span class="eyebrow">Final Project / Output</span>
                <h2>What Will My Child Be Able to Create?</h2>
                <p>By joining Junior Maker, students will create interactive games, digital stories, animations and STEM-based projects that demonstrate their understanding of coding, logic and creativity.</p>
                <p>Children will be guided to complete projects that they can test, improve and proudly present.</p>
                <div class="program-chip-grid">
                    <?php foreach ($projectOutputs as $item): ?>
                        <span><?= htmlspecialchars($item) ?></span>
                    <?php endforeach; ?>
                </div>
            </div>
            <aside class="parent-value-card">
                <strong>Parent Value</strong>
                <p>These projects help parents see clear learning outcomes. Children are not only watching videos or playing games. They are learning how games, animations and digital interactions are created.</p>
                <div class="student-photo-placeholder photo-fill" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/junior-maker/6292029357119180673.jpg')) ?>');">
                    <span>Creative digital projects</span>
                </div>
            </aside>
        </div>
    </section>

    <section class="section benefits-section">
        <div class="section-heading">
            <span class="eyebrow">Why Start Now?</span>
            <h2>Why Start Coding & STEM During Primary School?</h2>
            <p>Children aged 6 to 9 are at a strong stage to develop logical thinking, creativity and problem-solving skills.</p>
            <p>At this age, they are beginning to understand instructions, patterns, cause and effect, stories and simple systems. Coding and STEM activities help them practise these skills in a fun and practical way.</p>
            <p>Junior Maker introduces technology learning through visual coding and hands-on projects, making it easier for children to understand how digital ideas work.</p>
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
            <h2>Skills Your Child Will Build</h2>
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
                <h2>The Next Step After Early Robotics</h2>
                <p>Junior Maker is the second stage in the NextGen Makers learning pathway.</p>
                <p>After children are introduced to basic robotics and coding through Little Maker, they can progress into Junior Maker to explore coding, STEM and digital creativity more deeply.</p>
                <p>Through ScratchJr, Scratch and DIY STEM activities, children begin to understand how digital projects are created. As they grow older, they can continue into Young Coder, where they explore Arduino, electronics and robotics projects.</p>
                <a class="btn btn-primary" href="<?= htmlspecialchars(url_path('/programs.php')) ?>">View Full Learning Pathway</a>
            </div>
            <div class="pathway-preview-stack">
                <article><span>Age 4-5</span><strong>Little Maker</strong><p>Play-based robotics, coding robot, motorized blocks and LEGO WeDo.</p></article>
                <article><span>Age 6-9</span><strong>Junior Maker</strong><p>ScratchJr, Scratch, DIY STEM, games, animation and digital creativity.</p></article>
                <article><span>Age 10+</span><strong>Young Coder</strong><p>Arduino, electronics, robotics and engineering projects.</p></article>
                <article><span>Age 13+</span><strong>Young Innovator</strong><p>C++ programming, Arduino, automation and prototype development.</p></article>
            </div>
        </div>
    </section>

    <section class="section class-structure-section">
        <div class="section-heading">
            <span class="eyebrow">Class Structure</span>
            <h2>Class Structure</h2>
            <p>Junior Maker classes are designed to be structured, creative and suitable for primary school children.</p>
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
                <h2>Book a Junior Maker Trial Class</h2>
                <p>Want your child to try coding, STEM and creative digital projects? Book a trial class and let your child experience age-appropriate coding or STEM activities before enrolling.</p>
                <p>During the trial class, your child will be introduced to a suitable hands-on activity based on their age and readiness. Parents may receive basic feedback on the child's interest, participation and suitable program level.</p>
                <div class="trial-detail-row">
                    <span>Trial Class Fee: <strong>RM99</strong></span>
                    <span>Duration: <strong>1 hour</strong></span>
                    <span>Suitable for: <strong>Age 6-9</strong></span>
                    <span>Booking: <strong>WhatsApp</strong></span>
                    <span>Available: <strong>Weekdays & weekends</strong></span>
                </div>
            </div>
            <a class="btn btn-dark" href="<?= htmlspecialchars($juniorMakerWhatsapp) ?>" target="_blank" rel="noopener">Book Trial Class on WhatsApp</a>
        </div>
    </section>

    <section class="section branch-availability-section">
        <div class="locations-layout">
            <div class="section-heading">
                <span class="eyebrow">Branch Availability</span>
                <h2>Available at All Active NextGen Makers Branches</h2>
                <p>Junior Maker is available at all active NextGen Makers branches, subject to schedule and slot availability.</p>
                <p>Parents searching for a coding class Shah Alam, coding class Bangi or coding class Cyberjaya can check the latest Junior Maker schedule with our team.</p>
                <a class="btn btn-primary" href="<?= htmlspecialchars(whatsapp_url('Hi NextGen Makers, I would like to check the Junior Maker schedule and available branches.')) ?>" target="_blank" rel="noopener">Check Junior Maker Schedule</a>
            </div>
            <div class="student-photo-placeholder locations-photo photo-fill" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/junior-maker/6332120956976958538.jpg')) ?>');">
                <span>Junior Maker branches</span>
            </div>
        </div>
        <div class="branch-grid branch-showcase">
            <?php foreach ($branches as $index => $branch): ?>
                <article>
                    <span><?= str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT) ?></span>
                    <strong><?= htmlspecialchars($branch) ?></strong>
                    <a href="<?= htmlspecialchars(whatsapp_url('Hi NextGen Makers, I would like to check the Junior Maker schedule at ' . $branch . '.')) ?>" target="_blank" rel="noopener">Check Schedule</a>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="section about-faq-section">
        <div class="section-heading">
            <span class="eyebrow">Junior Maker FAQ</span>
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
                <span class="eyebrow">Start Creating</span>
                <h2>Let Your Child Create Their First Game, Story or Animation</h2>
                <p>Junior Maker helps children turn their creativity into real digital projects through coding, STEM and hands-on learning. Start your child's journey into coding and creative technology with a trial class today.</p>
            </div>
            <a class="btn btn-dark" href="<?= htmlspecialchars($juniorMakerWhatsapp) ?>" target="_blank" rel="noopener">Book Junior Maker Trial Class</a>
        </div>
    </section>
</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>
