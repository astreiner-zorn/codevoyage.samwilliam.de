<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/python/static/css/style.css">
    <link rel="stylesheet" href="https://utensils.samwilliam.de/fontawesome/css/all.min.css">
</head>

<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/database.inc.php");
$section_beginn = "<div class='section'>";
$section_ende = "</div>";
?>

<body>

    <div class="header">
        <?php require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/navigation.inc.php"); ?>
    </div>
    <div class="main">
        <div class="content">