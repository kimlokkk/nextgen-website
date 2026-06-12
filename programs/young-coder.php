<?php
$pageTitle = 'Young Coder Arduino & Robotics Program for Kids 10+ | NextGen Makers';
$pageDescription = 'Young Coder by NextGen Makers is an Arduino, robotics and electronics program for students aged 10 and above. Students learn Arduino programming, sensors, electronics, engineering design and hands-on project development.';
include __DIR__ . '/../includes/header.php';

$youngCoderWhatsapp = whatsapp_url("Hi NextGen Makers, I would like to book a Young Coder trial class for my child.\n\nChild's age:\nPreferred branch:\nPreferred day/time:\n\nPlease share the available trial class slots. Thank you.");

$suitableItems = [
    'Students aged 10 years old and above',
    'Learners interested in coding, robotics and electronics',
    'Students who enjoy hands-on building and technical challenges',
    'Children who like experimenting with gadgets or machines',
    'Students ready for Arduino-based project learning',
    'Learners who want to understand how code controls real components',
    'Parents who want their child to develop practical future-ready technology skills',
];

$learningAreas = [
    ['title' => 'Arduino Programming', 'text' => 'Students learn how to write or apply code that controls electronic components through Arduino UNO.'],
    ['title' => 'Electronics Fundamentals', 'text' => 'Students are introduced to basic electronics concepts such as input, output, circuits, power, connection and component behaviour.'],
    ['title' => 'Robotics Concepts', 'text' => 'Students explore how robots and automated systems use sensors, motors and programmed instructions.'],
    ['title' => 'Engineering Design', 'text' => 'Students learn how to plan, build, test and improve their projects using engineering thinking.'],
    ['title' => 'Sensor and Component Usage', 'text' => 'Students explore components such as LEDs, buzzers, motors, sensors and other project-based electronics parts.'],
    ['title' => 'Problem-Solving Through Real Projects', 'text' => 'Students learn to troubleshoot errors, fix connection issues, debug code and improve project performance.'],
    ['title' => 'Hands-On Project Development', 'text' => 'Students gain experience building complete Arduino-powered robotics or electronics projects from idea to working output.'],
];

$tools = [
    ['title' => 'Arduino UNO', 'text' => 'Students use Arduino UNO as the main microcontroller to program and control electronics components.'],
    ['title' => 'Electronics Components', 'text' => 'Students explore basic electronic components used in hands-on projects.'],
    ['title' => 'Sensors and Robotics Components', 'text' => 'Students learn how sensors, motors and other robotics components can be used to create interactive and automated projects.'],
];

$components = [
    'LED',
    'Buzzer',
    'Motor',
    'Servo motor',
    'Ultrasonic sensor',
    'Light sensor',
    'Buttons and switches',
    'Jumper wires',
    'Breadboard',
    'Basic circuit components',
];

$learningFlow = [
    ['title' => 'Understand the Concept', 'text' => 'Students are introduced to a coding, electronics or robotics concept in a simple and practical way.'],
    ['title' => 'Build the Circuit', 'text' => 'Students connect components such as LEDs, sensors, motors or buzzers to the Arduino board.'],
    ['title' => 'Program the Arduino', 'text' => 'Students apply coding logic to control how the components behave.'],
    ['title' => 'Test the Project', 'text' => 'Students test whether the project works as expected.'],
    ['title' => 'Troubleshoot', 'text' => 'Students identify wiring issues, code errors or logic problems and learn how to fix them.'],
    ['title' => 'Improve the Design', 'text' => 'Students modify their project to make it more functional, creative or reliable.'],
    ['title' => 'Present the Output', 'text' => 'Students are encouraged to explain how their project works and what problem it solves.'],
];

$projectOutputs = [
    'LED control project',
    'Buzzer alert system',
    'Sensor-based project',
    'Simple robot movement project',
    'Servo motor project',
    'Light-sensitive system',
    'Distance detection project',
    'Arduino-powered electronic model',
    'Mini automation project',
    'Robotics challenge project',
];

$benefits = [
    ['title' => 'Builds Practical Coding Understanding', 'text' => 'Students learn how code can control physical devices and actions.'],
    ['title' => 'Strengthens Logical Thinking', 'text' => 'Students practise sequencing, conditions, instructions and system flow.'],
    ['title' => 'Introduces Electronics Safely', 'text' => 'Students explore basic electronics in a guided and structured way.'],
    ['title' => 'Encourages Engineering Thinking', 'text' => 'Students learn to design, test, troubleshoot and improve their projects.'],
    ['title' => 'Builds Problem-Solving Skills', 'text' => 'Students learn to identify why a project does not work and how to fix it.'],
    ['title' => 'Prepares Students for Advanced Technology Learning', 'text' => 'Young Coder creates a foundation for C++ programming, automation, IoT and innovation projects in the next levels.'],
];

$skills = [
    ['title' => 'Arduino Coding', 'text' => 'Understanding how to program a microcontroller to control components.'],
    ['title' => 'Electronics Basics', 'text' => 'Learning simple circuits, inputs, outputs and component behaviour.'],
    ['title' => 'Robotics Thinking', 'text' => 'Understanding how robots use motors, sensors and programmed instructions.'],
    ['title' => 'Engineering Design', 'text' => 'Planning, building, testing and improving a project.'],
    ['title' => 'Troubleshooting', 'text' => 'Finding and fixing errors in code, wiring or project logic.'],
    ['title' => 'Problem-Solving', 'text' => 'Using logical thinking to complete technical challenges.'],
    ['title' => 'Project Development', 'text' => 'Turning an idea into a working hands-on output.'],
    ['title' => 'Digital Confidence', 'text' => 'Building confidence to use technology as a creation tool.'],
    ['title' => 'Communication', 'text' => 'Explaining how a project works and what each component does.'],
];

$classDetails = [
    'Age group: 10 years old and above',
    'Level: Intermediate to Advanced',
    'Class duration: 1 hour per slot',
    'Frequency: 4 classes per month',
    'Available on weekdays and weekends',
    'Morning and afternoon/evening slots available',
    'Available at all active NextGen Makers branches',
    'Trial class available at RM99',
];

$faqs = [
    ['question' => 'What age is Young Coder suitable for?', 'answer' => 'Young Coder is suitable for students aged 10 years old and above.'],
    ['question' => 'Is Young Coder suitable for beginners?', 'answer' => 'Young Coder is designed for intermediate to advanced learners, but students do not need to be experts. The trial class can help identify whether the student is ready for this level.'],
    ['question' => 'What will my child learn in Young Coder?', 'answer' => 'Students will learn Arduino programming, electronics fundamentals, robotics concepts, engineering design, sensor and component usage, problem-solving and hands-on project development.'],
    ['question' => 'What tools are used in Young Coder?', 'answer' => 'Students use Arduino UNO, electronics components, sensors and robotics components.'],
    ['question' => 'Will my child build real projects?', 'answer' => 'Yes. Students will design, build and program Arduino-powered robotics or electronic projects.'],
    ['question' => 'Does my child need to bring their own Arduino kit?', 'answer' => 'Parents may contact NextGen Makers on WhatsApp to confirm class requirements based on the selected branch and schedule.'],
    ['question' => 'How long is each class?', 'answer' => 'Each class is 1 hour. Classes are conducted 4 times per month.'],
    ['question' => 'Is there a trial class?', 'answer' => 'Yes. Parents can book a Young Coder trial class for RM99.'],
    ['question' => 'How do I book?', 'answer' => 'You can book a trial class by contacting NextGen Makers on WhatsApp at 011-5662 0871.'],
];
?>

<main>
    <section class="hero program-detail-hero young-coder-hero">
        <div class="hero-content">
            <span class="eyebrow">Young Coder</span>
            <h1>Young Coder: Arduino, Robotics & Electronics for Ages 10+</h1>
            <p class="hero-lead">A hands-on program for students ready to explore coding, electronics and real hardware projects.</p>
            <p>Young Coder is designed for students aged 10 and above who are ready to move beyond basic coding and explore how programming works with real electronic components.</p>
            <p>Using Arduino UNO, students learn how code can control lights, sensors, motors, buzzers and robotics projects.</p>
            <p>Through guided hands-on learning, they build practical skills in coding, electronics, engineering design and problem-solving.</p>
            <div class="button-row">
                <a class="btn btn-primary" href="<?= htmlspecialchars($youngCoderWhatsapp) ?>" target="_blank" rel="noopener">Book Trial Class</a>
                <a class="btn btn-secondary" href="<?= htmlspecialchars(url_path('/programs.php')) ?>">Explore Program Pathway</a>
            </div>
            <div class="program-detail-badges">
                <span>Age 10+</span>
                <span>Arduino UNO</span>
                <span>Electronics & Robotics</span>
                <span>Hands-On Projects</span>
                <span>Intermediate to Advanced</span>
                <span>Trial Class RM99</span>
            </div>
        </div>
        <div class="hero-visual" aria-label="Young Coder Arduino and robotics activity">
            <div class="hero-photo-card hero-photo-main" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/YOUNG CODER/6289562924901057920.jpg')) ?>');">
                <span>Arduino class for kids</span>
            </div>
            <div class="hero-photo-card hero-photo-secondary" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/YOUNG CODER/6289668976233530628.jpg')) ?>');">
                <span>Robotics & electronics project</span>
            </div>
        </div>
    </section>

    <section class="section program-intro-section">
        <div class="program-detail-split">
            <div>
                <span class="eyebrow">Program Overview</span>
                <h2>What Is Young Coder?</h2>
                <p>Young Coder is an Arduino, robotics and electronics program for students aged 10 years old and above.</p>
                <p>This program introduces students to how coding works with real-world hardware. Instead of only creating digital projects on screen, students learn how their code can control physical components such as LEDs, motors, sensors and electronic circuits.</p>
                <p>Using Arduino UNO, students explore programming, electronics, robotics concepts, engineering design and project development through hands-on learning experiences.</p>
                <p>Young Coder helps students build a stronger understanding of technology by connecting software, hardware and real project outcomes.</p>
            </div>
            <aside class="program-highlight-card">
                <strong>From coding on screen to controlling real hardware.</strong>
                <p>Young Coder helps students understand how programming can create real actions in the physical world.</p>
                <div class="student-photo-placeholder photo-fill" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/YOUNG CODER/6289668976233530628.jpg')) ?>');">
                    <span>Arduino-powered project</span>
                </div>
            </aside>
        </div>
    </section>

    <section class="section suitable-section">
        <div class="program-detail-split reverse">
            <div class="student-photo-placeholder portrait photo-fill program-suitable-photo" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/YOUNG CODER/6289562924901057920.jpg')) ?>');">
                <span>Hardware-based coding class</span>
            </div>
            <div>
                <span class="eyebrow">Who Is This For?</span>
                <h2>Is Young Coder Suitable for My Child?</h2>
                <p>Young Coder is suitable for students who are curious about how electronics, robots, sensors and coding work together.</p>
                <p>This program is ideal for learners who enjoy building, testing and solving technical challenges. It is also suitable for students who already have basic exposure to coding or STEM and are ready to move into more practical hardware-based projects.</p>
                <div class="program-chip-grid">
                    <?php foreach ($suitableItems as $item): ?>
                        <span><?= htmlspecialchars($item) ?></span>
                    <?php endforeach; ?>
                </div>
                <div class="parent-note">
                    <strong>Parent-Friendly Note</strong>
                    <p>Your child does not need to be an expert in electronics before joining. Young Coder is structured to guide students step by step, from basic components to complete Arduino-powered projects.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section learning-areas-section">
        <div class="section-heading">
            <span class="eyebrow">What Students Learn</span>
            <h2>What Will Students Learn in Young Coder?</h2>
            <p>Young Coder helps students understand the connection between coding, electronics and robotics through guided hands-on projects.</p>
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
            <h2>Tools & Kits Used in Young Coder</h2>
            <p>Young Coder uses Arduino UNO and electronics components to help students understand how coding can interact with real hardware.</p>
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
        <div class="program-chip-grid component-chip-grid">
            <?php foreach ($components as $component): ?>
                <span><?= htmlspecialchars($component) ?></span>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="section learning-flow-section">
        <div class="section-heading">
            <span class="eyebrow">How Learning Happens</span>
            <h2>How Students Learn in Young Coder</h2>
            <p>Young Coder uses project-based learning to help students understand technology through building, testing and improving real projects.</p>
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
            <strong>Young Coder helps students build the mindset of a young engineer.</strong>
            <p>Students do not only follow instructions. They learn how systems work, how to troubleshoot and how to improve their own hardware projects.</p>
        </div>
    </section>

    <section class="section project-output-section">
        <div class="program-detail-split">
            <div>
                <span class="eyebrow">Final Project / Output</span>
                <h2>What Will My Child Be Able to Build?</h2>
                <p>By joining Young Coder, students will design, build and program their own Arduino-powered robotics or electronic projects.</p>
                <p>They will learn how to combine coding, components and engineering thinking to create projects that produce real actions, responses or movement.</p>
                <div class="program-chip-grid">
                    <?php foreach ($projectOutputs as $item): ?>
                        <span><?= htmlspecialchars($item) ?></span>
                    <?php endforeach; ?>
                </div>
            </div>
            <aside class="parent-value-card">
                <strong>Parent Value</strong>
                <p>These projects help parents see real technical learning. Students are not only learning theory. They are building working projects that show practical coding and engineering skills.</p>
                <div class="student-photo-placeholder photo-fill" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/YOUNG CODER/6213062741246200295.jpg')) ?>');">
                    <span>Working robotics project</span>
                </div>
            </aside>
        </div>
    </section>

    <section class="section benefits-section">
        <div class="section-heading">
            <span class="eyebrow">Why Arduino?</span>
            <h2>Why Start Arduino, Robotics & Electronics at Age 10+?</h2>
            <p>At around 10 years old and above, many students are ready to understand more structured logic, step-by-step systems and technical problem-solving.</p>
            <p>Arduino learning gives students a practical way to see how coding connects with real hardware. They can write or apply instructions, connect components and immediately see the result through lights, sounds, movement or sensor responses.</p>
            <p>This makes coding feel more meaningful because students can see their ideas working in the real world.</p>
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
                <h2>The Bridge Between Creative Coding and Advanced Innovation</h2>
                <p>Young Coder is the stage where students move from visual coding and digital creativity into real hardware-based technology learning.</p>
                <p>After Junior Maker, students can progress into Young Coder to explore Arduino, electronics and robotics. This stage prepares students for more advanced programs such as Young Innovator, where they move into C++ programming, automation and prototype development.</p>
                <a class="btn btn-primary" href="<?= htmlspecialchars(url_path('/programs.php')) ?>">View Full Learning Pathway</a>
            </div>
            <div class="pathway-preview-stack">
                <article><span>Age 6-9</span><strong>Junior Maker</strong><p>Scratch, STEM, animation, games and digital creativity.</p></article>
                <article><span>Age 10+</span><strong>Young Coder</strong><p>Arduino programming, electronics, robotics and engineering projects.</p></article>
                <article><span>Age 13+</span><strong>Young Innovator</strong><p>C++ programming, Arduino, automation and prototype development.</p></article>
                <article><span>Age 15+</span><strong>Senior Innovator</strong><p>IoT, smart systems, sensors, cloud connectivity and automation.</p></article>
            </div>
        </div>
    </section>

    <section class="section class-structure-section">
        <div class="section-heading">
            <span class="eyebrow">Class Structure</span>
            <h2>Class Structure</h2>
            <p>Young Coder classes are designed to be structured, hands-on and suitable for students who are ready for more technical project-based learning.</p>
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
                <h2>Book a Young Coder Trial Class</h2>
                <p>Want your child to explore Arduino, robotics and electronics? Book a trial class and let your child experience a hands-on coding or electronics activity before enrolling.</p>
                <p>During the trial class, your child will be introduced to an age-appropriate robotics or coding activity. Parents may receive basic feedback on the child's interest, participation and suitable program level.</p>
                <div class="trial-detail-row">
                    <span>Trial Class Fee: <strong>RM99</strong></span>
                    <span>Duration: <strong>1 hour</strong></span>
                    <span>Suitable for: <strong>Age 10+</strong></span>
                    <span>Booking: <strong>WhatsApp</strong></span>
                    <span>Available: <strong>Weekdays & weekends</strong></span>
                </div>
            </div>
            <a class="btn btn-dark" href="<?= htmlspecialchars($youngCoderWhatsapp) ?>" target="_blank" rel="noopener">Book Trial Class on WhatsApp</a>
        </div>
    </section>

    <section class="section branch-availability-section">
        <div class="locations-layout">
            <div class="section-heading">
                <span class="eyebrow">Branch Availability</span>
                <h2>Available at All Active NextGen Makers Branches</h2>
                <p>Young Coder is available at all active NextGen Makers branches, subject to schedule and slot availability.</p>
                <p>Parents looking for an Arduino class for kids, robotics class Malaysia, robotics class Shah Alam, coding class Bangi, robotics class Cyberjaya, robotics class Puncak Alam or robotics class Selayang can check the latest Young Coder schedule with our team.</p>
                <a class="btn btn-primary" href="<?= htmlspecialchars(whatsapp_url('Hi NextGen Makers, I would like to check the Young Coder schedule and available branches.')) ?>" target="_blank" rel="noopener">Check Young Coder Schedule</a>
            </div>
            <div class="student-photo-placeholder locations-photo photo-fill" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/YOUNG CODER/6332290036950747253.jpg')) ?>');">
                <span>Young Coder branches</span>
            </div>
        </div>
        <div class="branch-grid branch-showcase">
            <?php foreach ($branches as $index => $branch): ?>
                <article>
                    <span><?= str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT) ?></span>
                    <strong><?= htmlspecialchars($branch) ?></strong>
                    <a href="<?= htmlspecialchars(whatsapp_url('Hi NextGen Makers, I would like to check the Young Coder schedule at ' . $branch . '.')) ?>" target="_blank" rel="noopener">Check Schedule</a>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="section about-faq-section">
        <div class="section-heading">
            <span class="eyebrow">Young Coder FAQ</span>
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
                <span class="eyebrow">Build Real Hardware</span>
                <h2>Let Your Child Build Their First Arduino Project</h2>
                <p>Young Coder helps students move from basic coding into real-world robotics, electronics and engineering projects. Through Arduino-powered hands-on learning, your child can build practical technology skills and gain confidence in solving real technical challenges.</p>
            </div>
            <a class="btn btn-dark" href="<?= htmlspecialchars($youngCoderWhatsapp) ?>" target="_blank" rel="noopener">Book Young Coder Trial Class</a>
        </div>
    </section>
</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>
