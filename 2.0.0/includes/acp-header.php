<?php if (ob_get_level() == 0) ob_start();
require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/session.php"); ?>
<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>samwilliam.de</title>

    <!-- Font Awesome 6 Free einbinden -->
    <link rel="stylesheet" href="https://utensils.samwilliam.de/fontawesome/css/all.min.css">

    <!-- Angelegte Stylesheets einbinden -->
    <link rel="stylesheet" href="https://utensils.samwilliam.de/tinymce/langs/de.js">
    <link rel="stylesheet" href="/styles/styles.css">
</head>

<body>
    <div class="container">
        <?php require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/acp-seitenleiste.php"); ?>

        <div class="main-content">
            <?php require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/navigation.php"); ?>