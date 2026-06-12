<?php
$pageTitle = 'Robotics, Coding & STEM Programs for Kids & Teens | NextGen Makers';
$pageDescription = 'Explore NextGen Makers programs for children and teenagers aged 4 to 18, including Little Maker, Junior Maker, Young Coder, Young Innovator, Senior Innovator, Senior Coder and NextGen Genius.';
include __DIR__ . '/includes/header.php';

$programComparison = [
    [
        'program' => 'Little Maker',
        'age' => '4-5',
        'level' => 'Beginner to Intermediate',
        'focus' => 'Play-based robotics, coding robot, LEGO WeDo',
        'image' => 'LITTLE MAKER/6274016526272760775.jpg',
    ],
    [
        'program' => 'Junior Maker',
        'age' => '6-9',
        'level' => 'Beginner to Intermediate',
        'focus' => 'Scratch, STEM, animation, games',
        'image' => 'junior-maker/6292029357119180673.jpg',
    ],
    [
        'program' => 'Young Coder',
        'age' => '10+',
        'level' => 'Intermediate to Advanced',
        'focus' => 'Arduino, electronics, robotics',
        'image' => 'YOUNG CODER/6289668976233530628.jpg',
    ],
    [
        'program' => 'Young Innovator',
        'age' => '13+',
        'level' => 'Intermediate to Advanced',
        'focus' => 'C++, Arduino, automation, prototypes',
        'image' => 'YOUNG INNOVATOR/6224231966908204835.jpg',
    ],
    [
        'program' => 'Senior Innovator',
        'age' => '15+',
        'level' => 'Intermediate to Advanced',
        'focus' => 'IoT, smart systems, automation',
        'image' => 'YOUNG INNOVATOR/6062345814774236444.jpg',
    ],
    [
        'program' => 'Senior Coder',
        'age' => '16+',
        'level' => 'Intermediate to Advanced',
        'focus' => 'Web, app and game development',
        'image' => 'YOUNG INNOVATOR/6057412559503474754 (1).jpg',
    ],
    [
        'program' => 'NextGen Genius',
        'age' => 'Special Program',
        'level' => 'Adaptive',
        'focus' => 'Robotics for children with special needs',
        'image' => null,
    ],
];
?>

<main>
    <section class="hero programs-hero">
        <div class="hero-content">
            <span class="eyebrow">Programs</span>
            <h1>Robotics, Coding & STEM Programs for Ages 4 to 18</h1>
            <p class="hero-lead">A complete learning pathway that grows with your child, from beginner robotics to advanced coding, Arduino, IoT and digital creation.</p>
            <p>NextGen Makers offers robotics class for kids, coding class for kids and project-based STEM learning for children and teenagers across different ages and readiness levels.</p>
            <div class="button-row">
                <a class="btn btn-primary" href="<?= htmlspecialchars(whatsapp_url()) ?>" target="_blank" rel="noopener">Book Trial Class</a>
                <a class="btn btn-secondary" href="#program-comparison">Compare Programs</a>
            </div>
        </div>
        <div class="hero-visual programs-hero-visual" aria-label="NextGen Makers program pathway">
            <div class="hero-photo-card hero-photo-main" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/LITTLE MAKER/6274016526272760775.jpg')) ?>');">
                <span>Beginner robotics</span>
            </div>
            <div class="hero-photo-card hero-photo-secondary" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/YOUNG CODER/6289668976233530628.jpg')) ?>');">
                <span>Advanced projects</span>
            </div>
        </div>
    </section>

    <section class="section programs-pathway-section">
        <div class="programs-pathway-layout">
            <div>
                <span class="eyebrow">Program Pathway</span>
                <h2>Find the right program for your child.</h2>
                <p>Every child starts at a different level. At NextGen Makers, our programs are designed according to age, readiness and learning stage.</p>
                <p>Children begin with play-based robotics, coding robots and STEM activities, then progress into Scratch, Arduino, C++ programming, IoT, automation, app development, web design and game development.</p>
                <p>Whether your child is exploring robotics and coding for the first time or ready for advanced technology projects, the pathway helps them keep learning step by step.</p>
            </div>
            <div class="program-pathway-ladder" aria-label="NextGen Makers learning pathway by age">
                <?php foreach ($programComparison as $index => $program): ?>
                    <article>
                        <span><?= str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT) ?></span>
                        <strong><?= htmlspecialchars($program['age']) ?></strong>
                        <p><?= htmlspecialchars($program['program']) ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="section program-comparison-section" id="program-comparison">
        <div class="section-heading">
            <span class="eyebrow">Program Comparison</span>
            <h2>Compare our robotics, coding & STEM programs.</h2>
            <p>Use this overview to understand the recommended age, learning level and main focus for each program.</p>
        </div>
        <div class="program-table-wrap">
            <table class="program-comparison-table">
                <thead>
                    <tr>
                        <th>Program</th>
                        <th>Age</th>
                        <th>Level</th>
                        <th>Main Focus</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($programComparison as $program): ?>
                        <tr>
                            <td><?= htmlspecialchars($program['program']) ?></td>
                            <td><?= htmlspecialchars($program['age']) ?></td>
                            <td><?= htmlspecialchars($program['level']) ?></td>
                            <td><?= htmlspecialchars($program['focus']) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </section>

    <section class="section program-cards-section">
        <div class="section-heading">
            <span class="eyebrow">All Programs</span>
            <h2>A pathway from early robotics to digital creation.</h2>
            <p>Explore each program and choose the best starting point based on your child's age, interest and readiness.</p>
        </div>
        <div class="program-overview-grid">
            <?php foreach ($programComparison as $index => $program): ?>
                <?php $programData = $programs[$index] ?? null; ?>
                <article class="<?= $program['image'] === null ? 'program-card-special' : '' ?>">
                    <?php if ($program['image'] !== null): ?>
                        <div class="program-overview-image photo-fill" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/' . $program['image'])) ?>');">
                            <span><?= htmlspecialchars($program['age']) ?></span>
                        </div>
                    <?php else: ?>
                        <div class="program-overview-image program-special-visual">
                            <span><?= htmlspecialchars($program['age']) ?></span>
                            <strong>NextGen Genius</strong>
                        </div>
                    <?php endif; ?>
                    <div class="program-overview-body">
                        <strong><?= htmlspecialchars($program['level']) ?></strong>
                        <h3><?= htmlspecialchars($program['program']) ?></h3>
                        <p><?= htmlspecialchars($program['focus']) ?></p>
                        <a href="<?= htmlspecialchars(url_path($programData['url'] ?? '/programs.php')) ?>">Learn More</a>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="section programs-trial-section">
        <div class="programs-trial-inner">
            <div>
                <span class="eyebrow">Trial Class</span>
                <h2>Not sure where your child should start?</h2>
                <p>Book a trial class and our team will help identify the suitable program level.</p>
                <div class="trial-detail-row">
                    <span>Trial Class Fee: <strong>RM99</strong></span>
                    <span>WhatsApp: <strong><?= htmlspecialchars($whatsappDisplay) ?></strong></span>
                </div>
            </div>
            <a class="btn btn-dark" href="<?= htmlspecialchars(whatsapp_url('Hi NextGen Makers, I would like to book a trial class and find the suitable program for my child.')) ?>" target="_blank" rel="noopener">Book Trial Class</a>
        </div>
    </section>
</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
