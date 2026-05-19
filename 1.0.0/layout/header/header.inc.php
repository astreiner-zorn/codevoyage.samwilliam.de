<?php
ob_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
?>
<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/python/static/css/style.css">
    <link rel="stylesheet" href="https://utensils.samwilliam.de/fontawesome/css/all.min.css">
    <title><?php echo $pageTitle; ?></title>
</head>
<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/database.inc.php");
$mariadbVersion = getMariaDBVersion($connection);
$section_beginn = "<div class='section'>";
$section_ende = "</div>";
?>

<body>

    <div class="header">
        <?php require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/navigation.inc.php"); ?>
    </div>
    <div class="main">
        <div class="content">
            <h2 class="pageTitle"><?php echo $pageTitle; ?></h2>