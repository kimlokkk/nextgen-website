<?php
$pageTitle = 'Book a Robotics & Coding Trial Class for Kids | NextGen Makers';
$pageDescription = 'Book a RM99 trial class at NextGen Makers Robotics Academy and let your child experience hands-on robotics, coding and STEM learning. Suitable for children and teenagers aged 4 to 18.';
include __DIR__ . '/includes/header.php';

$trialWhatsappMessage = "Hi NextGen Makers,\n\nI would like to book a trial class for my child.\n\nChild's name:\nChild's age:\nPreferred branch:\nPreferred day/time:\nAny previous robotics or coding experience:\n\nPlease share the available trial class slots.\n\nThank you.";
$trialWhatsapp = whatsapp_url($trialWhatsappMessage);

$trialDetails = [
    ['item' => 'Trial Class Fee', 'detail' => 'RM99'],
    ['item' => 'Duration', 'detail' => '1 hour'],
    ['item' => 'Age Group', 'detail' => '4 to 18 years old'],
    ['item' => 'Class Type', 'detail' => 'Robotics, coding or STEM activity'],
    ['item' => 'Availability', 'detail' => 'Weekdays and weekends'],
    ['item' => 'Slots', 'detail' => 'Morning and afternoon/evening'],
    ['item' => 'Branches', 'detail' => 'All active NextGen Makers branches'],
    ['item' => 'Booking Method', 'detail' => 'WhatsApp'],
];

$trialFlow = [
    ['title' => 'Welcome & Introduction', 'text' => 'The facilitator welcomes the child and introduces the activity in a friendly, simple way.'],
    ['title' => 'Age-Appropriate Activity', 'text' => 'The child will try a robotics, coding or STEM task suitable for their age and readiness.'],
    ['title' => 'Hands-On Learning', 'text' => 'The child may build, code, test, arrange, connect, explore or solve a simple challenge.'],
    ['title' => 'Observation', 'text' => 'The facilitator observes the child\'s interest, participation, focus and response to the activity.'],
    ['title' => 'Basic Feedback', 'text' => 'Parents may receive basic feedback on the child\'s interest, participation and suitable program level.'],
    ['title' => 'Program Recommendation', 'text' => 'The team may recommend a suitable program pathway based on the child\'s age and readiness.'],
];

$programMatching = [
    ['age' => 'Age 4-5', 'program' => 'Little Maker', 'text' => 'Play-based robotics, coding robot activities, motorized building or LEGO WeDo-style tasks.', 'url' => '/programs/little-maker.php', 'image' => 'trial-class-about.jpg'],
    ['age' => 'Age 6-9', 'program' => 'Junior Maker', 'text' => 'ScratchJr, Scratch, DIY STEM, animation, game creation or creative coding activities.', 'url' => '/programs/junior-maker.php', 'image' => 'scratch-student.jpg'],
    ['age' => 'Age 10+', 'program' => 'Young Coder', 'text' => 'Arduino, electronics, robotics components or basic hardware-based coding activities.', 'url' => '/programs/young-coder.php', 'image' => 'arduino-student.jpg'],
    ['age' => 'Age 13+', 'program' => 'Young Innovator', 'text' => 'C++-based Arduino concepts, automation, electronics or prototype-style activities.', 'url' => '/programs/young-innovator.php', 'image' => 'arduino-project.jpg'],
    ['age' => 'Age 15+', 'program' => 'Senior Innovator', 'text' => 'IoT, sensors, smart systems or automation-based technology projects.', 'url' => '/programs/senior-innovator.php', 'image' => 'student-make-robot.jpg'],
    ['age' => 'Age 16+', 'program' => 'Senior Coder', 'text' => 'Web design, app development, game development or digital product creation activities.', 'url' => '/programs/senior-coder.php', 'image' => 'senior-coder.jpg'],
    ['age' => 'Special Program', 'program' => 'NextGen Genius', 'text' => 'Adaptive robotics and STEM learning with a supportive, readiness-based activity.', 'url' => '/programs/nextgen-genius.php', 'image' => 'guided-robotic-class.jpg'],
];

$parentLearn = [
    ['title' => 'Child\'s Interest', 'text' => 'Does the child enjoy robotics, coding, building or digital activities?'],
    ['title' => 'Learning Readiness', 'text' => 'Is the child ready for beginner, intermediate or advanced activities?'],
    ['title' => 'Participation', 'text' => 'Can the child join the activity and follow guided steps?'],
    ['title' => 'Confidence Level', 'text' => 'Is the child willing to try, build, test or explain their project?'],
    ['title' => 'Suitable Program Pathway', 'text' => 'Which NextGen Makers program may be the best starting point?'],
    ['title' => 'Preferred Learning Style', 'text' => 'Does the child enjoy hands-on building, digital creativity, electronics, robotics or coding?'],
];

$whoShouldBook = [
    'Want to introduce robotics, coding or STEM to their child',
    'Are unsure which program level is suitable',
    'Want their child to try hands-on technology learning first',
    'Want to see whether their child enjoys building, coding and problem-solving',
    'Want a structured enrichment activity beyond school academics',
    'Want their child to build future-ready skills',
    'Have children aged 4 to 18',
    'Want to compare program suitability across different age levels',
];

$bookingSteps = [
    ['title' => 'WhatsApp Us', 'text' => 'Contact NextGen Makers at 011-5662 0871.'],
    ['title' => 'Share Your Child\'s Details', 'text' => 'Tell us your child\'s age, preferred branch and preferred day or time.'],
    ['title' => 'Choose a Trial Slot', 'text' => 'Our team will share available slots based on branch schedule.'],
    ['title' => 'Attend the Trial Class', 'text' => 'Your child will join an age-appropriate robotics, coding or STEM activity.'],
    ['title' => 'Receive Basic Feedback', 'text' => 'Parents may receive feedback on the child\'s interest, participation and suitable program level.'],
];

$branchAddresses = [
    ['name' => 'MTDC Shah Alam', 'address' => 'Universiti Teknologi MARA (UiTM) Shah Alam, UiTM-MTDC Technopreneur Centre, 40450 Shah Alam, Selangor.'],
    ['name' => 'Bandar Puteri Bangi', 'address' => '22-1, Jln Puteri 2A/3, Bandar Bukit Mahkota, 43000 Kajang, Selangor.'],
    ['name' => 'Puncak Alam', 'address' => 'Pusat Perdagangan Hillpark, 2-1, Jln Hillpark 11/7, Bandar Hillpark, 42300 Puncak Alam, Selangor.'],
    ['name' => 'Seksyen 7 Shah Alam', 'address' => '27B, Jalan Plumbum P 7/P, Seksyen 7, 40000 Shah Alam, Selangor.'],
    ['name' => 'Seksyen 13 Shah Alam', 'address' => '1-07, Metia Residence, 5, Persiaran Sukan, Seksyen 13, 40100 Shah Alam, Selangor.'],
    ['name' => 'Cyberjaya', 'address' => '4807-1-17, 2, Persiaran Flora, Cyberjaya, 63000 Cyberjaya, Selangor.'],
    ['name' => 'Bandar Baru Selayang', 'address' => 'Unit SH-16-2, Selayang 18, Selayang, Selangor.'],
];

$afterTrial = [
    'Child completes trial class',
    'Facilitator/team shares basic feedback',
    'Parent receives suitable program recommendation',
    'Parent checks class schedule and branch availability',
    'Parent may proceed with enrolment if suitable',
];

$whyNextGen = [
    ['title' => 'Complete Pathway from Age 4 to 18', 'text' => 'Students can start from beginner robotics and progress into Arduino, C++ programming, IoT, web design, app development and game development.'],
    ['title' => 'Self-Developed Modules', 'text' => 'Our modules are designed to make robotics, coding and STEM easier for children to understand.'],
    ['title' => 'Real Hands-On Projects', 'text' => 'Students learn by building, coding, testing, improving and presenting their own projects.'],
    ['title' => 'Trained Facilitators', 'text' => 'Our facilitators deliver robotics, coding and STEM lessons in a child-friendly, structured and hands-on way.'],
    ['title' => 'Progress & Showcase', 'text' => 'Parents may see progress through learning feedback, project outputs, certificates and showcase opportunities.'],
];

$faqs = [
    ['question' => 'How much is the trial class?', 'answer' => 'The trial class fee is RM99.'],
    ['question' => 'How long is the trial class?', 'answer' => 'The trial class is 1 hour.'],
    ['question' => 'What age is suitable for the trial class?', 'answer' => 'The trial class is suitable for children and teenagers aged 4 to 18.'],
    ['question' => 'What will my child do during the trial class?', 'answer' => 'Your child will be introduced to an age-appropriate robotics, coding or STEM activity. The exact activity may depend on the child\'s age, readiness and suitable program pathway.'],
    ['question' => 'Can beginners join the trial class?', 'answer' => 'Yes. Beginners can join the trial class. The activity will be matched to the child\'s age and readiness.'],
    ['question' => 'Will parents receive feedback?', 'answer' => 'Parents may receive basic feedback on the child\'s interest, participation and suitable program level.'],
    ['question' => 'Are trial classes available on weekends?', 'answer' => 'Yes. Weekday and weekend slots are available, subject to branch schedule and slot availability.'],
    ['question' => 'Are morning and afternoon slots available?', 'answer' => 'Yes. Morning and afternoon/evening slots are available, depending on branch schedule.'],
    ['question' => 'Is the trial class available at all branches?', 'answer' => 'Yes. Trial classes are available at all active NextGen Makers branches, subject to schedule and slot availability.'],
    ['question' => 'How do I book a trial class?', 'answer' => 'You can book a trial class by contacting NextGen Makers on WhatsApp at 011-5662 0871.'],
    ['question' => 'Do I need to choose the program before booking?', 'answer' => 'Not necessarily. You can share your child\'s age and interest, and the team may recommend a suitable trial activity or program level.'],
    ['question' => 'Where can I ask about full program fees?', 'answer' => 'Full program pricing is not published on the website. Parents may contact NextGen Makers on WhatsApp for detailed fee information.'],
];
?>

<main>
    <section class="hero trial-hero">
        <div class="hero-content">
            <span class="eyebrow">Trial Class</span>
            <h1>Book a Robotics, Coding & STEM Trial Class</h1>
            <p class="hero-lead">Let your child experience a fun hands-on robotics or coding class before enrolling.</p>
            <p>Not sure which program is suitable for your child? Start with a trial class.</p>
            <p>During the session, your child will be introduced to age-appropriate robotics, coding or STEM activities. Parents may receive basic feedback on the child's interest, participation and suitable program level.</p>
            <div class="button-row">
                <a class="btn btn-primary" href="<?= htmlspecialchars($trialWhatsapp) ?>" target="_blank" rel="noopener">Book Trial Class on WhatsApp</a>
                <a class="btn btn-secondary" href="<?= htmlspecialchars(url_path('/programs.php')) ?>">Explore Programs</a>
            </div>
            <div class="program-detail-badges">
                <span>Trial Class RM99</span>
                <span>1 Hour Session</span>
                <span>Ages 4-18</span>
                <span>Weekday & Weekend Slots</span>
                <span>Morning & Afternoon/Evening</span>
                <span>All Active Branches</span>
            </div>
        </div>
        <div class="hero-visual" aria-label="Child attending robotics and coding trial class">
            <div class="hero-photo-card hero-photo-main" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/trial-class.jpg')) ?>');">
                <span>Trial robotics class</span>
            </div>
            <div class="hero-photo-card hero-photo-secondary" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/guided-robotic-class.jpg')) ?>');">
                <span>Facilitator-guided activity</span>
            </div>
            <div class="trial-hero-summary">
                <span>Trial Class</span>
                <strong>RM99</strong>
                <small>1 hour session for ages 4-18</small>
            </div>
        </div>
    </section>

    <section class="section trial-photo-strip-section">
        <div class="trial-photo-grid">
            <div class="student-photo-placeholder photo-fill" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/trial-class-about.jpg')) ?>');">
                <span>Try first</span>
            </div>
            <div class="student-photo-placeholder photo-fill" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/classroom-activity.jpg')) ?>');">
                <span>Guided class</span>
            </div>
            <div class="student-photo-placeholder photo-fill" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/scratch-student.jpg')) ?>');">
                <span>Coding activity</span>
            </div>
            <div class="student-photo-placeholder photo-fill" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/arduino-student.jpg')) ?>');">
                <span>STEM project</span>
            </div>
        </div>
    </section>

    <section class="section program-intro-section">
        <div class="program-detail-split">
            <div>
                <span class="eyebrow">Why Trial First?</span>
                <h2>Why Start with a Trial Class?</h2>
                <p>Every child has different interests, confidence levels and learning readiness.</p>
                <p>Some children enjoy robotics and building activities. Some are more interested in coding, games, animation or digital projects. Some may be ready for Arduino, electronics or IoT, while others may need a more beginner-friendly starting point.</p>
                <p>The trial class helps your child experience NextGen Makers learning first before enrolling into a full program. It also helps parents understand which robotics, coding or STEM pathway may be suitable for their child.</p>
            </div>
            <aside class="program-highlight-card">
                <strong>Try first. Understand your child's interest. Choose the right program.</strong>
                <p>A trial class gives parents a clearer starting point before making a decision.</p>
                <div class="student-photo-placeholder photo-fill" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/trial-class-about.jpg')) ?>');">
                    <span>Hands-on trial activity</span>
                </div>
            </aside>
        </div>
    </section>

    <section class="section learning-flow-section">
        <div class="section-heading">
            <span class="eyebrow">During The Trial</span>
            <h2>What Happens During the Trial Class?</h2>
            <p>Students are introduced to an age-appropriate robotics, coding or STEM activity. The activity may vary depending on the child's age, readiness and suitable program pathway.</p>
        </div>
        <div class="trial-activity-layout">
            <div class="student-photo-placeholder portrait photo-fill trial-activity-photo" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/student-make-robot.jpg')) ?>');">
                <span>Build, test and learn</span>
            </div>
            <div class="program-flow">
                <?php foreach ($trialFlow as $index => $step): ?>
                    <article>
                        <span><?= str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT) ?></span>
                        <h3><?= htmlspecialchars($step['title']) ?></h3>
                        <p><?= htmlspecialchars($step['text']) ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="section class-structure-section">
        <div class="section-heading">
            <span class="eyebrow">Trial Details</span>
            <h2>Trial Class Details</h2>
            <p>Trial class slots are subject to branch schedule and availability. Parents are encouraged to book in advance through WhatsApp.</p>
        </div>
        <div class="trial-details-showcase">
            <div class="trial-price-card">
                <span>Trial Fee</span>
                <strong>RM99</strong>
                <p>1 hour session, matched to your child's age and readiness.</p>
                <a class="btn btn-dark" href="<?= htmlspecialchars($trialWhatsapp) ?>" target="_blank" rel="noopener">Book on WhatsApp</a>
            </div>
            <div class="class-detail-grid trial-detail-grid">
                <?php foreach ($trialDetails as $detail): ?>
                    <article>
                        <strong><?= htmlspecialchars($detail['item']) ?></strong>
                        <p><?= htmlspecialchars($detail['detail']) ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="section programs-pathway-section">
        <div class="section-heading">
            <span class="eyebrow">Program Matching</span>
            <h2>Which Program Will My Child Try?</h2>
            <p>The trial class activity will be recommended based on your child's age and learning readiness.</p>
        </div>
        <div class="trial-program-grid">
            <?php foreach ($programMatching as $program): ?>
                <article>
                    <div class="program-overview-image photo-fill" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/' . $program['image'])) ?>');">
                        <span><?= htmlspecialchars($program['age']) ?></span>
                    </div>
                    <div class="program-overview-body">
                        <h3><?= htmlspecialchars($program['program']) ?></h3>
                        <p><?= htmlspecialchars($program['text']) ?></p>
                        <a href="<?= htmlspecialchars(url_path($program['url'])) ?>">View Program</a>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
        <div class="parent-note">
            <strong>Program Recommendation Note</strong>
            <p>The final program recommendation may depend on the child's age, interest, confidence, participation and learning readiness.</p>
        </div>
    </section>

    <section class="section skills-detail-section">
        <div class="section-heading">
            <span class="eyebrow">For Parents</span>
            <h2>What Can Parents Learn from the Trial Class?</h2>
            <p>The trial class is not just for the child. It also helps parents understand how their child responds to robotics, coding and STEM learning.</p>
        </div>
        <div class="skills-detail-grid">
            <?php foreach ($parentLearn as $item): ?>
                <article>
                    <strong><?= htmlspecialchars($item['title']) ?></strong>
                    <p><?= htmlspecialchars($item['text']) ?></p>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="section benefits-section">
        <div class="program-detail-split">
            <div>
                <span class="eyebrow">Who Should Book?</span>
                <h2>Who Should Book a Trial Class?</h2>
                <p>A trial class is suitable for parents who want to explore robotics, coding or STEM learning for their child before enrolling.</p>
                <div class="program-chip-grid">
                    <?php foreach ($whoShouldBook as $item): ?>
                        <span><?= htmlspecialchars($item) ?></span>
                    <?php endforeach; ?>
                </div>
                <div class="parent-note">
                    <strong>Parent-Friendly Note</strong>
                    <p>If you are unsure where your child should start, the trial class is the easiest first step.</p>
                </div>
            </div>
            <div class="student-photo-placeholder portrait photo-fill trial-parent-photo" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/confident-young-makers.jpg')) ?>');">
                <span>Confidence after trying</span>
            </div>
        </div>
    </section>

    <section class="section learning-flow-section">
        <div class="program-detail-split">
            <div>
                <span class="eyebrow">Booking Steps</span>
                <h2>How to Book a Trial Class</h2>
                <div class="program-flow trial-booking-flow">
                    <?php foreach ($bookingSteps as $index => $step): ?>
                        <article>
                            <span><?= str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT) ?></span>
                            <h3><?= htmlspecialchars($step['title']) ?></h3>
                            <p><?= htmlspecialchars($step['text']) ?></p>
                        </article>
                    <?php endforeach; ?>
                </div>
                <div class="button-row">
                    <a class="btn btn-dark" href="<?= htmlspecialchars($trialWhatsapp) ?>" target="_blank" rel="noopener">Book Trial Class on WhatsApp</a>
                </div>
            </div>
            <div class="student-photo-placeholder portrait photo-fill trial-booking-photo" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/trial-class.jpg')) ?>');">
                <span>Easy WhatsApp booking</span>
            </div>
        </div>
    </section>

    <section class="section project-output-section trial-template-section">
        <div class="program-detail-split">
            <div>
                <span class="eyebrow">WhatsApp Template</span>
                <h2>WhatsApp Booking Template</h2>
                <p>Parents can send this message to book a trial class.</p>
                <div class="trial-message-card">
                    <p>Hi NextGen Makers,<br><br>I would like to book a trial class for my child.<br><br>Child's name:<br>Child's age:<br>Preferred branch:<br>Preferred day/time:<br>Any previous robotics or coding experience:<br><br>Please share the available trial class slots.<br><br>Thank you.</p>
                    <a class="btn btn-primary" href="<?= htmlspecialchars($trialWhatsapp) ?>" target="_blank" rel="noopener">Send WhatsApp Message</a>
                </div>
            </div>
            <aside class="parent-value-card trial-template-card">
                <strong>One Tap Booking</strong>
                <p>The WhatsApp button opens with the booking template ready. Parents only need to fill in the child's details and preferred slot.</p>
                <div class="student-photo-placeholder photo-fill" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/classroom-activity.jpg')) ?>');">
                    <span>Book through WhatsApp</span>
                </div>
            </aside>
        </div>
    </section>

    <section class="section branch-availability-section">
        <div class="section-heading">
            <span class="eyebrow">Branches</span>
            <h2>Choose Your Preferred Branch</h2>
            <p>Trial classes are available at all active NextGen Makers branches, subject to schedule and slot availability.</p>
            <p>Parents searching for robotics trial class Shah Alam, coding trial class Bangi, robotics trial class Cyberjaya, robotics trial class Puncak Alam or robotics trial class Selayang can check available slots on WhatsApp.</p>
        </div>
        <div class="branch-grid branch-showcase">
            <?php foreach ($branchAddresses as $index => $branch): ?>
                <article>
                    <span><?= str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT) ?></span>
                    <strong><?= htmlspecialchars($branch['name']) ?></strong>
                    <p><?= htmlspecialchars($branch['address']) ?></p>
                    <a href="<?= htmlspecialchars(whatsapp_url('Hi NextGen Makers, I would like to check trial class slots at ' . $branch['name'] . '.')) ?>" target="_blank" rel="noopener">Check Trial Slot</a>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="section class-structure-section">
        <div class="section-heading">
            <span class="eyebrow">After Trial</span>
            <h2>What Happens After the Trial Class?</h2>
            <p>After the trial class, parents may receive basic feedback about the child's session. If the child is suitable to continue, parents can ask about the recommended program, class schedule and enrolment details through WhatsApp.</p>
        </div>
        <div class="class-detail-grid">
            <?php foreach ($afterTrial as $index => $item): ?>
                <article><strong><?= str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT) ?></strong><p><?= htmlspecialchars($item) ?></p></article>
            <?php endforeach; ?>
        </div>
        <div class="parent-note">
            <strong>Fee Note</strong>
            <p>Full program pricing is not published on the website. Parents may contact NextGen Makers on WhatsApp for detailed fee information and available class slots.</p>
        </div>
    </section>

    <section class="section skills-detail-section">
        <div class="program-detail-split">
            <div>
                <span class="eyebrow">Why NextGen Makers?</span>
                <h2>Why Choose NextGen Makers?</h2>
                <p>NextGen Makers Robotics Academy provides a complete learning pathway for children and teenagers aged 4 to 18.</p>
                <div class="skills-detail-grid compact-proof-grid">
                    <?php foreach ($whyNextGen as $item): ?>
                        <article>
                            <strong><?= htmlspecialchars($item['title']) ?></strong>
                            <p><?= htmlspecialchars($item['text']) ?></p>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="student-photo-placeholder portrait photo-fill trial-proof-photo" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/student-showcase-about.jpg')) ?>');">
                <span>Real projects, real progress</span>
            </div>
        </div>
    </section>

    <section class="section about-faq-section">
        <div class="section-heading">
            <span class="eyebrow">Trial Class FAQ</span>
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
                <span class="eyebrow">Ready to Start?</span>
                <h2>Ready to Let Your Child Try Robotics, Coding & STEM?</h2>
                <p>Book a trial class and let your child experience hands-on technology learning with NextGen Makers. Start with one session, discover your child's interest and find the right program pathway.</p>
                <div class="program-detail-badges">
                    <span>Trial Class Fee: RM99</span>
                    <span>Duration: 1 hour</span>
                    <span>Suitable for ages 4-18</span>
                    <span>All active branches</span>
                </div>
            </div>
            <a class="btn btn-dark" href="<?= htmlspecialchars($trialWhatsapp) ?>" target="_blank" rel="noopener">Book Trial Class Now</a>
        </div>
    </section>
</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
