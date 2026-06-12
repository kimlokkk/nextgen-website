<?php
$pageTitle = 'NextGen Makers Branch Locations in Selangor | Robotics & Coding Classes';
$pageDescription = 'Find NextGen Makers Robotics Academy branches in Shah Alam, Bangi, Puncak Alam, Cyberjaya and Selayang. Check robotics, coding and STEM class availability by branch.';
include __DIR__ . '/includes/header.php';

$locationWhatsapp = whatsapp_url("Hi NextGen Makers, I would like to check the nearest branch and available class slots.\n\nChild's age:\nPreferred area:\nPreferred day/time:\n\nPlease share the available trial class slots. Thank you.");

$branchLocations = [
    [
        'name' => 'MTDC Shah Alam',
        'area' => 'Shah Alam',
        'address' => 'Universiti Teknologi MARA (UiTM) Shah Alam, UiTM-MTDC Technopreneur Centre, 40450 Shah Alam, Selangor.',
        'nearby' => 'UiTM Shah Alam, Seksyen 7, Seksyen 13, Glenmarie, Subang, Klang',
        'image' => 'TRIAL CLASS/6233119207726369610.jpg',
        'url' => '/branches/mtdc-shah-alam.php',
    ],
    [
        'name' => 'Bandar Puteri Bangi',
        'area' => 'Bangi / Kajang',
        'address' => '22-1, Jln Puteri 2A/3, Bandar Bukit Mahkota, 43000 Kajang, Selangor.',
        'nearby' => 'Bangi, Kajang, Bandar Bukit Mahkota, Nilai, Semenyih',
        'image' => 'LITTLE MAKER/6127599252902364638.jpg',
        'url' => '/branches/bandar-puteri-bangi.php',
    ],
    [
        'name' => 'Puncak Alam',
        'area' => 'Puncak Alam',
        'address' => 'Pusat Perdagangan Hillpark, 2-1, Jln Hillpark 11/7, Bandar Hillpark, 42300 Puncak Alam, Selangor.',
        'nearby' => 'Puncak Alam, Bandar Hillpark, Alam Jaya, Kuala Selangor, Meru',
        'image' => 'TRIAL CLASS/6213062741246200287.jpg',
        'url' => '/branches/puncak-alam.php',
    ],
    [
        'name' => 'Seksyen 7 Shah Alam',
        'area' => 'Shah Alam',
        'address' => '27B, Jalan Plumbum P 7/P, Seksyen 7, 40000 Shah Alam, Selangor.',
        'nearby' => 'Seksyen 7, UiTM Shah Alam, i-City, Padang Jawa, Klang',
        'image' => 'YOUNG CODER/6332290036950747253.jpg',
        'url' => '/branches/seksyen-7-shah-alam.php',
    ],
    [
        'name' => 'Seksyen 13 Shah Alam',
        'area' => 'Shah Alam',
        'address' => '1-07, Metia Residence, 5, Persiaran Sukan, Seksyen 13, 40100 Shah Alam, Selangor.',
        'nearby' => 'Seksyen 13, Stadium Shah Alam, Glenmarie, Subang, Kota Kemuning',
        'image' => 'junior-maker/6332120956976958538.jpg',
        'url' => '/branches/seksyen-13-shah-alam.php',
    ],
    [
        'name' => 'Cyberjaya',
        'area' => 'Cyberjaya',
        'address' => '4807-1-17, 2, Persiaran Flora, Cyberjaya, 63000 Cyberjaya, Selangor.',
        'nearby' => 'Cyberjaya, Putrajaya, Dengkil, Puchong, Seri Kembangan',
        'image' => 'YOUNG CODER/6289668976233530628.jpg',
        'url' => '/branches/cyberjaya.php',
    ],
    [
        'name' => 'Bandar Baru Selayang',
        'area' => 'Selayang',
        'address' => 'Unit SH-16-2, Selayang 18, Selayang, Selangor.',
        'nearby' => 'Selayang, Batu Caves, Gombak, Kepong, Rawang',
        'image' => 'TRIAL CLASS/6271273459509824648.jpg',
        'url' => '/branches/bandar-baru-selayang.php',
    ],
];

$areaGuides = [
    ['area' => 'Shah Alam', 'text' => 'Choose from MTDC Shah Alam, Seksyen 7 Shah Alam or Seksyen 13 Shah Alam depending on your preferred schedule and route.'],
    ['area' => 'Bangi / Kajang', 'text' => 'Bandar Puteri Bangi is suitable for families around Bangi, Kajang, Bandar Bukit Mahkota, Nilai and Semenyih.'],
    ['area' => 'Puncak Alam', 'text' => 'Puncak Alam branch supports families around Bandar Hillpark, Alam Jaya, Meru and Kuala Selangor.'],
    ['area' => 'Cyberjaya', 'text' => 'Cyberjaya branch is convenient for Cyberjaya, Putrajaya, Dengkil, Puchong and Seri Kembangan families.'],
    ['area' => 'Selayang', 'text' => 'Bandar Baru Selayang branch serves Selayang, Batu Caves, Gombak, Kepong and Rawang communities.'],
];

$bookingSteps = [
    ['title' => 'Choose a Branch', 'text' => 'Pick the most convenient NextGen Makers branch for your family.'],
    ['title' => 'WhatsApp Our Team', 'text' => 'Share your child\'s age, preferred branch and preferred day or time.'],
    ['title' => 'Check Available Slots', 'text' => 'Our team will confirm class schedules, trial class availability and suitable program options.'],
    ['title' => 'Attend Trial Class', 'text' => 'Your child can try an age-appropriate robotics, coding or STEM activity before enrolling.'],
];

$programImages = [
    'Little Maker' => 'LITTLE MAKER/6274016526272760775.jpg',
    'Junior Maker' => 'junior-maker/6292029357119180673.jpg',
    'Young Coder' => 'YOUNG CODER/6289668976233530628.jpg',
    'Young Innovator' => 'YOUNG INNOVATOR/6224231966908204835.jpg',
    'Senior Innovator' => 'YOUNG INNOVATOR/6062345814774236444.jpg',
    'Senior Coder' => 'YOUNG INNOVATOR/6057412559503474754 (1).jpg',
    'NextGen Genius' => null,
];

$faqs = [
    ['question' => 'Where are NextGen Makers branches located?', 'answer' => 'NextGen Makers has active branches in Shah Alam, Bangi, Puncak Alam, Cyberjaya and Selayang.'],
    ['question' => 'Which branch should I choose?', 'answer' => 'Choose the branch that is easiest for your weekly travel. You can also contact our team on WhatsApp to compare available class slots.'],
    ['question' => 'Are all programs available at every branch?', 'answer' => 'Program availability may depend on branch schedule, class level and slot availability. Parents should check with the team before booking.'],
    ['question' => 'Can I book a trial class at my preferred branch?', 'answer' => 'Yes. Trial classes are available at active branches, subject to schedule and slot availability.'],
    ['question' => 'Do branches offer weekday and weekend classes?', 'answer' => 'Class slots may include weekday and weekend options, depending on the selected branch schedule.'],
];

$schemaBranches = array_map(function ($branch) use ($siteName, $siteUrl) {
    return [
        '@type' => 'LocalBusiness',
        'name' => $siteName . ' - ' . $branch['name'],
        'address' => $branch['address'],
        'areaServed' => $branch['nearby'],
        'url' => $siteUrl . '/locations.php',
    ];
}, $branchLocations);

$schema = [
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => 'EducationalOrganization',
            'name' => $siteName,
            'url' => $siteUrl,
            'telephone' => $whatsappDisplay,
            'email' => $email,
            'department' => $schemaBranches,
        ],
        [
            '@type' => 'FAQPage',
            'mainEntity' => array_map(function ($faq) {
                return [
                    '@type' => 'Question',
                    'name' => $faq['question'],
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => $faq['answer'],
                    ],
                ];
            }, $faqs),
        ],
    ],
];
?>

<main>
    <section class="hero locations-hero">
        <div class="hero-content">
            <span class="eyebrow">NextGen Makers Locations</span>
            <h1>Find a Robotics, Coding & STEM Class Near You</h1>
            <p class="hero-lead">NextGen Makers Robotics Academy has active branches across Shah Alam, Bangi, Puncak Alam, Cyberjaya and Selayang.</p>
            <p>Choose the branch that is most convenient for your family, then contact our team to check the latest class schedule, trial class slots and suitable program level for your child.</p>
            <div class="button-row">
                <a class="btn btn-primary" href="<?= htmlspecialchars($locationWhatsapp) ?>" target="_blank" rel="noopener">Check Nearest Branch</a>
                <a class="btn btn-secondary" href="#branch-list">View Branches</a>
            </div>
            <div class="program-detail-badges">
                <span>7 Active Branches</span>
                <span>Ages 4-18</span>
                <span>Trial Class RM99</span>
                <span>Robotics | Coding | STEM</span>
            </div>
        </div>
        <div class="hero-visual" aria-label="NextGen Makers branch and classroom highlights">
            <div class="hero-photo-card hero-photo-main" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/TRIAL CLASS/6233119207726369610.jpg')) ?>');">
                <span>NextGen Makers classroom</span>
            </div>
            <div class="hero-photo-card hero-photo-secondary" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/LITTLE MAKER/6127599252902364638.jpg')) ?>');">
                <span>Hands-on learning session</span>
            </div>
            <div class="location-count-card">
                <span>Active Branches</span>
                <strong>7</strong>
                <small>Across Selangor</small>
            </div>
        </div>
    </section>

    <section class="section locations-directory-section" id="branch-list">
        <div class="section-heading">
            <span class="eyebrow">Branch Directory</span>
            <h2>Choose your preferred NextGen Makers branch.</h2>
            <p>Classes and trial slots are subject to branch schedule and availability. Contact our team to check the latest available slots.</p>
        </div>
        <div class="location-card-grid">
            <?php foreach ($branchLocations as $index => $branch): ?>
                <article>
                    <div class="location-card-photo photo-fill" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/' . $branch['image'])) ?>');">
                        <span><?= str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT) ?></span>
                    </div>
                    <div class="location-card-body">
                        <span><?= htmlspecialchars($branch['area']) ?></span>
                        <h3><?= htmlspecialchars($branch['name']) ?></h3>
                        <p><?= htmlspecialchars($branch['address']) ?></p>
                        <small>Nearby: <?= htmlspecialchars($branch['nearby']) ?></small>
                        <div class="location-card-actions">
                            <a href="<?= htmlspecialchars(url_path($branch['url'])) ?>">View Branch Page</a>
                            <a href="<?= htmlspecialchars(whatsapp_url('Hi NextGen Makers, I would like to check class schedule and trial slots at ' . $branch['name'] . '.')) ?>" target="_blank" rel="noopener">Check Slots</a>
                        </div>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="section locations-area-section">
        <div class="locations-layout">
            <div class="section-heading">
                <span class="eyebrow">Area Guide</span>
                <h2>Not sure which branch is nearest?</h2>
                <p>Use this quick area guide to shortlist a branch, then WhatsApp our team to confirm current class availability.</p>
                <a class="btn btn-primary" href="<?= htmlspecialchars($locationWhatsapp) ?>" target="_blank" rel="noopener">Ask for Branch Recommendation</a>
            </div>
            <div class="student-photo-placeholder locations-photo photo-fill" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/TRIAL CLASS/6213062741246200287.jpg')) ?>');">
                <span>Guided robotics class</span>
            </div>
        </div>
        <div class="area-guide-grid">
            <?php foreach ($areaGuides as $item): ?>
                <article>
                    <strong><?= htmlspecialchars($item['area']) ?></strong>
                    <p><?= htmlspecialchars($item['text']) ?></p>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="location-flow-rebuild-section">
        <div class="location-flow-inner">
            <div class="location-flow-heading">
                <span class="eyebrow">Booking Flow</span>
                <h2>How to check class availability.</h2>
                <p>Our team will help you check the latest schedule based on your preferred branch, your child's age and the suitable program level.</p>
            </div>
            <div class="location-flow-cards">
                <?php foreach ($bookingSteps as $index => $step): ?>
                    <article>
                        <span><?= str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT) ?></span>
                        <h3><?= htmlspecialchars($step['title']) ?></h3>
                        <p><?= htmlspecialchars($step['text']) ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="section locations-program-section">
        <div class="section-heading">
            <span class="eyebrow">Programs by Branch</span>
            <h2>Robotics, coding and STEM pathways available across branches.</h2>
            <p>Program availability may vary by branch schedule. Parents can check available classes through WhatsApp.</p>
        </div>
        <div class="program-overview-grid">
            <?php foreach ($programs as $program): ?>
                <article>
                    <?php if ($programImages[$program['name']] !== null): ?>
                        <div class="program-overview-image photo-fill" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/' . $programImages[$program['name']])) ?>');">
                            <span><?= htmlspecialchars($program['age']) ?></span>
                        </div>
                    <?php else: ?>
                        <div class="program-overview-image program-special-visual">
                            <span><?= htmlspecialchars($program['age']) ?></span>
                            <strong>NextGen Genius</strong>
                        </div>
                    <?php endif; ?>
                    <div class="program-overview-body">
                        <strong><?= htmlspecialchars($program['tag']) ?></strong>
                        <h3><?= htmlspecialchars($program['name']) ?></h3>
                        <p><?= htmlspecialchars($program['focus']) ?></p>
                        <a href="<?= htmlspecialchars(url_path($program['url'])) ?>">View Program</a>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="section about-faq-section">
        <div class="section-heading">
            <span class="eyebrow">Locations FAQ</span>
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
                <span class="eyebrow">Ready to Visit?</span>
                <h2>Check the nearest branch and book a trial class.</h2>
                <p>Tell us your child's age, preferred area and preferred class day. Our team will help you find a suitable branch and available trial class slot.</p>
                <div class="program-detail-badges">
                    <span>Shah Alam</span>
                    <span>Bangi</span>
                    <span>Puncak Alam</span>
                    <span>Cyberjaya</span>
                    <span>Selayang</span>
                </div>
            </div>
            <a class="btn btn-dark" href="<?= htmlspecialchars($locationWhatsapp) ?>" target="_blank" rel="noopener">WhatsApp NextGen Makers</a>
        </div>
    </section>
</main>

<script type="application/ld+json">
<?= json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) ?>
</script>

<?php include __DIR__ . '/includes/footer.php'; ?>
