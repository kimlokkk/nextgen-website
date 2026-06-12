<?php
$pageTitle = 'Contact NextGen Makers | Book Robotics, Coding & STEM Trial Class';
$pageDescription = 'Contact NextGen Makers to book a robotics, coding and STEM trial class, check branch schedules, ask about programs, fees, locations and collaboration enquiries.';
include __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/branch-data.php';

$bookingWhatsapp = whatsapp_url("Hi NextGen Makers, I would like to book a trial class for my child.\n\nChild's name:\nChild's age:\nPreferred branch:\nPreferred day/time:\nAny previous robotics or coding experience:\n\nPlease share the available trial class slots. Thank you.");
$generalWhatsapp = whatsapp_url("Hi NextGen Makers, I would like to ask about your robotics, coding and STEM classes.\n\nChild's age:\nPreferred branch:\nQuestion:\n\nThank you.");
$collaborationWhatsapp = whatsapp_url("Hi NextGen Makers, I would like to discuss a collaboration.\n\nOrganization name:\nCollaboration objective:\nTarget participants:\nPreferred date/location:\n\nPlease share more details. Thank you.");

$contactCards = [
    ['title' => 'WhatsApp', 'text' => $whatsappDisplay, 'url' => $generalWhatsapp, 'label' => 'Message Us'],
    ['title' => 'Email', 'text' => $email, 'url' => 'mailto:' . $email, 'label' => 'Send Email'],
    ['title' => 'Website', 'text' => 'www.nextgenmakers.com.my', 'url' => $siteUrl, 'label' => 'Visit Website'],
];

$bookingInfo = [
    'Child\'s name',
    'Child\'s age',
    'Preferred branch',
    'Preferred day or time',
    'Any previous robotics or coding experience',
    'Any learning needs or questions',
];

$programGuide = [
    ['name' => 'Little Maker', 'age' => 'Age 4-5', 'text' => 'Play-based robotics, coding robot, motorized building and early STEM exposure.'],
    ['name' => 'Junior Maker', 'age' => 'Age 6-9', 'text' => 'ScratchJr, Scratch, DIY STEM, animations, games and creative coding.'],
    ['name' => 'Young Coder', 'age' => 'Age 10+', 'text' => 'Arduino, electronics, robotics and hands-on engineering projects.'],
    ['name' => 'Young Innovator', 'age' => 'Age 13+', 'text' => 'C++ programming, Arduino, automation and functional prototypes.'],
    ['name' => 'Senior Innovator', 'age' => 'Age 15+', 'text' => 'IoT, smart systems, sensors, cloud connectivity and automation.'],
    ['name' => 'Senior Coder', 'age' => 'Age 16+', 'text' => 'Web design, app development, game development and digital product creation.'],
    ['name' => 'NextGen Genius', 'age' => 'Special Program', 'text' => 'Adaptive robotics and STEM enrichment for suitable children with special needs.'],
];

$faqs = [
    ['question' => 'What is the fastest way to contact NextGen Makers?', 'answer' => 'The fastest way is to contact NextGen Makers through WhatsApp at 011-5662 0871.'],
    ['question' => 'How do I book a trial class?', 'answer' => 'Send us your child\'s name, age, preferred branch, preferred day or time and any previous robotics or coding experience through WhatsApp.'],
    ['question' => 'How much is the trial class?', 'answer' => 'The trial class fee is RM99.'],
    ['question' => 'How long is the trial class?', 'answer' => 'The trial class is 1 hour.'],
    ['question' => 'Can I ask about full program fees through WhatsApp?', 'answer' => 'Yes. You can ask our team about the latest program fees, class schedule and available branch slots through WhatsApp.'],
    ['question' => 'Can I choose my preferred branch?', 'answer' => 'Yes. You can choose your preferred branch, subject to class schedule and slot availability.'],
    ['question' => 'Are classes available on weekends?', 'answer' => 'Weekend classes may be available depending on the selected branch schedule and available slots.'],
    ['question' => 'Can I contact NextGen Makers for school or CSR collaboration?', 'answer' => 'Yes. Schools, NGOs, event organizers and CSR teams can contact NextGen Makers to discuss robotics, coding or STEM collaboration programs.'],
];
?>

<main>
    <section class="hero contact-hero">
        <div class="hero-content">
            <span class="eyebrow">Contact Us</span>
            <h1>Contact NextGen Makers</h1>
            <p class="hero-lead">Book a robotics, coding or STEM trial class, check branch schedules, ask about programs or discuss collaboration opportunities.</p>
            <p>Tell us your child's age, preferred branch and preferred schedule. Our team will help recommend a suitable starting point and available trial class slot.</p>
            <div class="button-row">
                <a class="btn btn-primary" href="<?= htmlspecialchars($bookingWhatsapp) ?>" target="_blank" rel="noopener">Book Trial Class</a>
                <a class="btn btn-secondary" href="#branch-contact">Choose Branch</a>
            </div>
            <div class="program-detail-badges">
                <span>WhatsApp: <?= htmlspecialchars($whatsappDisplay) ?></span>
                <span>Trial Class RM99</span>
                <span>Ages 4-18</span>
                <span>7 Branches</span>
            </div>
        </div>
        <div class="hero-visual contact-hero-visual" aria-label="Contact NextGen Makers">
            <div class="hero-photo-card hero-photo-main" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/TRIAL CLASS/6213062741246200287.jpg')) ?>');">
                <span>Book a trial class</span>
            </div>
            <div class="hero-photo-card hero-photo-secondary" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/TRIAL CLASS/6233119207726369610.jpg')) ?>');">
                <span>Find your branch</span>
            </div>
        </div>
    </section>

    <section class="section contact-details-section">
        <div class="section-heading">
            <span class="eyebrow">Contact Details</span>
            <h2>Reach us through WhatsApp or email.</h2>
            <p>WhatsApp is the recommended contact method for trial class booking, schedule checks and branch enquiries.</p>
        </div>
        <div class="contact-card-grid">
            <?php foreach ($contactCards as $card): ?>
                <article>
                    <span><?= htmlspecialchars($card['title']) ?></span>
                    <strong><?= htmlspecialchars($card['text']) ?></strong>
                    <a href="<?= htmlspecialchars($card['url']) ?>" target="<?= str_starts_with($card['url'], 'mailto:') ? '_self' : '_blank' ?>" rel="noopener"><?= htmlspecialchars($card['label']) ?></a>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="section contact-trial-section">
        <div class="program-trial-detail-inner">
            <div>
                <span class="eyebrow">Book A Trial Class</span>
                <h2>Try a class before enrolling.</h2>
                <p>Trial classes help parents understand the suitable program level for their child. Activities are matched based on age, readiness and available branch schedule.</p>
                <div class="trial-detail-row">
                    <span>Trial Fee: <strong>RM99</strong></span>
                    <span>Duration: <strong>1 hour</strong></span>
                    <span>Age Group: <strong>4 to 18</strong></span>
                    <span>Booking: <strong>WhatsApp</strong></span>
                </div>
            </div>
            <a class="btn btn-dark" href="<?= htmlspecialchars($bookingWhatsapp) ?>" target="_blank" rel="noopener">Book on WhatsApp</a>
        </div>
    </section>

    <section class="section contact-share-section">
        <div class="program-detail-split">
            <div>
                <span class="eyebrow">What To Share</span>
                <h2>Information needed when booking.</h2>
                <p>These details help our team check the suitable branch, schedule and program pathway faster.</p>
                <div class="program-chip-grid">
                    <?php foreach ($bookingInfo as $item): ?>
                        <span><?= htmlspecialchars($item) ?></span>
                    <?php endforeach; ?>
                </div>
                <div class="parent-note">
                    <strong>Parent-Friendly Note</strong>
                    <p>You do not need to know which program is suitable before contacting us. Share your child's age and our team can guide you.</p>
                </div>
            </div>
            <aside class="contact-message-card">
                <span>WhatsApp Booking Template</span>
                <p>Hi NextGen Makers, I would like to book a trial class for my child.</p>
                <p>Child's name:<br>Child's age:<br>Preferred branch:<br>Preferred day/time:<br>Any previous robotics or coding experience:</p>
                <a class="btn btn-primary" href="<?= htmlspecialchars($bookingWhatsapp) ?>" target="_blank" rel="noopener">Send WhatsApp Message</a>
            </aside>
        </div>
    </section>

    <section class="section contact-branches-section" id="branch-contact">
        <div class="section-heading">
            <span class="eyebrow">Preferred Branch</span>
            <h2>Choose your preferred NextGen Makers branch.</h2>
            <p>Class schedules and trial slots are subject to branch availability. Contact our team to check the latest schedule.</p>
        </div>
        <div class="contact-branch-grid">
            <?php foreach ($branchPages as $slug => $branch): ?>
                <article>
                    <div class="contact-branch-photo photo-fill" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/' . $branch['image'])) ?>');"></div>
                    <div class="contact-branch-body">
                        <span><?= htmlspecialchars($branch['area']) ?></span>
                        <h3>NextGen Makers <?= htmlspecialchars($branch['name']) ?></h3>
                        <p><?= htmlspecialchars($branch['address']) ?></p>
                        <div class="location-card-actions">
                            <a href="<?= htmlspecialchars(url_path('/branches/' . $slug . '.php')) ?>">View Branch</a>
                            <a href="<?= htmlspecialchars(whatsapp_url('Hi NextGen Makers, I would like to check class schedule and trial slots at ' . $branch['name'] . '.')) ?>" target="_blank" rel="noopener">Check Slots</a>
                        </div>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="section contact-program-section">
        <div class="section-heading">
            <span class="eyebrow">Program Enquiries</span>
            <h2>Not sure which program to ask about?</h2>
            <p>Use this quick guide, or WhatsApp us with your child's age and preferred branch.</p>
        </div>
        <div class="contact-program-grid">
            <?php foreach ($programGuide as $program): ?>
                <article>
                    <span><?= htmlspecialchars($program['age']) ?></span>
                    <h3><?= htmlspecialchars($program['name']) ?></h3>
                    <p><?= htmlspecialchars($program['text']) ?></p>
                </article>
            <?php endforeach; ?>
        </div>
        <div class="contact-inline-cta">
            <strong>Need help choosing?</strong>
            <a class="btn btn-primary" href="<?= htmlspecialchars($generalWhatsapp) ?>" target="_blank" rel="noopener">Ask Program Question</a>
        </div>
    </section>

    <section class="section contact-collaboration-section">
        <div class="program-detail-split reverse">
            <div class="student-photo-placeholder portrait photo-fill program-suitable-photo" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/nextgen spark/photo_6079869040823748769_y.jpg')) ?>');">
                <span>School and CSR collaboration</span>
            </div>
            <div>
                <span class="eyebrow">Collaboration Enquiries</span>
                <h2>Contact us for schools, events or CSR programs.</h2>
                <p>Best for schools, kindergartens, NGOs, community organizations, CSR teams, universities, event organizers and enrichment partners.</p>
                <p>We can discuss robotics workshops, coding workshops, STEM activities, technology carnivals, student showcases and custom collaboration programs.</p>
                <a class="btn btn-primary" href="<?= htmlspecialchars($collaborationWhatsapp) ?>" target="_blank" rel="noopener">Discuss Collaboration</a>
            </div>
        </div>
    </section>

    <section class="section contact-note-section">
        <div class="program-key-message">
            <strong>Operating / Class Availability Note</strong>
            <p>Class schedules, trial class slots, program availability and branch arrangements may change depending on demand and current timetable. Please WhatsApp our team for the latest availability before visiting or booking.</p>
        </div>
    </section>

    <section class="section about-faq-section">
        <div class="section-heading">
            <span class="eyebrow">Contact FAQ</span>
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
                <span class="eyebrow">Ready To Start?</span>
                <h2>WhatsApp us to book a trial class.</h2>
                <p>Share your child's age, preferred branch and preferred schedule. Our team will help you check the suitable class and available slot.</p>
            </div>
            <a class="btn btn-dark" href="<?= htmlspecialchars($bookingWhatsapp) ?>" target="_blank" rel="noopener">Book Trial Class</a>
        </div>
    </section>
</main>

<script type="application/ld+json">
<?= json_encode([
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => 'ContactPage',
            'name' => 'Contact NextGen Makers',
            'description' => $pageDescription,
            'url' => $siteUrl . '/contact.php',
        ],
        [
            '@type' => 'EducationalOrganization',
            'name' => 'NextGen Makers',
            'url' => $siteUrl,
            'telephone' => $whatsappDisplay,
            'email' => $email,
            'department' => array_map(fn($branch) => [
                '@type' => 'LocalBusiness',
                'name' => 'NextGen Makers - ' . $branch['name'],
                'address' => $branch['address'],
                'areaServed' => $branch['nearby'],
            ], $branchPages),
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
