<?php
$pageTitle = 'Senior Innovator IoT & Smart Systems Program for Teens 15+ | NextGen Makers';
$pageDescription = 'Senior Innovator by NextGen Makers is an advanced IoT, smart systems and automation program for teenagers aged 15 and above. Students learn sensors, cloud connectivity, automation, data monitoring and smart project development through hands-on projects.';
include __DIR__ . '/../includes/header.php';

$seniorInnovatorWhatsapp = whatsapp_url("Hi NextGen Makers, I would like to book a Senior Innovator trial class for my child.\n\nChild's age:\nPreferred branch:\nPreferred day/time:\n\nPlease share the available trial class slots. Thank you.");

$suitableItems = [
    'Students aged 15 years old and above',
    'Learners ready for advanced IoT and automation projects',
    'Teenagers interested in smart systems, sensors and connected devices',
    'Students who enjoy solving real-world technical problems',
    'Learners with interest in robotics, electronics, coding or engineering',
    'Students ready to connect hardware, software and cloud-based systems',
    'Parents who want their teen to build advanced future-ready technology skills',
];

$learningAreas = [
    ['title' => 'IoT Fundamentals', 'text' => 'Students learn how connected devices collect data, communicate and trigger actions in smart systems.'],
    ['title' => 'Smart System Development', 'text' => 'Students explore how sensors, code, hardware and connectivity work together to create functional smart projects.'],
    ['title' => 'Sensors and Data Input', 'text' => 'Students use sensors to detect light, distance, temperature, movement or other environmental conditions.'],
    ['title' => 'Cloud Connectivity', 'text' => 'Students learn how project data can be sent, monitored or controlled through connected platforms.'],
    ['title' => 'Automation Logic', 'text' => 'Students design systems that respond automatically based on sensor readings, conditions or programmed rules.'],
    ['title' => 'System Testing and Debugging', 'text' => 'Students test hardware, code and connectivity, then troubleshoot errors to improve system reliability.'],
    ['title' => 'Real-World Project Development', 'text' => 'Students apply coding, electronics and IoT concepts to build practical smart technology projects.'],
];

$tools = [
    ['title' => 'IoT Controller and Sensors', 'text' => 'Students work with sensors and controller boards to collect data and trigger smart responses.'],
    ['title' => 'Connectivity Tools', 'text' => 'Students explore how devices communicate with cloud platforms or connected interfaces.'],
    ['title' => 'Automation Components', 'text' => 'Students use lights, motors, buzzers, switches and outputs to create responsive systems.'],
];

$components = [
    'IoT controller',
    'Sensors',
    'LED',
    'Buzzer',
    'Motor',
    'Servo motor',
    'Ultrasonic sensor',
    'Light sensor',
    'Temperature sensor',
    'WiFi connectivity',
    'Cloud dashboard',
    'Automation outputs',
    'Jumper wires',
    'Breadboard',
];

$learningFlow = [
    ['title' => 'Understand the Problem', 'text' => 'Students explore a real-world problem that can be improved using smart technology or automation.'],
    ['title' => 'Plan the Smart System', 'text' => 'Students identify the sensors, outputs, logic and data flow needed for the project.'],
    ['title' => 'Build the Hardware', 'text' => 'Students connect sensors, controller boards and output components.'],
    ['title' => 'Program the Logic', 'text' => 'Students write or modify code that controls system behaviour and responses.'],
    ['title' => 'Connect the System', 'text' => 'Students explore how data or control can be connected to a platform, dashboard or interface.'],
    ['title' => 'Test and Debug', 'text' => 'Students test readings, triggers, connectivity and responses, then fix errors or weak points.'],
    ['title' => 'Present the Solution', 'text' => 'Students explain how their smart system works and how it could be improved for real use.'],
];

$projectOutputs = [
    'Smart monitoring system',
    'Sensor-based automation project',
    'IoT data collection prototype',
    'Cloud-connected sensor project',
    'Smart alert system',
    'Automated lighting system',
    'Distance or motion detection project',
    'Environmental monitoring project',
    'Smart home concept prototype',
    'Mini automation solution',
];

$benefits = [
    ['title' => 'Builds Advanced Technology Understanding', 'text' => 'Students learn how coding, electronics, data and connectivity work together in modern smart systems.'],
    ['title' => 'Develops Real-World Problem-Solving', 'text' => 'Students create projects that respond to practical problems and conditions.'],
    ['title' => 'Strengthens Automation Thinking', 'text' => 'Students design logic that allows systems to react automatically.'],
    ['title' => 'Introduces IoT and Data Concepts', 'text' => 'Students learn how devices collect, send and use data in connected systems.'],
    ['title' => 'Improves Debugging and Testing Skills', 'text' => 'Students troubleshoot hardware, code, sensor readings and connectivity issues.'],
    ['title' => 'Prepares Students for Future Innovation', 'text' => 'Senior Innovator supports future learning in engineering, software, robotics, IoT, automation and product development.'],
];

$skills = [
    ['title' => 'IoT Thinking', 'text' => 'Understanding how connected devices collect data and communicate.'],
    ['title' => 'Smart System Design', 'text' => 'Planning how sensors, code, hardware and outputs work together.'],
    ['title' => 'Sensor Integration', 'text' => 'Using sensors to detect real-world conditions and trigger responses.'],
    ['title' => 'Automation Logic', 'text' => 'Creating rules and conditions for automated behaviour.'],
    ['title' => 'Cloud and Data Awareness', 'text' => 'Understanding how project data can be monitored or connected beyond the device.'],
    ['title' => 'Troubleshooting', 'text' => 'Finding and fixing issues in wiring, code, readings or connectivity.'],
    ['title' => 'Engineering Design', 'text' => 'Building, testing and improving a functional smart project.'],
    ['title' => 'Problem-Solving', 'text' => 'Using logic and creativity to solve technical challenges.'],
    ['title' => 'Technical Communication', 'text' => 'Explaining how a smart system works and what problem it solves.'],
];

$classDetails = [
    'Age group: 15 years old and above',
    'Level: Advanced',
    'Class duration: 1 hour per slot',
    'Frequency: 4 classes per month',
    'Available on weekdays and weekends',
    'Morning and afternoon/evening slots available',
    'Available at all active NextGen Makers branches',
    'Trial class available at RM99',
];

$faqs = [
    ['question' => 'What age is Senior Innovator suitable for?', 'answer' => 'Senior Innovator is suitable for students aged 15 years old and above.'],
    ['question' => 'What makes Senior Innovator different from Young Innovator?', 'answer' => 'Young Innovator focuses on C++ programming, Arduino and functional prototypes. Senior Innovator moves students further into IoT, cloud connectivity, sensors, automation and smart system development.'],
    ['question' => 'Does my child need to know IoT before joining?', 'answer' => 'No. Students do not need prior IoT experience, but they should be ready for advanced technical learning and project-based problem-solving.'],
    ['question' => 'What will my child learn in Senior Innovator?', 'answer' => 'Students will learn IoT fundamentals, smart systems, sensors, cloud connectivity, automation logic, system testing and real-world project development.'],
    ['question' => 'Will my child build real smart systems?', 'answer' => 'Yes. Students will build hands-on IoT, sensor-based or automation projects that demonstrate practical smart technology concepts.'],
    ['question' => 'What tools are used in Senior Innovator?', 'answer' => 'Students use sensors, controller boards, connectivity tools, automation components and cloud or dashboard concepts.'],
    ['question' => 'How long is each class?', 'answer' => 'Each class is 1 hour. Classes are conducted 4 times per month.'],
    ['question' => 'Is there a trial class?', 'answer' => 'Yes. Parents can book a Senior Innovator trial class for RM99.'],
    ['question' => 'How do I book?', 'answer' => 'You can book a trial class by contacting NextGen Makers on WhatsApp at 011-5662 0871.'],
];
?>

<main>
    <section class="hero program-detail-hero senior-innovator-hero">
        <div class="hero-content">
            <span class="eyebrow">Senior Innovator</span>
            <h1>Senior Innovator: IoT, Smart Systems & Automation for Ages 15+</h1>
            <p class="hero-lead">An advanced program for students ready to build connected devices, smart systems and automation projects.</p>
            <p>Senior Innovator is designed for students aged 15 and above who are ready to explore IoT, sensors, automation, cloud connectivity and real-world smart technology projects.</p>
            <p>Students learn how connected systems collect data, respond to conditions and automate actions using hardware, coding and smart system logic.</p>
            <p>This program helps teenagers build deeper technical confidence through hands-on project development, troubleshooting and practical innovation.</p>
            <div class="button-row">
                <a class="btn btn-primary" href="<?= htmlspecialchars($seniorInnovatorWhatsapp) ?>" target="_blank" rel="noopener">Book Trial Class</a>
                <a class="btn btn-secondary" href="<?= htmlspecialchars(url_path('/programs.php')) ?>">Explore Program Pathway</a>
            </div>
            <div class="program-detail-badges">
                <span>Age 15+</span>
                <span>IoT Systems</span>
                <span>Cloud Connectivity</span>
                <span>Sensors & Automation</span>
                <span>Advanced Projects</span>
                <span>Trial Class RM99</span>
            </div>
        </div>
        <div class="hero-visual" aria-label="Senior Innovator IoT and smart systems activity">
            <div class="hero-photo-card hero-photo-main" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/YOUNG INNOVATOR/6062345814774236444.jpg')) ?>');">
                <span>IoT smart system project</span>
            </div>
            <div class="hero-photo-card hero-photo-secondary" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/YOUNG INNOVATOR/6140662404523082140.jpg')) ?>');">
                <span>Automation prototype</span>
            </div>
        </div>
    </section>

    <section class="section program-intro-section">
        <div class="program-detail-split">
            <div>
                <span class="eyebrow">Program Overview</span>
                <h2>What Is Senior Innovator?</h2>
                <p>Senior Innovator is an advanced IoT, smart systems and automation program for teenagers aged 15 years old and above.</p>
                <p>This program introduces students to connected technology systems where sensors, code, hardware and cloud connectivity work together.</p>
                <p>Students explore how smart systems collect data, monitor changes, trigger outputs and automate responses based on programmed rules or real-world conditions.</p>
                <p>Through structured hands-on projects, students build practical experience in IoT, automation, engineering design, system testing and smart project development.</p>
            </div>
            <aside class="program-highlight-card">
                <strong>From prototypes to connected smart systems.</strong>
                <p>Senior Innovator helps students understand how modern technology uses sensors, data and connectivity to solve real problems.</p>
                <div class="student-photo-placeholder photo-fill" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/YOUNG INNOVATOR/6062345814774236444.jpg')) ?>');">
                    <span>Smart technology project</span>
                </div>
            </aside>
        </div>
    </section>

    <section class="section suitable-section">
        <div class="program-detail-split reverse">
            <div class="student-photo-placeholder portrait photo-fill program-suitable-photo" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/YOUNG INNOVATOR/6057412559503474754 (1).jpg')) ?>');">
                <span>IoT and automation class</span>
            </div>
            <div>
                <span class="eyebrow">Who Is This For?</span>
                <h2>Is Senior Innovator Suitable for My Teen?</h2>
                <p>Senior Innovator is suitable for students who are ready to explore more advanced technology systems, automation logic and connected project development.</p>
                <p>This program is ideal for teenagers who enjoy robotics, electronics, coding, sensors, smart devices, engineering or real-world problem-solving.</p>
                <div class="program-chip-grid">
                    <?php foreach ($suitableItems as $item): ?>
                        <span><?= htmlspecialchars($item) ?></span>
                    <?php endforeach; ?>
                </div>
                <div class="parent-note">
                    <strong>Parent-Friendly Note</strong>
                    <p>Your child does not need to be an IoT expert before joining, but this program is best for students who are ready for advanced, structured and technical project work.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section learning-areas-section">
        <div class="section-heading">
            <span class="eyebrow">What Students Learn</span>
            <h2>What Will Students Learn in Senior Innovator?</h2>
            <p>Senior Innovator helps students connect coding, electronics, data and automation into smart project outcomes.</p>
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
            <h2>Tools & Kits Used in Senior Innovator</h2>
            <p>Senior Innovator uses sensors, controller boards, connectivity tools and automation components to help students build smart systems.</p>
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
            <h2>How Students Learn in Senior Innovator</h2>
            <p>Senior Innovator uses hands-on project-based learning to help students build, connect, test and improve smart technology systems.</p>
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
            <strong>Senior Innovator helps students think like smart system builders.</strong>
            <p>They learn how data, sensors, automation and connectivity can work together to create meaningful technology solutions.</p>
        </div>
    </section>

    <section class="section project-output-section">
        <div class="program-detail-split">
            <div>
                <span class="eyebrow">Final Project / Output</span>
                <h2>What Will My Teen Be Able to Build?</h2>
                <p>By joining Senior Innovator, students will build IoT, sensor-based or automation projects that demonstrate how smart systems work.</p>
                <p>They will learn how to combine coding, sensors, data and hardware outputs to create connected or automated solutions.</p>
                <div class="program-chip-grid">
                    <?php foreach ($projectOutputs as $item): ?>
                        <span><?= htmlspecialchars($item) ?></span>
                    <?php endforeach; ?>
                </div>
            </div>
            <aside class="parent-value-card">
                <strong>Parent Value</strong>
                <p>These projects help parents see advanced practical learning. Students build systems that collect data, respond to inputs and demonstrate real smart technology concepts.</p>
                <div class="student-photo-placeholder photo-fill" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/YOUNG INNOVATOR/6269433018775094371.jpg')) ?>');">
                    <span>Smart system showcase</span>
                </div>
            </aside>
        </div>
    </section>

    <section class="section benefits-section">
        <div class="section-heading">
            <span class="eyebrow">Why IoT & Automation?</span>
            <h2>Why Start IoT, Smart Systems & Automation at Age 15+?</h2>
            <p>Teenagers aged 15 and above are ready to understand how real technology systems connect hardware, software, data and automated responses.</p>
            <p>IoT and automation learning gives students a practical view of how modern systems work in smart homes, robotics, monitoring, engineering and connected devices.</p>
            <p>This helps students move from building single prototypes into designing systems that can sense, decide, respond and communicate.</p>
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
                <h2>The Stage Where Prototypes Become Smart Systems</h2>
                <p>Senior Innovator is the stage where students move from Arduino prototypes into IoT, smart systems, sensors, cloud connectivity and automation.</p>
                <p>After Young Innovator, students can progress into Senior Innovator to build more connected and practical technology systems. This prepares students for Senior Coder, digital product development, advanced innovation and future engineering pathways.</p>
                <a class="btn btn-primary" href="<?= htmlspecialchars(url_path('/programs.php')) ?>">View Full Learning Pathway</a>
            </div>
            <div class="pathway-preview-stack">
                <article><span>Age 13+</span><strong>Young Innovator</strong><p>C++ programming, Arduino, automation and prototype development.</p></article>
                <article><span>Age 15+</span><strong>Senior Innovator</strong><p>IoT, smart systems, sensors, cloud connectivity and automation.</p></article>
                <article><span>Age 16+</span><strong>Senior Coder</strong><p>Web design, app development, game development and digital product creation.</p></article>
                <article><span>Special Program</span><strong>NextGen Genius</strong><p>Adaptive robotics and STEM learning for children with special needs.</p></article>
            </div>
        </div>
    </section>

    <section class="section class-structure-section">
        <div class="section-heading">
            <span class="eyebrow">Class Structure</span>
            <h2>Class Structure</h2>
            <p>Senior Innovator classes are designed for students who are ready for advanced IoT, automation and smart system development.</p>
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
                <h2>Book a Senior Innovator Trial Class</h2>
                <p>Want your teen to explore IoT, smart systems, sensors and automation? Book a trial class and let your child experience an age-appropriate hands-on technology activity before enrolling.</p>
                <p>During the trial class, your child will be introduced to a suitable coding, robotics or smart system activity based on age and readiness.</p>
                <div class="trial-detail-row">
                    <span>Trial Class Fee: <strong>RM99</strong></span>
                    <span>Duration: <strong>1 hour</strong></span>
                    <span>Suitable for: <strong>Age 15+</strong></span>
                    <span>Booking: <strong>WhatsApp</strong></span>
                    <span>Available: <strong>Weekdays & weekends</strong></span>
                </div>
            </div>
            <a class="btn btn-dark" href="<?= htmlspecialchars($seniorInnovatorWhatsapp) ?>" target="_blank" rel="noopener">Book Trial Class on WhatsApp</a>
        </div>
    </section>

    <section class="section branch-availability-section">
        <div class="locations-layout">
            <div class="section-heading">
                <span class="eyebrow">Branch Availability</span>
                <h2>Available at All Active NextGen Makers Branches</h2>
                <p>Senior Innovator is available at all active NextGen Makers branches, subject to schedule and slot availability.</p>
                <p>Parents searching for IoT class for teenagers, automation class for teens, smart systems class, robotics class Malaysia, robotics class Shah Alam, coding class Bangi, robotics class Cyberjaya or robotics class Selayang can check the latest Senior Innovator schedule with our team.</p>
                <a class="btn btn-primary" href="<?= htmlspecialchars(whatsapp_url('Hi NextGen Makers, I would like to check the Senior Innovator schedule and available branches.')) ?>" target="_blank" rel="noopener">Check Senior Innovator Schedule</a>
            </div>
            <div class="student-photo-placeholder locations-photo photo-fill" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/YOUNG INNOVATOR/6312286935442983858.jpg')) ?>');">
                <span>Senior Innovator branches</span>
            </div>
        </div>
        <div class="branch-grid branch-showcase">
            <?php foreach ($branches as $index => $branch): ?>
                <article>
                    <span><?= str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT) ?></span>
                    <strong><?= htmlspecialchars($branch) ?></strong>
                    <a href="<?= htmlspecialchars(whatsapp_url('Hi NextGen Makers, I would like to check the Senior Innovator schedule at ' . $branch . '.')) ?>" target="_blank" rel="noopener">Check Schedule</a>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="section about-faq-section">
        <div class="section-heading">
            <span class="eyebrow">Senior Innovator FAQ</span>
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
                <span class="eyebrow">Build Smart Systems</span>
                <h2>Help Your Teen Build Their First IoT or Automation Project</h2>
                <p>Senior Innovator helps teenagers move into connected devices, smart systems, sensors, cloud connectivity and automation. Through hands-on learning, students can build advanced practical technology skills and gain confidence in developing real smart solutions.</p>
            </div>
            <a class="btn btn-dark" href="<?= htmlspecialchars($seniorInnovatorWhatsapp) ?>" target="_blank" rel="noopener">Book Senior Innovator Trial Class</a>
        </div>
    </section>
</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>
