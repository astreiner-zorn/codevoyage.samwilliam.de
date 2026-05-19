<?php $bereich = 'SQL-Bereich'; $pageTitle = 'Startseite der SQL-Instanz'; require_once ($_SERVER['DOCUMENT_ROOT'] . "/layout/header/sql.header.inc.php"); ?>

SELECT * FROM fahrraeder WHERE anschaffungswert < 400 AND kaufdatum < '2008-01-01';

<?php include("middle.php"); ?>

<?php
    $sql = "SELECT * FROM fahrraeder WHERE anschaffungswert < 400 AND kaufdatum < '2008-01-01' ORDER BY `fahrraeder`.`kaufdatum` ASC";
    $ausgabe = $connection->query($sql);
?>

<table>
    <thead>
        <tr>
            <th>Anschaffungswert</th>
            <th>Kaufdatum</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($ausgabe as $inhalt): ?>
            <tr>
                <td><?php echo $inhalt['anschaffungswert'] . "€"; ?></td>
                <td><?php echo $inhalt['kaufdatum']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php require_once ($_SERVER['DOCUMENT_ROOT'] . "/layout/footer/sql.footer.inc.php");