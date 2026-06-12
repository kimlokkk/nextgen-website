<?php
$pageTitle = 'NextGen Genius Adaptive Robotics & STEM Program | NextGen Makers';
$pageDescription = 'NextGen Genius by NextGen Makers is an adaptive robotics and STEM learning program for children with special needs. Students learn through structured, supportive and hands-on activities tailored to their readiness.';
include __DIR__ . '/../includes/header.php';

$geniusWhatsapp = whatsapp_url("Hi NextGen Makers, I would like to ask about the NextGen Genius program for my child.\n\nChild's age:\nPreferred branch:\nPreferred day/time:\n\nPlease share the program suitability and available trial class slots. Thank you.");

$suitableItems = [
    'Children who benefit from adaptive learning support',
    'Children who enjoy hands-on activities, building and robotics',
    'Students who need a slower, more guided learning pace',
    'Children who respond well to structured routines and clear steps',
    'Parents looking for supportive STEM exposure for their child',
    'Children who need confidence-building technology enrichment',
    'Learners who can participate with facilitator guidance',
];

$learningAreas = [
    ['title' => 'Hands-On STEM Exposure', 'text' => 'Students explore simple STEM ideas through guided building, movement, robotics and creative tasks.'],
    ['title' => 'Basic Robotics Concepts', 'text' => 'Students are introduced to how robots, parts, movement and simple instructions work.'],
    ['title' => 'Step-by-Step Thinking', 'text' => 'Students practise following structured steps and completing tasks at a suitable pace.'],
    ['title' => 'Problem-Solving Through Guided Play', 'text' => 'Students are encouraged to try, adjust and complete small challenges with support.'],
    ['title' => 'Focus and Task Completion', 'text' => 'Students build confidence by working through short, manageable project activities.'],
    ['title' => 'Creative Expression', 'text' => 'Students use building and robotics activities to express ideas in a practical, hands-on way.'],
    ['title' => 'Confidence with Technology', 'text' => 'Students learn that technology can be explored, created and understood with the right support.'],
];

$tools = [
    ['title' => 'Age-Appropriate Robotics Kits', 'text' => 'Students use suitable robotics tools selected according to readiness and learning needs.'],
    ['title' => 'Hands-On Building Materials', 'text' => 'Students explore building, arranging, connecting and testing activities.'],
    ['title' => 'Guided STEM Activities', 'text' => 'Facilitators adapt activities to help students participate comfortably and meaningfully.'],
];

$learningFlow = [
    ['title' => 'Observe Readiness', 'text' => 'Facilitators observe the child’s comfort level, attention, interests and learning pace.'],
    ['title' => 'Introduce the Activity', 'text' => 'Students are introduced to a simple robotics or STEM concept using clear steps.'],
    ['title' => 'Guide the Build', 'text' => 'Students build, arrange or test parts with support from the facilitator.'],
    ['title' => 'Try the Action', 'text' => 'Students test movement, response or simple project output.'],
    ['title' => 'Adjust and Repeat', 'text' => 'Students practise small improvements through repetition and encouragement.'],
    ['title' => 'Celebrate Progress', 'text' => 'Students are recognised for participation, effort, task completion and confidence.'],
];

$projectOutputs = [
    'Simple robotics activity',
    'Guided STEM building task',
    'Movement-based robot project',
    'Basic coding or instruction activity',
    'Creative building output',
    'Simple challenge completion',
    'Confidence-building project showcase',
];

$benefits = [
    ['title' => 'Supports Confidence', 'text' => 'Children are encouraged to participate, try and complete activities at a comfortable pace.'],
    ['title' => 'Encourages Focus', 'text' => 'Structured activities help students practise attention and task completion.'],
    ['title' => 'Develops Problem-Solving', 'text' => 'Students learn to try small solutions with guided support.'],
    ['title' => 'Builds Fine Motor Practice', 'text' => 'Hands-on robotics and building tasks support connecting, arranging and handling parts.'],
    ['title' => 'Introduces STEM Gently', 'text' => 'Children experience robotics and STEM in a supportive, non-intimidating way.'],
    ['title' => 'Creates Visible Progress', 'text' => 'Parents can observe participation, confidence and project completion over time.'],
];

$skills = [
    ['title' => 'Following Steps', 'text' => 'Practising simple instructions and structured activity flow.'],
    ['title' => 'Hands-On Coordination', 'text' => 'Building, connecting, arranging and testing materials.'],
    ['title' => 'Focus and Patience', 'text' => 'Completing short tasks with support and encouragement.'],
    ['title' => 'Problem-Solving', 'text' => 'Trying small adjustments when something does not work.'],
    ['title' => 'Creative Confidence', 'text' => 'Creating simple projects and feeling proud of progress.'],
    ['title' => 'Communication', 'text' => 'Sharing choices, actions or completed work in a suitable way.'],
    ['title' => 'Technology Readiness', 'text' => 'Building comfort with robotics and STEM tools.'],
    ['title' => 'Self-Confidence', 'text' => 'Developing a positive feeling toward learning and creating.'],
];

$classDetails = [
    'Program type: Adaptive robotics and STEM learning',
    'Learning pace: Based on child readiness',
    'Class duration: Subject to suitability and schedule',
    'Trial or consultation recommended',
    'Available subject to branch schedule and facilitator availability',
    'Parent discussion recommended before enrolment',
    'Activities adjusted according to learning needs',
    'WhatsApp enquiry available',
];

$faqs = [
    ['question' => 'What is NextGen Genius?', 'answer' => 'NextGen Genius is an adaptive robotics and STEM learning program designed to support children who benefit from a more guided, structured and supportive learning approach.'],
    ['question' => 'Who is NextGen Genius suitable for?', 'answer' => 'It is suitable for children who enjoy hands-on activities and may need adaptive pacing, clear steps, facilitator guidance or confidence-building STEM exposure.'],
    ['question' => 'Does my child need prior robotics or coding experience?', 'answer' => 'No. Activities can start from simple hands-on STEM and robotics exploration based on the child’s readiness.'],
    ['question' => 'Will the activity be adjusted for my child?', 'answer' => 'Yes. The program approach is flexible and can be adjusted according to the child’s readiness, comfort level and learning needs.'],
    ['question' => 'Can parents discuss suitability first?', 'answer' => 'Yes. Parents are encouraged to contact NextGen Makers on WhatsApp to discuss suitability, schedule and branch availability.'],
    ['question' => 'Is this available at every branch?', 'answer' => 'Availability may depend on branch schedule and facilitator availability. Parents should check with the team before booking.'],
    ['question' => 'How do I enquire or book?', 'answer' => 'You can contact NextGen Makers on WhatsApp at 011-5662 0871.'],
];
?>

<main>
    <section class="hero program-detail-hero nextgen-genius-hero">
        <div class="hero-content">
            <span class="eyebrow">NextGen Genius</span>
            <h1>NextGen Genius: Adaptive Robotics & STEM Learning</h1>
            <p class="hero-lead">A supportive robotics and STEM program for children who benefit from guided, flexible and confidence-building learning.</p>
            <p>NextGen Genius is designed for children who may need a more adaptive approach to robotics, STEM and hands-on technology learning.</p>
            <p>Through structured activities, facilitator guidance and suitable project pacing, students are supported to explore building, movement, simple robotics concepts and creative problem-solving.</p>
            <p>The goal is to help children participate, build confidence and experience the joy of creating with technology in a supportive environment.</p>
            <div class="button-row">
                <a class="btn btn-primary" href="<?= htmlspecialchars($geniusWhatsapp) ?>" target="_blank" rel="noopener">Ask About Suitability</a>
                <a class="btn btn-secondary" href="<?= htmlspecialchars(url_path('/programs.php')) ?>">Explore Program Pathway</a>
            </div>
            <div class="program-detail-badges">
                <span>Adaptive STEM</span>
                <span>Supportive Learning</span>
                <span>Hands-On Robotics</span>
                <span>Guided Activities</span>
                <span>Confidence Building</span>
                <span>WhatsApp Enquiry</span>
            </div>
        </div>
        <div class="hero-visual" aria-label="NextGen Genius supportive robotics learning">
            <div class="genius-feature-card">
                <strong>Supportive. Structured. Hands-on.</strong>
                <p>Activities are adjusted according to the child's readiness, comfort level and learning needs.</p>
                <div class="program-chip-grid">
                    <span>Clear steps</span>
                    <span>Gentle pacing</span>
                    <span>Facilitator guidance</span>
                    <span>Visible progress</span>
                </div>
            </div>
        </div>
    </section>

    <section class="section program-intro-section">
        <div class="program-detail-split">
            <div>
                <span class="eyebrow">Program Overview</span>
                <h2>What Is NextGen Genius?</h2>
                <p>NextGen Genius is an adaptive robotics and STEM learning program for children who benefit from a more guided and supportive learning approach.</p>
                <p>The program introduces children to hands-on STEM activities, simple robotics concepts, building tasks and creative problem-solving in a structured way.</p>
                <p>Instead of rushing through a fixed pathway, activities can be adjusted according to the child’s readiness, interests and comfort level.</p>
                <p>NextGen Genius focuses on participation, confidence, communication, task completion and positive exposure to technology learning.</p>
            </div>
            <aside class="program-highlight-card">
                <strong>Every child deserves a meaningful way to create.</strong>
                <p>NextGen Genius helps children experience robotics and STEM with support, patience and encouragement.</p>
                <div class="genius-feature-card genius-mini-card">
                    <strong>Guided learning support</strong>
                    <p>Clear steps, flexible pacing and facilitator guidance for each child's readiness.</p>
                </div>
            </aside>
        </div>
    </section>

    <section class="section suitable-section">
        <div class="program-detail-split reverse">
            <div class="genius-feature-card genius-privacy-card">
                <strong>Adaptive STEM learning</strong>
                <p>Parents can discuss suitability first so the class approach fits the child, not the other way around.</p>
                <div class="program-chip-grid">
                    <span>Gentle pace</span>
                    <span>Structured routine</span>
                    <span>Supportive guidance</span>
                </div>
            </div>
            <div>
                <span class="eyebrow">Who Is This For?</span>
                <h2>Is NextGen Genius Suitable for My Child?</h2>
                <p>NextGen Genius is suitable for children who enjoy hands-on exploration but may need a learning environment with clearer steps, more repetition, flexible pacing or additional facilitator support.</p>
                <p>Parents are encouraged to contact NextGen Makers first so the team can understand the child’s needs, readiness and suitable class options.</p>
                <div class="program-chip-grid">
                    <?php foreach ($suitableItems as $item): ?>
                        <span><?= htmlspecialchars($item) ?></span>
                    <?php endforeach; ?>
                </div>
                <div class="parent-note">
                    <strong>Parent-Friendly Note</strong>
                    <p>This program is not about rushing children into difficult coding. It is about helping each child participate, build confidence and experience STEM learning in a supportive way.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section learning-areas-section">
        <div class="section-heading">
            <span class="eyebrow">What Students Learn</span>
            <h2>What Will Children Learn in NextGen Genius?</h2>
            <p>NextGen Genius introduces robotics and STEM through structured, supportive and hands-on learning experiences.</p>
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
            <span class="eyebrow">Tools & Activities</span>
            <h2>Tools & Activities Used in NextGen Genius</h2>
            <p>Tools and activities are selected based on child readiness, comfort level and the learning outcome for each session.</p>
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
    </section>

    <section class="section learning-flow-section">
        <div class="section-heading">
            <span class="eyebrow">How Learning Happens</span>
            <h2>How Children Learn in NextGen Genius</h2>
            <p>NextGen Genius uses a supportive flow that prioritises readiness, comfort, guidance and visible progress.</p>
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
            <strong>Progress can look different for every child.</strong>
            <p>NextGen Genius focuses on participation, effort, confidence and meaningful learning steps.</p>
        </div>
    </section>

    <section class="section project-output-section">
        <div class="program-detail-split">
            <div>
                <span class="eyebrow">Project Output</span>
                <h2>What Will My Child Be Able to Create?</h2>
                <p>Students may complete simple robotics, STEM or building activities based on their readiness and support needs.</p>
                <p>Outputs are designed to show participation, task completion, confidence and hands-on learning progress.</p>
                <div class="program-chip-grid">
                    <?php foreach ($projectOutputs as $item): ?>
                        <span><?= htmlspecialchars($item) ?></span>
                    <?php endforeach; ?>
                </div>
            </div>
            <aside class="parent-value-card">
                <strong>Parent Value</strong>
                <p>Parents can see progress through participation, confidence, small completed tasks and the child’s willingness to explore technology activities.</p>
                <div class="genius-feature-card genius-mini-card">
                    <strong>Confidence-building project</strong>
                    <p>Outputs focus on effort, participation, task completion and comfort with hands-on learning.</p>
                </div>
            </aside>
        </div>
    </section>

    <section class="section benefits-section">
        <div class="section-heading">
            <span class="eyebrow">Why Adaptive STEM?</span>
            <h2>Why Choose Adaptive Robotics & STEM Learning?</h2>
            <p>Some children learn best when activities are structured, flexible and guided with patience.</p>
            <p>Adaptive robotics and STEM learning can give children a positive way to practise focus, problem-solving, communication, confidence and hands-on creation.</p>
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
            <span class="eyebrow">Skills Children Develop</span>
            <h2>Skills Your Child Can Build</h2>
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

    <section class="section class-structure-section">
        <div class="section-heading">
            <span class="eyebrow">Class Structure</span>
            <h2>Program Structure</h2>
            <p>NextGen Genius is best discussed with the team first so the class approach can match child readiness and branch availability.</p>
        </div>
        <div class="class-detail-grid">
            <?php foreach ($classDetails as $detail): ?>
                <article><?= htmlspecialchars($detail) ?></article>
            <?php endforeach; ?>
        </div>
        <div class="parent-note">
            <strong>Suitability Note</strong>
            <p>Parents may contact NextGen Makers on WhatsApp to discuss suitability, schedule and available class options before booking.</p>
        </div>
    </section>

    <section class="section program-trial-detail-section">
        <div class="program-trial-detail-inner">
            <div>
                <span class="eyebrow">Enquiry CTA</span>
                <h2>Ask About NextGen Genius Suitability</h2>
                <p>Want to know whether NextGen Genius is suitable for your child? Contact our team on WhatsApp and share your child’s age, learning needs and preferred branch.</p>
                <p>Our team can help discuss suitable class options, availability and whether a trial or consultation is recommended.</p>
                <div class="trial-detail-row">
                    <span>Program: <strong>Adaptive STEM</strong></span>
                    <span>Focus: <strong>Supportive learning</strong></span>
                    <span>Booking: <strong>WhatsApp</strong></span>
                    <span>Availability: <strong>Subject to branch schedule</strong></span>
                </div>
            </div>
            <a class="btn btn-dark" href="<?= htmlspecialchars($geniusWhatsapp) ?>" target="_blank" rel="noopener">Ask on WhatsApp</a>
        </div>
    </section>

    <section class="section branch-availability-section">
        <div class="locations-layout">
            <div class="section-heading">
                <span class="eyebrow">Branch Availability</span>
                <h2>Check NextGen Genius Availability</h2>
                <p>NextGen Genius availability may depend on branch schedule, facilitator availability and suitability discussion.</p>
                <p>Parents searching for adaptive STEM class, robotics class for special needs, inclusive coding class Malaysia, STEM class Shah Alam, coding class Bangi or robotics class Cyberjaya can contact our team for guidance.</p>
                <a class="btn btn-primary" href="<?= htmlspecialchars(whatsapp_url('Hi NextGen Makers, I would like to check NextGen Genius suitability and branch availability.')) ?>" target="_blank" rel="noopener">Check Availability</a>
            </div>
            <div class="genius-feature-card genius-privacy-card">
                <strong>Supportive class options</strong>
                <p>Availability is confirmed through WhatsApp after understanding the child's age, readiness and preferred branch.</p>
            </div>
        </div>
        <div class="branch-grid branch-showcase">
            <?php foreach ($branches as $index => $branch): ?>
                <article>
                    <span><?= str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT) ?></span>
                    <strong><?= htmlspecialchars($branch) ?></strong>
                    <a href="<?= htmlspecialchars(whatsapp_url('Hi NextGen Makers, I would like to check NextGen Genius suitability and availability at ' . $branch . '.')) ?>" target="_blank" rel="noopener">Check Availability</a>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="section about-faq-section">
        <div class="section-heading">
            <span class="eyebrow">NextGen Genius FAQ</span>
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
                <span class="eyebrow">Supportive STEM</span>
                <h2>Give Your Child a Supportive Way to Learn, Build and Create</h2>
                <p>NextGen Genius helps children explore robotics and STEM through guided, flexible and confidence-building activities. Contact us to discuss suitability and available options.</p>
            </div>
            <a class="btn btn-dark" href="<?= htmlspecialchars($geniusWhatsapp) ?>" target="_blank" rel="noopener">Ask About NextGen Genius</a>
        </div>
    </section>
</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>
