<?php
require_once __DIR__ . '/site-data.php';

$pageTitle = $pageTitle ?? 'Robotics, Coding & STEM Classes for Kids in Malaysia | NextGen Makers';
$pageDescription = $pageDescription ?? 'NextGen Makers Robotics Academy offers hands-on robotics, coding and STEM classes for children and teenagers aged 4 to 18.';
$bodyClass = $bodyClass ?? '';
$assetVersion = '20260612-08';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= htmlspecialchars($pageTitle) ?></title>
    <meta name="description" content="<?= htmlspecialchars($pageDescription) ?>">
    <link rel="icon" href="<?= htmlspecialchars(url_path('/assets/images/nextgen-logo.png')) ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@600;700;800&family=Nunito:wght@400;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="preload" href="<?= htmlspecialchars(url_path('/assets/css/style.css?v=' . $assetVersion)) ?>" as="style">
    <link rel="stylesheet" href="<?= htmlspecialchars(url_path('/assets/css/style.css?v=' . $assetVersion)) ?>">
</head>
<body class="<?= htmlspecialchars($bodyClass) ?>">
<?php include __DIR__ . '/nav.php'; ?>
