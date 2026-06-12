<?php
$pageTitle = 'Young Innovator C++ Arduino Program for Teens 13+ | NextGen Makers';
$pageDescription = 'Young Innovator by NextGen Makers is an advanced coding and robotics program for teenagers aged 13 and above. Students learn C++ programming, Arduino development, electronics, automation and prototype creation through hands-on projects.';
include __DIR__ . '/../includes/header.php';

$youngInnovatorWhatsapp = whatsapp_url("Hi NextGen Makers, I would like to book a Young Innovator trial class for my child.\n\nChild's age:\nPreferred branch:\nPreferred day/time:\n\nPlease share the available trial class slots. Thank you.");

$suitableItems = [
    'Students aged 13 years old and above',
    'Learners ready for text-based programming',
    'Teenagers interested in robotics, automation and invention',
    'Students who want to learn C++ programming with Arduino',
    'Learners who enjoy building prototypes and solving real problems',
    'Students with interest in engineering, electronics or innovation',
    'Parents who want their teen to develop future-ready technical skills',
];

$learningAreas = [
    ['title' => 'C++ Programming', 'text' => 'Students learn how text-based programming works and how C++ can be used to control Arduino-powered projects.'],
    ['title' => 'Arduino Development', 'text' => 'Students learn how to use Arduino UNO as a microcontroller to connect code with electronic components.'],
    ['title' => 'Advanced Electronics', 'text' => 'Students explore electronic components, circuits, inputs, outputs and system behaviour at a deeper level.'],
    ['title' => 'Robotics and Automation', 'text' => 'Students learn how sensors, motors, logic and programming can be combined to create automated systems.'],
    ['title' => 'Engineering Concepts', 'text' => 'Students practise planning, designing, testing and improving technology projects using engineering thinking.'],
    ['title' => 'Prototype Development', 'text' => 'Students learn how to turn an idea into a working prototype that can perform a function or solve a simple real-world problem.'],
    ['title' => 'Project-Based Innovation', 'text' => 'Students are encouraged to build projects with purpose, test their ideas and improve their solution.'],
];

$tools = [
    ['title' => 'Arduino UNO', 'text' => 'Students use Arduino UNO as the main microcontroller for building and programming prototype projects.'],
    ['title' => 'C++ Programming', 'text' => 'Students learn text-based programming to control hardware behaviour and project functions.'],
    ['title' => 'Electronics and Robotics Components', 'text' => 'Students use components such as sensors, motors, lights and switches to build interactive and automated systems.'],
];

$components = [
    'Arduino UNO',
    'LED',
    'Buzzer',
    'Servo motor',
    'DC motor',
    'Ultrasonic sensor',
    'Light sensor',
    'Temperature sensor',
    'Buttons and switches',
    'Breadboard',
    'Jumper wires',
    'Automation components',
    'Robotics structure components',
];

$learningFlow = [
    ['title' => 'Understand the Challenge', 'text' => 'Students are introduced to a project challenge or real-world problem that can be solved using coding, electronics or automation.'],
    ['title' => 'Plan the System', 'text' => 'Students identify what components, logic and programming steps are needed to build the solution.'],
    ['title' => 'Build the Prototype', 'text' => 'Students assemble the hardware using Arduino UNO, electronics components, sensors or motors.'],
    ['title' => 'Program with C++', 'text' => 'Students write or modify C++ code to control the behaviour of the prototype.'],
    ['title' => 'Test the Function', 'text' => 'Students test whether the prototype works as expected.'],
    ['title' => 'Debug and Improve', 'text' => 'Students troubleshoot wiring, code logic, sensor response or project performance.'],
    ['title' => 'Present the Solution', 'text' => 'Students explain how their prototype works, what problem it solves and how it can be improved.'],
];

$projectOutputs = [
    'Sensor-based automation prototype',
    'Arduino-powered robotic project',
    'Smart alert system',
    'Automated light or movement system',
    'Motor-controlled prototype',
    'Electronic monitoring project',
    'Functional engineering model',
    'Interactive robotics project',
    'Problem-solving innovation project',
    'Early-stage invention prototype',
];

$benefits = [
    ['title' => 'Builds Stronger Programming Foundation', 'text' => 'Students move beyond block-based coding and learn how text-based programming works.'],
    ['title' => 'Develops Engineering Thinking', 'text' => 'Students learn how to design systems, connect components and solve technical problems.'],
    ['title' => 'Encourages Real-World Problem-Solving', 'text' => 'Students are encouraged to create projects that perform useful functions.'],
    ['title' => 'Improves Debugging Skills', 'text' => 'Students learn to identify and fix code, wiring and logic errors.'],
    ['title' => 'Builds Innovation Mindset', 'text' => 'Students learn to turn ideas into working prototypes.'],
    ['title' => 'Prepares Students for Advanced Technology Learning', 'text' => 'Young Innovator prepares students for IoT, automation, smart systems, software development and future innovation projects.'],
];

$skills = [
    ['title' => 'C++ Programming', 'text' => 'Understanding text-based programming structure, logic and syntax.'],
    ['title' => 'Arduino Development', 'text' => 'Using Arduino UNO to connect code with real electronic components.'],
    ['title' => 'Electronics Understanding', 'text' => 'Working with circuits, inputs, outputs, sensors and component behaviour.'],
    ['title' => 'Robotics and Automation', 'text' => 'Combining motors, sensors and code to create automated responses.'],
    ['title' => 'Prototype Thinking', 'text' => 'Turning an idea into a functional working model.'],
    ['title' => 'Debugging', 'text' => 'Finding and fixing issues in code, wiring or project behaviour.'],
    ['title' => 'Engineering Design', 'text' => 'Planning, building, testing and improving a technical project.'],
    ['title' => 'Problem-Solving', 'text' => 'Using logic and creativity to solve project challenges.'],
    ['title' => 'Technical Communication', 'text' => 'Explaining how a prototype works and what each part does.'],
];

$classDetails = [
    'Age group: 13 years old and above',
    'Level: Intermediate to Advanced',
    'Class duration: 1 hour per slot',
    'Frequency: 4 classes per month',
    'Available on weekdays and weekends',
    'Morning and afternoon/evening slots available',
    'Available at all active NextGen Makers branches',
    'Trial class available at RM99',
];

$faqs = [
    ['question' => 'What age is Young Innovator suitable for?', 'answer' => 'Young Innovator is suitable for students aged 13 years old and above.'],
    ['question' => 'What makes Young Innovator different from Young Coder?', 'answer' => 'Young Coder introduces students to Arduino, electronics and robotics projects. Young Innovator moves students further into text-based programming, C++ coding, automation and functional prototype development.'],
    ['question' => 'Does my child need to know C++ before joining?', 'answer' => 'No. Students do not need to know C++ before joining, but they should be ready for more structured coding and technical learning.'],
    ['question' => 'What will my child learn in Young Innovator?', 'answer' => 'Students will learn C++ programming, Arduino development, electronics, robotics, automation, engineering concepts, prototype development and project-based innovation.'],
    ['question' => 'Will my child build real prototypes?', 'answer' => 'Yes. Students will design, build and program Arduino-powered projects using C++ to create functional robotic or electronic prototypes.'],
    ['question' => 'What tools are used in Young Innovator?', 'answer' => 'Students use Arduino UNO, C++ programming and electronics or robotics components.'],
    ['question' => 'How long is each class?', 'answer' => 'Each class is 1 hour. Classes are conducted 4 times per month.'],
    ['question' => 'Is there a trial class?', 'answer' => 'Yes. Parents can book a Young Innovator trial class for RM99.'],
    ['question' => 'How do I book?', 'answer' => 'You can book a trial class by contacting NextGen Makers on WhatsApp at 011-5662 0871.'],
];
?>

<main>
    <section class="hero program-detail-hero young-innovator-hero">
        <div class="hero-content">
            <span class="eyebrow">Young Innovator</span>
            <h1>Young Innovator: C++, Arduino & Project Innovation for Ages 13+</h1>
            <p class="hero-lead">An advanced coding and robotics program for students ready to build functional prototypes using Arduino and C++.</p>
            <p>Young Innovator is designed for students aged 13 and above who are ready to move beyond block-based coding and explore text-based programming, advanced electronics, robotics and automation.</p>
            <p>Using Arduino UNO and C++ programming, students learn how to design, build and program functional electronic or robotic prototypes.</p>
            <p>The program helps teenagers develop deeper technical understanding, engineering thinking and real-world problem-solving skills through hands-on project-based learning.</p>
            <div class="button-row">
                <a class="btn btn-primary" href="<?= htmlspecialchars($youngInnovatorWhatsapp) ?>" target="_blank" rel="noopener">Book Trial Class</a>
                <a class="btn btn-secondary" href="<?= htmlspecialchars(url_path('/programs.php')) ?>">Explore Program Pathway</a>
            </div>
            <div class="program-detail-badges">
                <span>Age 13+</span>
                <span>C++ Programming</span>
                <span>Arduino UNO</span>
                <span>Robotics & Automation</span>
                <span>Functional Prototypes</span>
                <span>Trial Class RM99</span>
            </div>
        </div>
        <div class="hero-visual" aria-label="Young Innovator C++ Arduino and prototype activity">
            <div class="hero-photo-card hero-photo-main" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/YOUNG INNOVATOR/6224231966908204835.jpg')) ?>');">
                <span>C++ Arduino prototype</span>
            </div>
            <div class="hero-photo-card hero-photo-secondary" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/YOUNG INNOVATOR/6332477108546291204.jpg')) ?>');">
                <span>Teen robotics innovation</span>
            </div>
        </div>
    </section>

    <section class="section program-intro-section">
        <div class="program-detail-split">
            <div>
                <span class="eyebrow">Program Overview</span>
                <h2>What Is Young Innovator?</h2>
                <p>Young Innovator is an advanced robotics and coding program for teenagers aged 13 years old and above.</p>
                <p>This program is designed for students who are ready to move from visual or block-based coding into text-based programming.</p>
                <p>Students will learn C++ programming, Arduino development, electronics, robotics, automation and engineering concepts through structured hands-on projects.</p>
                <p>Using Arduino UNO, students explore how hardware and software work together to create functional prototypes. They learn how to write code, connect components, test project behaviour, troubleshoot errors and improve their design.</p>
                <p>Young Innovator helps students think like young inventors by encouraging them to build solutions, not just complete activities.</p>
            </div>
            <aside class="program-highlight-card">
                <strong>From learning coding to building real prototypes.</strong>
                <p>Young Innovator helps teenagers apply programming, electronics and engineering concepts to create working technology projects.</p>
                <div class="student-photo-placeholder photo-fill" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/YOUNG INNOVATOR/6224231966908204835.jpg')) ?>');">
                    <span>Functional prototype showcase</span>
                </div>
            </aside>
        </div>
    </section>

    <section class="section suitable-section">
        <div class="program-detail-split reverse">
            <div class="student-photo-placeholder portrait photo-fill program-suitable-photo" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/YOUNG INNOVATOR/6332477108546291204.jpg')) ?>');">
                <span>Prototype development for students</span>
            </div>
            <div>
                <span class="eyebrow">Who Is This For?</span>
                <h2>Is Young Innovator Suitable for My Teen?</h2>
                <p>Young Innovator is suitable for students who are ready for more advanced coding and technology challenges.</p>
                <p>This program is ideal for learners who enjoy robotics, electronics, engineering, invention, automation or prototype building.</p>
                <p>It is also suitable for students who already have basic exposure to coding, Arduino or STEM and want to move into a more technical project-based pathway.</p>
                <div class="program-chip-grid">
                    <?php foreach ($suitableItems as $item): ?>
                        <span><?= htmlspecialchars($item) ?></span>
                    <?php endforeach; ?>
                </div>
                <div class="parent-note">
                    <strong>Parent-Friendly Note</strong>
                    <p>Your child does not need to be an expert before joining, but this program is best for students who are ready for more structured coding, technical thinking and project-based challenges.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section learning-areas-section">
        <div class="section-heading">
            <span class="eyebrow">What Students Learn</span>
            <h2>What Will Students Learn in Young Innovator?</h2>
            <p>Young Innovator helps students move into advanced coding, electronics, robotics and prototype development through practical projects.</p>
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
            <h2>Tools & Kits Used in Young Innovator</h2>
            <p>Young Innovator uses Arduino UNO, C++ programming and electronic components to help students create functional prototypes and robotics projects.</p>
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
            <h2>How Students Learn in Young Innovator</h2>
            <p>Young Innovator uses hands-on project-based learning to help students understand advanced coding and engineering through real prototype development.</p>
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
            <strong>Young Innovator trains students to think beyond how to code.</strong>
            <p>Students start asking what they can create with code, then test, debug and improve functional prototypes.</p>
        </div>
    </section>

    <section class="section project-output-section">
        <div class="program-detail-split">
            <div>
                <span class="eyebrow">Final Project / Output</span>
                <h2>What Will My Teen Be Able to Build?</h2>
                <p>By joining Young Innovator, students will design, build and program advanced Arduino-powered projects using C++.</p>
                <p>Students will create functional robotic or electronic prototypes that demonstrate real-world coding, electronics and engineering applications.</p>
                <div class="program-chip-grid">
                    <?php foreach ($projectOutputs as $item): ?>
                        <span><?= htmlspecialchars($item) ?></span>
                    <?php endforeach; ?>
                </div>
            </div>
            <aside class="parent-value-card">
                <strong>Parent Value</strong>
                <p>These projects help parents see real technical development. Students are not only learning coding theory. They are applying code, electronics and engineering thinking to build working prototypes.</p>
                <div class="student-photo-placeholder photo-fill" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/YOUNG INNOVATOR/6312286935442983858.jpg')) ?>');">
                    <span>Advanced prototype output</span>
                </div>
            </aside>
        </div>
    </section>

    <section class="section benefits-section">
        <div class="section-heading">
            <span class="eyebrow">Why C++ & Prototyping?</span>
            <h2>Why Start Text-Based Programming & Prototype Development at Age 13+?</h2>
            <p>Teenagers aged 13 and above are ready for deeper technical thinking, structured problem-solving and more advanced project challenges.</p>
            <p>At this stage, students can begin moving from visual coding into text-based programming such as C++. This gives them a stronger foundation for robotics, engineering, software development, automation and innovation.</p>
            <p>Prototype development also helps teenagers understand how real technology products are created, from idea, design and coding to testing, debugging and improvement.</p>
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
                <h2>The Stage Where Students Become Young Inventors</h2>
                <p>Young Innovator is a key stage in the NextGen Makers pathway because it moves students into more advanced technical creation.</p>
                <p>After Young Coder, students can progress into Young Innovator to explore C++ programming, Arduino development, automation and functional prototype creation.</p>
                <p>This stage prepares students for Senior Innovator, where they move into IoT, smart systems, cloud connectivity, sensors and advanced automation.</p>
                <a class="btn btn-primary" href="<?= htmlspecialchars(url_path('/programs.php')) ?>">View Full Learning Pathway</a>
            </div>
            <div class="pathway-preview-stack">
                <article><span>Age 10+</span><strong>Young Coder</strong><p>Arduino programming, electronics, robotics and engineering projects.</p></article>
                <article><span>Age 13+</span><strong>Young Innovator</strong><p>C++ programming, Arduino, automation and prototype development.</p></article>
                <article><span>Age 15+</span><strong>Senior Innovator</strong><p>IoT, smart systems, sensors, cloud connectivity and automation.</p></article>
                <article><span>Age 16+</span><strong>Senior Coder</strong><p>Web design, app development, game development and digital product creation.</p></article>
            </div>
        </div>
    </section>

    <section class="section class-structure-section">
        <div class="section-heading">
            <span class="eyebrow">Class Structure</span>
            <h2>Class Structure</h2>
            <p>Young Innovator classes are designed for teenagers who are ready for more structured technical learning and hands-on prototype development.</p>
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
                <h2>Book a Young Innovator Trial Class</h2>
                <p>Want your teen to explore C++ programming, Arduino, robotics and prototype development? Book a trial class and let your child experience an age-appropriate hands-on coding or electronics activity before enrolling.</p>
                <p>During the trial class, your child will be introduced to a suitable robotics or coding activity based on age and readiness. Parents may receive basic feedback on the child's interest, participation and suitable program level.</p>
                <div class="trial-detail-row">
                    <span>Trial Class Fee: <strong>RM99</strong></span>
                    <span>Duration: <strong>1 hour</strong></span>
                    <span>Suitable for: <strong>Age 13+</strong></span>
                    <span>Booking: <strong>WhatsApp</strong></span>
                    <span>Available: <strong>Weekdays & weekends</strong></span>
                </div>
            </div>
            <a class="btn btn-dark" href="<?= htmlspecialchars($youngInnovatorWhatsapp) ?>" target="_blank" rel="noopener">Book Trial Class on WhatsApp</a>
        </div>
    </section>

    <section class="section branch-availability-section">
        <div class="locations-layout">
            <div class="section-heading">
                <span class="eyebrow">Branch Availability</span>
                <h2>Available at All Active NextGen Makers Branches</h2>
                <p>Young Innovator is available at all active NextGen Makers branches, subject to schedule and slot availability.</p>
                <p>Parents searching for C++ programming for teens, Arduino class for teenagers, robotics class for teenagers, robotics class Shah Alam, coding class Bangi, robotics class Cyberjaya, robotics class Puncak Alam or robotics class Selayang can check the latest Young Innovator schedule with our team.</p>
                <a class="btn btn-primary" href="<?= htmlspecialchars(whatsapp_url('Hi NextGen Makers, I would like to check the Young Innovator schedule and available branches.')) ?>" target="_blank" rel="noopener">Check Young Innovator Schedule</a>
            </div>
            <div class="student-photo-placeholder locations-photo photo-fill" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/YOUNG INNOVATOR/6269433018775094369.jpg')) ?>');">
                <span>Young Innovator branches</span>
            </div>
        </div>
        <div class="branch-grid branch-showcase">
            <?php foreach ($branches as $index => $branch): ?>
                <article>
                    <span><?= str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT) ?></span>
                    <strong><?= htmlspecialchars($branch) ?></strong>
                    <a href="<?= htmlspecialchars(whatsapp_url('Hi NextGen Makers, I would like to check the Young Innovator schedule at ' . $branch . '.')) ?>" target="_blank" rel="noopener">Check Schedule</a>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="section about-faq-section">
        <div class="section-heading">
            <span class="eyebrow">Young Innovator FAQ</span>
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
                <span class="eyebrow">Create With Code</span>
                <h2>Help Your Teen Build Their First Functional Prototype</h2>
                <p>Young Innovator helps teenagers move from basic coding into advanced robotics, C++ programming, automation and prototype development. Through hands-on learning, students can build real technical skills and gain confidence in creating technology solutions.</p>
            </div>
            <a class="btn btn-dark" href="<?= htmlspecialchars($youngInnovatorWhatsapp) ?>" target="_blank" rel="noopener">Book Young Innovator Trial Class</a>
        </div>
    </section>
</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>
