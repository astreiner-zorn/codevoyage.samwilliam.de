<?php
 ob_start();
 // Fehlerberichterstattung aktivieren
 error_reporting(E_ALL);
 ini_set('display_errors', 1);
 ?>

<?php 
  $pageTitle = "Stimulus erlernen";
  require_once ($_SERVER['DOCUMENT_ROOT'] . "/includes/header.php");
?>

<div data-controller="StimulusLernen">
  <form data-action="submit->StimulusLernen#anzeigen" method="POST" class="grid">
    <input type="text" data-StimulusLernen-target="eingabe" placeholder="Text eingeben..." class="form-control">
    <button type="submit" class="mt-3 btn btn-success">Absenden</button>
  </form>

  <div data-StimulusLernen-target="ausgabe" class="border p-3 border rounded fw-light mt-3"></div>
</div>

<?php require_once ($_SERVER['DOCUMENT_ROOT'] . "/includes/footer.php"); ?>