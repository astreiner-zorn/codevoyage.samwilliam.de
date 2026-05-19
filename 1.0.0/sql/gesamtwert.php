<?php $bereich = 'SQL-Bereich'; $pageTitle = 'Startseite der SQL-Instanz'; require_once ($_SERVER['DOCUMENT_ROOT'] . "/layout/header/sql.header.inc.php"); ?>

SELECT SUM(anschaffungswert) AS 'Gesamtwert:' FROM fahrraeder;

<?php include("middle.php"); ?>

<?php
    $sql = "SELECT SUM(anschaffungswert) AS 'gesamtwert' FROM fahrraeder;";
    $ausgabe = $connection->query($sql);
?>

<table>
    <thead>
        <tr>
            <th>Gesamtwert</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($ausgabe as $inhalt): ?>
            <tr>
                <td><?php echo $inhalt['gesamtwert'] . "€"; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php require_once ($_SERVER['DOCUMENT_ROOT'] . "/layout/footer/sql.footer.inc.php");