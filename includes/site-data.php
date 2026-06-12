<?php
$siteName = 'NextGen Makers';
$siteUrl = 'https://nextgenmakers.com.my';
$whatsappNumber = '601156620871';
$whatsappDisplay = '011-5662 0871';
$email = 'info@nextgenmakers.com.my';

$programs = [
    [
        'name' => 'Little Maker',
        'age' => 'Age 4-5',
        'focus' => 'Play-based robotics, coding robot, motorized building blocks and LEGO WeDo.',
        'url' => '/programs/little-maker.php',
        'tag' => 'Early robotics'
    ],
    [
        'name' => 'Junior Maker',
        'age' => 'Age 6-9',
        'focus' => 'ScratchJr, Scratch, DIY STEM, animation, game development and digital creativity.',
        'url' => '/programs/junior-maker.php',
        'tag' => 'Creative coding'
    ],
    [
        'name' => 'Young Coder',
        'age' => 'Age 10+',
        'focus' => 'Arduino programming, electronics, robotics and hands-on engineering projects.',
        'url' => '/programs/young-coder.php',
        'tag' => 'Arduino'
    ],
    [
        'name' => 'Young Innovator',
        'age' => 'Age 13+',
        'focus' => 'C++ programming, Arduino development, automation and functional prototype creation.',
        'url' => '/programs/young-innovator.php',
        'tag' => 'C++ projects'
    ],
    [
        'name' => 'Senior Innovator',
        'age' => 'Age 15+',
        'focus' => 'IoT, cloud connectivity, sensors, automation and smart system development.',
        'url' => '/programs/senior-innovator.php',
        'tag' => 'IoT systems'
    ],
    [
        'name' => 'Senior Coder',
        'age' => 'Age 16+',
        'focus' => 'Web design, app development, game development and digital product creation.',
        'url' => '/programs/senior-coder.php',
        'tag' => 'Digital products'
    ],
    [
        'name' => 'NextGen Genius',
        'age' => 'Special Program',
        'focus' => 'Adaptive robotics and STEM learning for children with special needs.',
        'url' => '/programs/nextgen-genius.php',
        'tag' => 'Adaptive STEM'
    ],
];

$branches = [
    'MTDC Shah Alam',
    'Bandar Puteri Bangi',
    'Puncak Alam',
    'Seksyen 7 Shah Alam',
    'Seksyen 13 Shah Alam',
    'Cyberjaya',
    'Bandar Baru Selayang',
];

function base_path(): string
{
    $scriptName = $_SERVER['SCRIPT_NAME'] ?? '';

    if ($scriptName === '/nextgen' || str_starts_with($scriptName, '/nextgen/')) {
        return '/nextgen';
    }

    return '';
}

function url_path(string $path): string
{
    return base_path() . '/' . ltrim($path, '/');
}

function whatsapp_url(string $message = 'Hi NextGen Makers, I would like to book a trial class for my child.'): string
{
    global $whatsappNumber;
    return 'https://wa.me/' . $whatsappNumber . '?text=' . rawurlencode($message);
}
?>
