<?php
$pageTitle = 'NextGen Makers FAQ | Robotics, Coding & STEM Classes for Kids';
$pageDescription = 'Frequently asked questions about NextGen Makers robotics, coding and STEM classes, trial class RM99, programs, schedules, branches, fees, learning outcomes, tools, NextGen Genius and collaboration.';
include __DIR__ . '/includes/header.php';

$faqWhatsapp = whatsapp_url("Hi NextGen Makers, I have a question about your robotics, coding and STEM classes.\n\nChild's age:\nPreferred branch:\nQuestion:\n\nThank you.");

$quickAnswers = [
    ['title' => 'Trial Class Fee', 'text' => 'RM99'],
    ['title' => 'Class Duration', 'text' => '1 hour per session'],
    ['title' => 'Class Frequency', 'text' => '4 classes per month'],
    ['title' => 'Age Group', 'text' => 'Ages 4 to 18'],
    ['title' => 'Booking Method', 'text' => 'WhatsApp'],
    ['title' => 'Locations', 'text' => '7 active branches'],
];

$faqSections = [
    [
        'id' => 'general',
        'title' => 'General FAQ',
        'eyebrow' => 'General',
        'items' => [
            ['question' => 'What is NextGen Makers Robotics Academy?', 'answer' => 'NextGen Makers Robotics Academy is a robotics, coding and STEM education academy for children and teenagers aged 4 to 18. Students learn through structured hands-on projects such as robots, Scratch, Arduino, IoT, websites, apps and games.'],
            ['question' => 'What makes NextGen Makers different from other robotics classes?', 'answer' => 'NextGen Makers uses self-developed modules, hands-on project-based learning and a complete age pathway from beginner robotics to advanced coding, IoT and digital product development.'],
            ['question' => 'Is NextGen Makers only a robotics class?', 'answer' => 'No. NextGen Makers covers robotics, coding, STEM, Arduino, electronics, IoT, automation, web design, app development and game development.'],
            ['question' => 'What age group can join NextGen Makers?', 'answer' => 'NextGen Makers programs are designed for children and teenagers aged 4 to 18, with different programs matched to age and readiness.'],
            ['question' => 'Is NextGen Makers suitable for beginners?', 'answer' => 'Yes. Beginners can start with age-appropriate activities. Younger children begin with play-based robotics and simple coding, while older students can start at a suitable level based on readiness.'],
        ],
    ],
    [
        'id' => 'programs',
        'title' => 'Program FAQ',
        'eyebrow' => 'Programs',
        'items' => [
            ['question' => 'What programs does NextGen Makers offer?', 'answer' => 'NextGen Makers offers Little Maker, Junior Maker, Young Coder, Young Innovator, Senior Innovator, Senior Coder and NextGen Genius.'],
            ['question' => 'Which program is suitable for children aged 4 to 5?', 'answer' => 'Little Maker is suitable for children aged 4 to 5. It focuses on play-based robotics, coding robot activities, motorized building and early STEM exposure.'],
            ['question' => 'Which program is suitable for children aged 6 to 9?', 'answer' => 'Junior Maker is suitable for children aged 6 to 9. It focuses on ScratchJr, Scratch, animation, games, DIY STEM and creative coding activities.'],
            ['question' => 'Which program is suitable for children aged 10 and above?', 'answer' => 'Young Coder is suitable for students aged 10 and above. It introduces Arduino programming, electronics, robotics and engineering-style projects.'],
            ['question' => 'Which program is suitable for teenagers aged 13 and above?', 'answer' => 'Young Innovator is suitable for teenagers aged 13 and above. It focuses on C++ programming, Arduino development, automation and functional prototype creation.'],
            ['question' => 'Which program is suitable for teenagers aged 15 and above?', 'answer' => 'Senior Innovator is suitable for teenagers aged 15 and above. It focuses on IoT, smart systems, sensors, cloud connectivity and automation.'],
            ['question' => 'Which program is suitable for teenagers aged 16 and above?', 'answer' => 'Senior Coder is suitable for teenagers aged 16 and above. It focuses on web design, app development, game development and digital product creation.'],
            ['question' => 'What is NextGen Genius?', 'answer' => 'NextGen Genius is an adaptive robotics and STEM learning program for children with special needs. It focuses on confidence, interaction, engagement and suitable hands-on activities.'],
            ['question' => 'Is NextGen Genius a therapy program?', 'answer' => 'No. NextGen Genius is not a therapy program. It is an adaptive robotics and STEM enrichment program designed to support suitable learning experiences.'],
        ],
    ],
    [
        'id' => 'trial',
        'title' => 'Trial Class FAQ',
        'eyebrow' => 'Trial Class',
        'items' => [
            ['question' => 'Does NextGen Makers offer trial classes?', 'answer' => 'Yes. Parents can book a trial class before enrolling. The trial helps identify a suitable starting point for the child.'],
            ['question' => 'How much is the trial class?', 'answer' => 'The trial class fee is RM99.'],
            ['question' => 'How long is the trial class?', 'answer' => 'The trial class is 1 hour.'],
            ['question' => 'What happens during the trial class?', 'answer' => 'Students are introduced to an age-appropriate robotics, coding or STEM activity. The activity may vary depending on the child\'s age, readiness and suitable program pathway.'],
            ['question' => 'Can beginners join the trial class?', 'answer' => 'Yes. Beginners are welcome. Students do not need previous robotics or coding experience to join a trial class.'],
            ['question' => 'Do parents need to choose the program before booking a trial class?', 'answer' => 'No. Parents can share the child\'s age and interest. Our team can recommend a suitable program level after understanding the child\'s readiness.'],
            ['question' => 'How do I book a trial class?', 'answer' => 'You can book a trial class by contacting NextGen Makers through WhatsApp at 011-5662 0871.'],
            ['question' => 'What information should I share when booking a trial class?', 'answer' => 'Please share your child\'s name, age, preferred branch, preferred day or time and any previous robotics or coding experience.'],
            ['question' => 'Is the trial class available on weekends?', 'answer' => 'Weekend trial slots may be available depending on branch schedule and slot availability.'],
            ['question' => 'Are morning and afternoon slots available?', 'answer' => 'Morning, afternoon or evening slots may be available depending on the selected branch schedule.'],
        ],
    ],
    [
        'id' => 'schedule',
        'title' => 'Class Schedule & Structure FAQ',
        'eyebrow' => 'Schedule',
        'items' => [
            ['question' => 'How often are the regular classes?', 'answer' => 'Regular classes are conducted 4 times per month.'],
            ['question' => 'How long is each class?', 'answer' => 'Each class is 1 hour.'],
            ['question' => 'Are classes available on weekdays and weekends?', 'answer' => 'Yes, weekday and weekend slots may be available depending on branch schedule.'],
            ['question' => 'Are morning and afternoon/evening slots available?', 'answer' => 'Yes, morning and afternoon or evening slots may be available depending on the selected branch.'],
            ['question' => 'Are all programs available at every branch?', 'answer' => 'Program availability may vary depending on branch schedule, student level and slot availability. Parents should check with our team before booking.'],
            ['question' => 'How do I check the latest class schedule?', 'answer' => 'You can WhatsApp NextGen Makers at 011-5662 0871 to check the latest class schedule for your preferred branch.'],
        ],
    ],
    [
        'id' => 'fees',
        'title' => 'Fees FAQ',
        'eyebrow' => 'Fees',
        'items' => [
            ['question' => 'Is the full program fee published on the website?', 'answer' => 'The full program fee is not published directly on the website. Parents can contact our team to check the latest fee based on the selected program and branch.'],
            ['question' => 'Why is the full program fee not listed?', 'answer' => 'Program fees may depend on program level, branch schedule and current class arrangement. Our team will provide accurate information during enquiry.'],
            ['question' => 'Is the trial class fee published?', 'answer' => 'Yes. The trial class fee is RM99.'],
        ],
    ],
    [
        'id' => 'locations',
        'title' => 'Location FAQ',
        'eyebrow' => 'Locations',
        'items' => [
            ['question' => 'Where is NextGen Makers located?', 'answer' => 'NextGen Makers has active branches in MTDC Shah Alam, Bandar Puteri Bangi, Puncak Alam, Seksyen 7 Shah Alam, Seksyen 13 Shah Alam, Cyberjaya and Bandar Baru Selayang.'],
            ['question' => 'Which branch is suitable if I stay in Shah Alam?', 'answer' => 'Families around Shah Alam may consider MTDC Shah Alam, Seksyen 7 Shah Alam or Seksyen 13 Shah Alam, depending on the preferred schedule and route.'],
            ['question' => 'Which branch is suitable if I stay in Bangi or Kajang?', 'answer' => 'Families around Bangi or Kajang may consider the Bandar Puteri Bangi branch.'],
            ['question' => 'Which branch is suitable if I stay in Cyberjaya or Putrajaya?', 'answer' => 'Families around Cyberjaya or Putrajaya may consider the Cyberjaya branch.'],
            ['question' => 'Which branch is suitable if I stay in Puncak Alam?', 'answer' => 'Families around Puncak Alam may consider the Puncak Alam branch.'],
            ['question' => 'Which branch is suitable if I stay in Selayang?', 'answer' => 'Families around Selayang may consider the Bandar Baru Selayang branch.'],
            ['question' => 'Can I choose any branch for trial class?', 'answer' => 'Yes. Parents can choose the preferred branch, subject to trial class schedule and slot availability.'],
        ],
    ],
    [
        'id' => 'outcomes',
        'title' => 'Learning Outcome FAQ',
        'eyebrow' => 'Learning Outcomes',
        'items' => [
            ['question' => 'What will my child learn at NextGen Makers?', 'answer' => 'Your child can learn robotics, coding, STEM thinking, Scratch, Arduino, electronics, IoT, automation, web design, app development, game development and project presentation skills depending on the program.'],
            ['question' => 'What skills can my child develop?', 'answer' => 'Students can develop problem-solving, creativity, logical thinking, communication, confidence, teamwork, technical understanding and project ownership.'],
            ['question' => 'Will my child build real projects?', 'answer' => 'Yes. Students learn through hands-on projects such as robots, animations, games, Arduino builds, IoT systems, websites, apps and digital products.'],
            ['question' => 'Will parents receive progress updates?', 'answer' => 'Progress sharing may depend on class arrangement and branch communication. Parents can ask the team for updates on their child\'s progress.'],
            ['question' => 'Does NextGen Makers provide certificates?', 'answer' => 'Certificates may be provided depending on the program, event, showcase or collaboration format.'],
            ['question' => 'Does NextGen Makers have student showcase opportunities?', 'answer' => 'Yes. NextGen Spark is a student project showcase platform where students can present robotics, coding, STEM and digital projects.'],
        ],
    ],
    [
        'id' => 'tools',
        'title' => 'Tools & Technology FAQ',
        'eyebrow' => 'Tools',
        'items' => [
            ['question' => 'What tools or kits are used in NextGen Makers programs?', 'answer' => 'Students may use coding robots, LEGO WeDo-style activities, Scratch, Arduino, sensors, motors, electronics components, IoT tools, web tools and digital creation platforms depending on program level.'],
            ['question' => 'Does my child need to bring their own robotics kit?', 'answer' => 'Usually students do not need to bring their own robotics kit for standard classes unless informed by the branch team.'],
            ['question' => 'Does my child need a laptop?', 'answer' => 'Laptop requirements may depend on program level and activity type. Parents can check with the team before class.'],
            ['question' => 'Does NextGen Makers teach Scratch?', 'answer' => 'Yes. Scratch and creative coding are part of suitable programs such as Junior Maker.'],
            ['question' => 'Does NextGen Makers teach Arduino?', 'answer' => 'Yes. Arduino, electronics and robotics projects are part of programs such as Young Coder and Young Innovator.'],
            ['question' => 'Does NextGen Makers teach IoT?', 'answer' => 'Yes. IoT, smart systems and automation are part of Senior Innovator.'],
            ['question' => 'Does NextGen Makers teach web design, app development and game development?', 'answer' => 'Yes. Senior Coder focuses on web design, app development, game development and digital product creation.'],
        ],
    ],
    [
        'id' => 'special-needs',
        'title' => 'Special Needs FAQ',
        'eyebrow' => 'NextGen Genius',
        'items' => [
            ['question' => 'Does NextGen Makers offer robotics for children with special needs?', 'answer' => 'Yes. NextGen Genius offers adaptive robotics and STEM enrichment for suitable children with special needs.'],
            ['question' => 'What does NextGen Genius focus on?', 'answer' => 'NextGen Genius focuses on adaptive robotics, STEM engagement, confidence, interaction, simple problem-solving and suitable hands-on activities.'],
            ['question' => 'How do I know if NextGen Genius is suitable for my child?', 'answer' => 'Parents can contact NextGen Makers to share the child\'s age, needs, learning readiness and goals. Our team can advise whether the program may be suitable.'],
            ['question' => 'What if my child needs more support?', 'answer' => 'Please inform our team about your child\'s support needs before booking. Suitability depends on the child, activity format and available facilitation arrangement.'],
        ],
    ],
    [
        'id' => 'collaboration',
        'title' => 'Collaboration FAQ',
        'eyebrow' => 'Collaboration',
        'items' => [
            ['question' => 'Does NextGen Makers collaborate with schools?', 'answer' => 'Yes. NextGen Makers can collaborate with schools for robotics workshops, coding workshops, STEM activities, enrichment programs, showcases and events.'],
            ['question' => 'Does NextGen Makers collaborate with NGOs or corporate CSR teams?', 'answer' => 'Yes. NextGen Makers can work with NGOs, community organizations and corporate CSR teams for future skills and STEM outreach programs.'],
            ['question' => 'Can NextGen Makers run a STEM workshop at our school or event?', 'answer' => 'Yes. We can discuss a suitable STEM, robotics or coding workshop based on participant age, number of students, venue and objective.'],
            ['question' => 'How do I discuss collaboration?', 'answer' => 'You can contact NextGen Makers through WhatsApp or email and share your organization name, objective, target participants, preferred date, location and expected program format.'],
        ],
    ],
];

$allFaqs = [];
foreach ($faqSections as $section) {
    foreach ($section['items'] as $item) {
        $allFaqs[] = $item;
    }
}
?>

<main>
    <section class="hero faq-hero">
        <div class="hero-content">
            <span class="eyebrow">FAQ</span>
            <h1>Frequently Asked Questions About NextGen Makers</h1>
            <p class="hero-lead">Find answers about our robotics, coding and STEM classes, trial class, programs, schedules, branches, fees and learning outcomes.</p>
            <p>If you are not sure where your child should start, book a trial class and our team will help recommend a suitable program pathway.</p>
            <div class="button-row">
                <a class="btn btn-primary" href="<?= htmlspecialchars(whatsapp_url()) ?>" target="_blank" rel="noopener">Book Trial Class</a>
                <a class="btn btn-secondary" href="<?= htmlspecialchars($faqWhatsapp) ?>" target="_blank" rel="noopener">Ask a Question</a>
            </div>
            <div class="program-detail-badges">
                <span>Trial Class RM99</span>
                <span>Ages 4-18</span>
                <span>Robotics</span>
                <span>Coding</span>
                <span>STEM</span>
            </div>
        </div>
        <div class="hero-visual faq-hero-visual" aria-label="NextGen Makers FAQ">
            <div class="hero-photo-card hero-photo-main" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/TRIAL CLASS/6233119207726369610.jpg')) ?>');">
                <span>Guided STEM learning</span>
            </div>
            <div class="hero-photo-card hero-photo-secondary" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/YOUNG CODER/6289668976233530628.jpg')) ?>');">
                <span>Student progress</span>
            </div>
        </div>
    </section>

    <section class="section faq-quick-section">
        <div class="section-heading">
            <span class="eyebrow">Quick Answers</span>
            <h2>Need the short version?</h2>
            <p>These are the most common details parents ask for before booking a trial class.</p>
        </div>
        <div class="faq-quick-grid">
            <?php foreach ($quickAnswers as $answer): ?>
                <article>
                    <span><?= htmlspecialchars($answer['title']) ?></span>
                    <strong><?= htmlspecialchars($answer['text']) ?></strong>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="faq-category-nav-section">
        <div class="faq-category-nav">
            <?php foreach ($faqSections as $section): ?>
                <a href="#<?= htmlspecialchars($section['id']) ?>"><?= htmlspecialchars($section['eyebrow']) ?></a>
            <?php endforeach; ?>
        </div>
    </section>

    <?php foreach ($faqSections as $sectionIndex => $section): ?>
        <section class="section faq-group-section <?= $sectionIndex % 2 === 1 ? 'faq-group-alt' : '' ?>" id="<?= htmlspecialchars($section['id']) ?>">
            <div class="faq-group-layout">
                <div class="faq-group-heading">
                    <span class="eyebrow"><?= htmlspecialchars($section['eyebrow']) ?></span>
                    <h2><?= htmlspecialchars($section['title']) ?></h2>
                    <p><?= count($section['items']) ?> common questions answered clearly for parents and partners.</p>
                </div>
                <div class="faq-list">
                    <?php foreach ($section['items'] as $item): ?>
                        <details>
                            <summary><?= htmlspecialchars($item['question']) ?></summary>
                            <p><?= htmlspecialchars($item['answer']) ?></p>
                        </details>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    <?php endforeach; ?>

    <section class="section final-cta-section">
        <div class="final-cta-inner">
            <div>
                <span class="eyebrow">Still Not Sure?</span>
                <h2>Ask our team or book a trial class.</h2>
                <p>Share your child's age, preferred branch and question. Our team will help you check the suitable program, available schedule and trial class slot.</p>
            </div>
            <a class="btn btn-dark" href="<?= htmlspecialchars($faqWhatsapp) ?>" target="_blank" rel="noopener">WhatsApp NextGen Makers</a>
        </div>
    </section>
</main>

<script type="application/ld+json">
<?= json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'FAQPage',
    'mainEntity' => array_map(fn($faq) => [
        '@type' => 'Question',
        'name' => $faq['question'],
        'acceptedAnswer' => [
            '@type' => 'Answer',
            'text' => $faq['answer'],
        ],
    ], $allFaqs),
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) ?>
</script>

<?php include __DIR__ . '/includes/footer.php'; ?>
