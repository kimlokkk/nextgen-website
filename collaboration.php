<?php
$pageTitle = 'Robotics, Coding & STEM Collaboration Programs | NextGen Makers Malaysia';
$pageDescription = 'Collaborate with NextGen Makers for robotics workshops, coding workshops, STEM activities, school enrichment programs, CSR programs, student showcases and future skills events in Malaysia.';
include __DIR__ . '/includes/header.php';

$collaborationWhatsapp = whatsapp_url("Hi NextGen Makers, I would like to discuss a collaboration.\n\nOrganization name:\nCollaboration objective:\nTarget participants:\nPreferred date/location:\n\nPlease share more details. Thank you.");

$partners = [
    'Schools',
    'Kindergartens & Preschools',
    'Universities & Colleges',
    'NGOs & Community Organizations',
    'Corporate CSR Teams',
    'Education Event Organizers',
    'Tuition & Enrichment Centres',
];

$opportunities = [
    ['title' => 'Robotics Workshops', 'text' => 'Hands-on robotics activities where students build, test and understand how robots move.'],
    ['title' => 'Coding Workshops', 'text' => 'Beginner-friendly coding sessions using visual coding, Scratch, creative coding or project-based tasks.'],
    ['title' => 'STEM Activities', 'text' => 'Practical STEM challenges that encourage curiosity, teamwork and problem-solving.'],
    ['title' => 'School Enrichment Programs', 'text' => 'Structured robotics, coding or STEM modules that support school enrichment and co-curricular learning.'],
    ['title' => 'Holiday Programs', 'text' => 'Short programs or camps for school breaks, community events or enrichment seasons.'],
    ['title' => 'Student Competitions', 'text' => 'Robotics or coding challenge formats that help students apply skills in a guided event setting.'],
    ['title' => 'Technology Carnivals', 'text' => 'Interactive booths, demonstrations and mini activities for school or community technology events.'],
    ['title' => 'NextGen Spark-Style Showcase Events', 'text' => 'Student project showcases where learners present robotics, coding, STEM or digital projects.'],
    ['title' => 'Special Needs STEM Enrichment', 'text' => 'Adaptive robotics and STEM activities designed for suitable special needs communities.'],
    ['title' => 'Facilitator or Internship Programs', 'text' => 'Opportunities for universities or institutions to explore STEM facilitation exposure.'],
];

$differentiators = [
    ['title' => 'Structured Modules', 'text' => 'Programs are planned with clear learning objectives, age suitability and activity flow.'],
    ['title' => 'Hands-On Project-Based Learning', 'text' => 'Students learn by building, coding, testing and explaining real activities.'],
    ['title' => 'Complete Age Pathway', 'text' => 'Content can support preschool children, primary students, teenagers and advanced learners.'],
    ['title' => 'Child-Friendly Facilitation', 'text' => 'Activities are guided in a supportive way so students can participate with confidence.'],
    ['title' => 'Flexible Program Format', 'text' => 'Collaborations can be built as workshops, booths, camps, showcases or multi-session programs.'],
    ['title' => 'Future-Ready Skills Focus', 'text' => 'Programs encourage creativity, critical thinking, communication, collaboration and innovation.'],
];

$programAreas = [
    'Early Robotics & Coding',
    'Scratch & Creative Coding',
    'Arduino & Electronics',
    'C++ & Prototype Development',
    'IoT & Smart Systems',
    'Web, App & Game Development',
    'Adaptive Robotics for Special Needs',
];

$formats = [
    ['title' => 'One-Day Workshop', 'text' => 'A focused robotics, coding or STEM session for schools, organizations or community groups.'],
    ['title' => 'Multi-Session Program', 'text' => 'A structured learning series across several weeks or sessions.'],
    ['title' => 'STEM Carnival Booth', 'text' => 'Interactive booth activities for open days, carnivals, exhibitions or education events.'],
    ['title' => 'Robotics or Coding Competition', 'text' => 'Challenge-based event formats where students solve tasks and present outcomes.'],
    ['title' => 'Student Showcase', 'text' => 'A NextGen Spark-style showcase where students present projects to parents, teachers or communities.'],
    ['title' => 'Custom Collaboration Program', 'text' => 'A tailored program based on your objective, audience, timeline, budget and venue.'],
];

$beneficiaries = [
    'Preschool Children',
    'Primary School Students',
    'Secondary School Students',
    'Special Needs Children',
    'Youth Communities',
    'Schools and Institutions',
];

$outcomes = [
    'Robotics Exposure',
    'Coding Logic',
    'STEM Thinking',
    'Problem-Solving',
    'Creativity',
    'Teamwork',
    'Communication',
    'Innovation Mindset',
];

$ideas = [
    'School Robotics Day',
    'Coding for Beginners Workshop',
    'STEM Challenge Camp',
    'Arduino Project Bootcamp',
    'Young Innovators Showcase',
    'CSR Future Skills Program',
    'Special Needs Robotics Enrichment',
    'Holiday Robotics Program',
];

$process = [
    ['title' => 'Share Your Objective', 'text' => 'Tell us the purpose of the collaboration and what outcome you hope to create.'],
    ['title' => 'Identify Target Participants', 'text' => 'Share the participant age group, number of students, learning level and special requirements.'],
    ['title' => 'Choose Program Format', 'text' => 'We discuss whether a workshop, booth, program series, showcase or custom format fits best.'],
    ['title' => 'Plan the Content', 'text' => 'NextGen Makers recommends suitable activities, modules and project flow.'],
    ['title' => 'Confirm Date, Venue and Logistics', 'text' => 'We align schedule, venue needs, materials, manpower and program details.'],
    ['title' => 'Run the Program', 'text' => 'Our team facilitates the agreed robotics, coding or STEM collaboration session.'],
    ['title' => 'Review and Follow-Up', 'text' => 'We review outcomes and discuss possible next steps or future collaboration.'],
];

$checklist = [
    'Organization name',
    'Collaboration objective',
    'Target participant age group',
    'Estimated number of participants',
    'Preferred date or month',
    'Preferred venue or location',
    'Program format interest',
    'Budget range if available',
    'Any special requirements',
];

$faqs = [
    ['question' => 'What type of collaboration does NextGen Makers offer?', 'answer' => 'NextGen Makers offers robotics workshops, coding workshops, STEM activities, school enrichment programs, holiday programs, student showcases, competition formats, CSR programs and custom collaboration programs.'],
    ['question' => 'Can NextGen Makers run a robotics workshop at our school?', 'answer' => 'Yes. We can discuss a suitable robotics, coding or STEM workshop based on student age, number of participants, venue and learning objective.'],
    ['question' => 'Do you collaborate with NGOs or CSR teams?', 'answer' => 'Yes. We can collaborate with NGOs, community organizations and corporate CSR teams for future skills, STEM exposure and educational outreach programs.'],
    ['question' => 'What age group can join collaboration programs?', 'answer' => 'Programs can be planned for preschool children, primary school students, secondary school students, youth communities and suitable special needs groups.'],
    ['question' => 'Can the program be customized?', 'answer' => 'Yes. Program content, format, duration and project level can be customized based on objective, audience, schedule and resources.'],
    ['question' => 'Can NextGen Makers organize a STEM event or competition?', 'answer' => 'Yes. We can discuss STEM carnival booths, robotics challenges, coding competitions, project showcases and school technology events.'],
    ['question' => 'Can you provide certificates?', 'answer' => 'Certificates may be discussed depending on the collaboration format, participant group and program arrangement.'],
    ['question' => 'Can you support special needs communities?', 'answer' => 'Yes. NextGen Makers has adaptive robotics and STEM learning experience through NextGen Genius. Suitability depends on participant needs and program goals.'],
    ['question' => 'How do we start a collaboration discussion?', 'answer' => 'Contact NextGen Makers through WhatsApp or email with your objective, participant details, preferred date, location and expected program format.'],
];
?>

<main>
    <section class="hero collaboration-hero">
        <div class="hero-content">
            <span class="eyebrow">Collaboration</span>
            <h1>Robotics, Coding & STEM Collaboration Programs</h1>
            <p class="hero-lead">Collaborate with NextGen Makers to bring hands-on robotics, coding and STEM experiences to schools, organizations and communities.</p>
            <p>We work with education partners, NGOs, CSR teams and event organizers to create meaningful future skills programs for children and teenagers.</p>
            <div class="button-row">
                <a class="btn btn-primary" href="<?= htmlspecialchars($collaborationWhatsapp) ?>" target="_blank" rel="noopener">Discuss Collaboration</a>
                <a class="btn btn-secondary" href="#collaboration-formats">View Formats</a>
            </div>
            <div class="program-detail-badges">
                <span>Schools</span>
                <span>CSR Programs</span>
                <span>STEM Events</span>
                <span>Workshops</span>
                <span>Showcases</span>
            </div>
        </div>
        <div class="hero-visual collaboration-hero-visual" aria-label="NextGen Makers collaboration programs">
            <div class="hero-photo-card hero-photo-main" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/nextgen spark/photo_6079869040823748759_y.jpg')) ?>');">
                <span>STEM collaboration program</span>
            </div>
            <div class="hero-photo-card hero-photo-secondary" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/nextgen spark/photo_6079869040823748911_y.jpg')) ?>');">
                <span>Guided robotics workshop</span>
            </div>
        </div>
    </section>

    <section class="section collaboration-overview-section">
        <div class="program-detail-split">
            <div>
                <span class="eyebrow">Collaboration Overview</span>
                <h2>Bring practical technology learning to your audience.</h2>
                <p>NextGen Makers collaboration programs introduce students to robotics, coding, STEM thinking and future-ready skills through structured hands-on learning.</p>
                <p>Programs can be designed for schools, community groups, education events, CSR initiatives, enrichment centres and institutions that want engaging technology exposure.</p>
            </div>
            <aside class="collaboration-highlight-box">
                <span>Highlight</span>
                <strong>Hands-on learning that students can see, build and explain.</strong>
                <p>We help partners turn robotics, coding and STEM into practical experiences, not just talks or demonstrations.</p>
            </aside>
        </div>
    </section>

    <section class="section collaboration-partners-section">
        <div class="section-heading">
            <span class="eyebrow">Suitable Partners</span>
            <h2>Who can collaborate with us?</h2>
            <p>We welcome collaborations with education, community and corporate partners who want to create meaningful STEM learning exposure.</p>
        </div>
        <div class="collaboration-partner-grid">
            <?php foreach ($partners as $index => $partner): ?>
                <article>
                    <span><?= str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT) ?></span>
                    <strong><?= htmlspecialchars($partner) ?></strong>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="section collaboration-opportunities-section">
        <div class="section-heading">
            <span class="eyebrow">Collaboration Opportunities</span>
            <h2>Ways we can work together.</h2>
            <p>Collaboration can be structured as workshops, programs, events, booths, showcases or custom initiatives.</p>
        </div>
        <div class="collaboration-opportunity-grid">
            <?php foreach ($opportunities as $index => $item): ?>
                <article>
                    <span><?= str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT) ?></span>
                    <h3><?= htmlspecialchars($item['title']) ?></h3>
                    <p><?= htmlspecialchars($item['text']) ?></p>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="section collaboration-why-section">
        <div class="section-heading">
            <span class="eyebrow">Why NextGen Makers?</span>
            <h2>Structured, practical and child-friendly STEM learning.</h2>
            <p>Our programs are designed to help students learn by doing, building, testing and presenting their ideas.</p>
        </div>
        <div class="program-feature-grid">
            <?php foreach ($differentiators as $index => $item): ?>
                <article>
                    <span><?= str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT) ?></span>
                    <h3><?= htmlspecialchars($item['title']) ?></h3>
                    <p><?= htmlspecialchars($item['text']) ?></p>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="section collaboration-program-section">
        <div class="program-detail-split reverse">
            <div class="student-photo-placeholder portrait photo-fill program-suitable-photo" style="--photo: url('<?= htmlspecialchars(url_path('/assets/images/nextgen spark/photo_6082120840637432540_y.jpg')) ?>');">
                <span>Hands-on STEM program</span>
            </div>
            <div>
                <span class="eyebrow">Program Areas</span>
                <h2>Program areas we can offer.</h2>
                <p>Depending on participant age and program objective, NextGen Makers can support different robotics, coding and technology learning areas.</p>
                <div class="program-chip-grid">
                    <?php foreach ($programAreas as $area): ?>
                        <span><?= htmlspecialchars($area) ?></span>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="section collaboration-format-section" id="collaboration-formats">
        <div class="section-heading">
            <span class="eyebrow">Format Options</span>
            <h2>Choose a format that fits your goal.</h2>
            <p>We can recommend a format based on timeline, participant size, venue, budget and desired learning outcome.</p>
        </div>
        <div class="collaboration-format-grid">
            <?php foreach ($formats as $index => $item): ?>
                <article>
                    <span>Format <?= $index + 1 ?></span>
                    <h3><?= htmlspecialchars($item['title']) ?></h3>
                    <p><?= htmlspecialchars($item['text']) ?></p>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="section collaboration-beneficiary-section">
        <div class="section-heading">
            <span class="eyebrow">Who Can Benefit?</span>
            <h2>Programs can be planned for different learning groups.</h2>
        </div>
        <div class="spark-future-grid collaboration-beneficiary-grid">
            <?php foreach ($beneficiaries as $item): ?>
                <article><?= htmlspecialchars($item) ?></article>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="section collaboration-outcomes-section">
        <div class="section-heading">
            <span class="eyebrow">Student Outcomes</span>
            <h2>What students may gain.</h2>
            <p>Collaboration programs can help students develop early exposure, practical skills and future-ready confidence.</p>
        </div>
        <div class="spark-skill-grid">
            <?php foreach ($outcomes as $index => $item): ?>
                <article>
                    <span><?= str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT) ?></span>
                    <strong><?= htmlspecialchars($item) ?></strong>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="section collaboration-ideas-section">
        <div class="section-heading">
            <span class="eyebrow">Example Ideas</span>
            <h2>Collaboration ideas we can explore.</h2>
        </div>
        <div class="collaboration-idea-grid">
            <?php foreach ($ideas as $idea): ?>
                <article><?= htmlspecialchars($idea) ?></article>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="section collaboration-process-section">
        <div class="section-heading">
            <span class="eyebrow">Process Flow</span>
            <h2>How collaboration works.</h2>
            <p>Start with your objective. We will help shape the suitable program structure and next steps.</p>
        </div>
        <div class="program-flow">
            <?php foreach ($process as $index => $step): ?>
                <article>
                    <span><?= str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT) ?></span>
                    <h3><?= htmlspecialchars($step['title']) ?></h3>
                    <p><?= htmlspecialchars($step['text']) ?></p>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="section collaboration-info-section">
        <div class="program-detail-split">
            <div>
                <span class="eyebrow">Information Checklist</span>
                <h2>What to share with us.</h2>
                <p>These details help our team recommend a practical collaboration format and estimate the suitable scope.</p>
                <div class="program-chip-grid">
                    <?php foreach ($checklist as $item): ?>
                        <span><?= htmlspecialchars($item) ?></span>
                    <?php endforeach; ?>
                </div>
            </div>
            <aside class="collaboration-message-card">
                <span>Message Template</span>
                <p>Hi NextGen Makers, I would like to discuss a collaboration.</p>
                <p>Organization name:<br>Objective:<br>Target participants:<br>Estimated number of participants:<br>Preferred date/location:<br>Program format:</p>
                <a class="btn btn-primary" href="<?= htmlspecialchars($collaborationWhatsapp) ?>" target="_blank" rel="noopener">Send Collaboration Enquiry</a>
            </aside>
        </div>
    </section>

    <section class="section collaboration-contact-section">
        <div class="program-trial-detail-inner">
            <div>
                <span class="eyebrow">Contact for Collaboration</span>
                <h2>Start a collaboration discussion with NextGen Makers.</h2>
                <p>Share your objective, target audience and preferred format. Our team will help explore a suitable robotics, coding or STEM collaboration plan.</p>
                <div class="trial-detail-row">
                    <span>WhatsApp: <strong><?= htmlspecialchars($whatsappDisplay) ?></strong></span>
                    <span>Email: <strong><?= htmlspecialchars($email) ?></strong></span>
                    <span>Programs: <strong>Robotics | Coding | STEM</strong></span>
                    <span>Formats: <strong>Workshop | Event | CSR | Showcase</strong></span>
                </div>
            </div>
            <a class="btn btn-dark" href="<?= htmlspecialchars($collaborationWhatsapp) ?>" target="_blank" rel="noopener">WhatsApp Our Team</a>
        </div>
    </section>

    <section class="section about-faq-section">
        <div class="section-heading">
            <span class="eyebrow">Collaboration FAQ</span>
            <h2>Questions partners often ask.</h2>
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
                <span class="eyebrow">Collaborate With Us</span>
                <h2>Bring future-ready STEM learning to your community.</h2>
                <p>Let us design a robotics, coding or STEM collaboration that fits your students, event, school, organization or CSR objective.</p>
            </div>
            <a class="btn btn-dark" href="<?= htmlspecialchars($collaborationWhatsapp) ?>" target="_blank" rel="noopener">Discuss Collaboration</a>
        </div>
    </section>
</main>

<script type="application/ld+json">
<?= json_encode([
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => 'Service',
            'name' => 'NextGen Makers Robotics, Coding and STEM Collaboration Programs',
            'description' => 'Robotics workshops, coding workshops, STEM activities, school enrichment programs, CSR programs, student showcases and custom education collaboration programs.',
            'provider' => [
                '@type' => 'EducationalOrganization',
                'name' => 'NextGen Makers',
                'url' => $siteUrl,
                'telephone' => $whatsappDisplay,
                'email' => $email,
            ],
            'areaServed' => 'Malaysia',
            'audience' => [
                '@type' => 'Audience',
                'audienceType' => 'Schools, NGOs, CSR teams, education organizers and enrichment centres',
            ],
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
