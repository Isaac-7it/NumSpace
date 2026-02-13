<?php
include_once __DIR__ . '/../config/config.php';
$cssPath = __DIR__ . '/../css/output.css';
$cssVersion = is_file($cssPath) ? filemtime($cssPath) : time();
$cssHref = '/NumSpace/css/output.css?v=' . $cssVersion;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= APP_NAME ?></title>
    <link rel="stylesheet" href="<?= $cssHref ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=SN+Pro:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
</head>
<body class="font-family p-2">
    <main class="">
    <div class="text-center mb-4">
        <h1 class="font-bold text-[32px] bg-linear-to-r from-indigo-500 via-purple-500 to-pink-500 bg-clip-text text-transparent">NumSpace</h1>
        <p class="text-gray-500">Explore the structure of numbers</p>
    </div>