<?php
require_once __DIR__ . '/site-data.php';
require __DIR__ . '/branch-data.php';

$branchSlug = $branchSlug ?? '';
$branch = $branchPages[$branchSlug] ?? null;

if (!$branch) {
    http_response_code(404);
    $pageTitle = 'Branch Not Found | NextGen Makers';
    $pageDescription = 'The requested NextGen Makers branch page could not be found.';
    include __DIR__ . '/header.php';
    ?>
    <main>
        <section class="section">
            <div class="section-heading">
                <span class="eyebrow">Branch Not Found</span>
                <h1>We could not find this branch page.</h1>
                <p>Please return to the locations page to choose an active NextGen Makers branch.</p>
                <a class="btn btn-primary" href="<?= htmlspecialchars(url_path('/locations.php')) ?>">View Locations</a>
            </div>
        </section>
    </main>
    <?php
    include __DIR__ . '/footer.php';
    return;
}

$branchWhatsapp = whatsapp_url("Hi NextGen Makers, I would like to check class schedule and trial slots at {$branch['name']}.\n\nChild's age:\nPreferred day/time:\n\nPlease share the available trial class slots. Thank you.");
$mapUrl = 'https://www.google.com/maps/search/?api=1&query=' . rawurlencode($branch['mapQuery']);
$pageTitle = $branch['headline'] . ' | NextGen Makers';
$pageDescription = 'Find ' . $branch['headline'] . '. Check trial class slots, programs and class availability for families around ' . $branch['nearby'] . '.';
include __DIR__ . '/header.php';

$branchHighlights = [
    ['title' => 'Age 4 to 18', 'text' => 'Children and teenagers can start from beginner robotics and progress into coding, Arduino, IoT and digital product projects.'],
    ['title' => 'Hands-On Learning', 'text' => 'Students learn by building, coding, testing and improving real projects in a guided class setting.'],
    ['title' => 'Trial Class Available', 'text' => 'Parents can book a trial class first to understand the suitable starting level for their child.'],
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

$branchFaqs = [
    ['question' => 'Where is the ' . $branch['name'] . ' branch?', 'answer' => 'The branch address is ' . $branch['address']],
    ['question' => 'Who is this branch suitable for?', 'answer' => 'This branch is suitable for families around ' . $branch['nearby'] . '.'],
    ['question' => 'Can I book a trial class at this branch?', 'answer' => 'Yes. Trial class slots are subject to branch schedule and availability. Parents can check available slots through WhatsApp.'],
    ['question' => 'Are all NextGen Makers programs available here?', 'answer' => 'Program availability may depend on branch schedule, class level and slot availability. Contact our team to confirm the latest schedule.'],
];

$schema = [
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => 'LocalBusiness',
            'name' => $siteName . ' - ' . $branch['name'],
            'url' => $siteUrl . '/branches/' . $branchSlug . '.php',
            'address' => $branch['address'],
            'areaServed' => $branch['nearby'],
            'telephone' => $whatsappDisplay,
            'email' => $email,
            'parentOrganization' => [
                '@type' => 'EducationalOrganization',
                'name' => $siteName,
                'url' => $siteUrl,
            ],
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
            }, $branchFaqs),
        ],
    ],
];
?>

<main>
    <section class="hero branch-hero">
        <div class="hero-content">
            <span class="eyebrow"><?= htmlspecialchars($branch['area']) ?> Branch</span>
            <h1><?= htmlspecialchars($branch['headline']) ?></h1>
            <p class="hero-lead">NextGen Makers <?= htmlspecialchars($branch['name']) ?> offers robotics, coding and STEM classes for children and teenagers aged 4 to 18.</p>
            <p>This branch is convenient for families around <?= htmlspecialchars($branch['nearby']) ?>. Contact our team to check the latest class schedule, trial class slots and suitable program level.</p>
            <div class="button-row">
                <a class="btn btn-primary" href="<?= htmlspecialchars($branchWhatsapp) ?>" target="_blank" rel="noopener">Check Class Slots</a>
                <a class="btn btn-secondary" href="<?= htmlspecialchars($mapUrl) ?>" target="_blank" rel="noopener">Open Map</a>
            </div>
            <div class="program-detail-badges">
                <span><?= htmlspecialchars($branch['area']) ?></span>
                <span>Ages 4-18</span>
                <span>Trial Class RM99</span>
                <span>Robotics | Coding | STEM</span>
            </div>
        </div>
        <div class="hero-visual" aria-label="<?= htmlspecialchars($branch['name']) ?> class highlights">
            <div class="hero-photo-card hero-photo-main" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/' . $branch['image'])) ?>');">
                <span><?= htmlspecialchars($branch['name']) ?> class</span>
            </div>
            <div class="hero-photo-card hero-photo-secondary" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/' . $branch['secondaryImage'])) ?>');">
                <span>Hands-on learning</span>
            </div>
            <div class="location-count-card branch-area-card">
                <span>Branch Area</span>
                <strong><?= htmlspecialchars($branch['area']) ?></strong>
                <small>Check schedule by WhatsApp</small>
            </div>
        </div>
    </section>

    <section class="section branch-detail-section">
        <div class="program-detail-split">
            <div>
                <span class="eyebrow">Branch Details</span>
                <h2>Visit NextGen Makers <?= htmlspecialchars($branch['name']) ?>.</h2>
                <p><?= htmlspecialchars($branch['headline']) ?> is suitable for parents looking for structured robotics, coding and STEM enrichment near <?= htmlspecialchars($branch['nearby']) ?>.</p>
                <div class="branch-address-card">
                    <strong>Address</strong>
                    <p><?= htmlspecialchars($branch['address']) ?></p>
                    <a href="<?= htmlspecialchars($mapUrl) ?>" target="_blank" rel="noopener">Open Google Map</a>
                </div>
            </div>
            <div class="student-photo-placeholder portrait photo-fill branch-detail-photo" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/' . $branch['secondaryImage'])) ?>');">
                <span>Branch learning session</span>
            </div>
        </div>
    </section>

    <section class="section branch-highlight-section">
        <div class="section-heading">
            <span class="eyebrow">Why This Branch</span>
            <h2>What your child can expect.</h2>
            <p>Classes are designed to be hands-on, structured and suitable for the child's age and readiness.</p>
        </div>
        <div class="branch-highlight-grid">
            <?php foreach ($branchHighlights as $index => $item): ?>
                <article>
                    <span><?= str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT) ?></span>
                    <h3><?= htmlspecialchars($item['title']) ?></h3>
                    <p><?= htmlspecialchars($item['text']) ?></p>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="section locations-program-section">
        <div class="section-heading">
            <span class="eyebrow">Programs</span>
            <h2>Programs available through NextGen Makers.</h2>
            <p>Program availability at <?= htmlspecialchars($branch['name']) ?> may depend on branch schedule, student level and slot availability.</p>
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

    <section class="section branch-seo-section">
        <div class="program-detail-split">
            <div>
                <span class="eyebrow">Nearby Areas</span>
                <h2>For families around <?= htmlspecialchars($branch['area']) ?>.</h2>
                <p>Parents searching for <?= htmlspecialchars($branch['searchTerms']) ?> can contact NextGen Makers to check the latest class availability at <?= htmlspecialchars($branch['name']) ?>.</p>
                <p>Our team can help recommend a suitable robotics, coding or STEM starting point based on your child's age, confidence and learning readiness.</p>
            </div>
            <aside class="program-highlight-card">
                <strong>Not sure where to start?</strong>
                <p>Book a trial class first. Your child can try a hands-on activity, and our team can guide you on the suitable program pathway.</p>
                <a class="btn btn-primary" href="<?= htmlspecialchars($branchWhatsapp) ?>" target="_blank" rel="noopener">Book Trial Class</a>
            </aside>
        </div>
    </section>

    <section class="section about-faq-section">
        <div class="section-heading">
            <span class="eyebrow">Branch FAQ</span>
            <h2>Questions parents often ask.</h2>
        </div>
        <div class="faq-list">
            <?php foreach ($branchFaqs as $faq): ?>
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
                <span class="eyebrow"><?= htmlspecialchars($branch['name']) ?></span>
                <h2>Check class slots at <?= htmlspecialchars($branch['name']) ?>.</h2>
                <p>Share your child's age, preferred day and preferred time. Our team will check available trial class slots and suitable programs.</p>
            </div>
            <a class="btn btn-dark" href="<?= htmlspecialchars($branchWhatsapp) ?>" target="_blank" rel="noopener">WhatsApp This Branch</a>
        </div>
    </section>
</main>

<script type="application/ld+json">
<?= json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) ?>
</script>

<?php include __DIR__ . '/footer.php'; ?>
