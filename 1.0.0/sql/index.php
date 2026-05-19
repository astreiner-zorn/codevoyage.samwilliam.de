<?php $bereich = 'SQL-Bereich'; $pageTitle = 'Startseite der SQL-Instanz'; require_once ($_SERVER['DOCUMENT_ROOT'] . "/layout/header/sql.header.inc.php"); ?>

Hello World! 

<?php include("middle.php"); ?>

<?php
    $sql = "SELECT SUM(anschaffungswert) AS 'gesamtwert' FROM fahrraeder;";
    $ausgabe = $connection->query($sql);
?>

<p>Hallo Welt!</p>

<?php require_once ($_SERVER['DOCUMENT_ROOT'] . "/layout/footer/sql.footer.inc.php");