<?php 
  $pageTitle = "Quiz";
  require_once ($_SERVER['DOCUMENT_ROOT'] . "/includes/header.php");
?>

<div data-controller="Quiz" class="row d-flex flex-wrap g-4">
    <div data-Quiz-target="quizQuiz"></div>
</div>

<?php require_once ($_SERVER['DOCUMENT_ROOT'] . "/includes/footer.php"); ?>