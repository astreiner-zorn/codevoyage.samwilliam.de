</div>

<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/layout/sidebar/acp.sidebarLeft.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/layout/sidebar/acp.sidebarRight.php");
?>

</div>

<?php
$footerPath = $_SERVER['DOCUMENT_ROOT'] . "/python/templates/footer.html";
$footer = @file_get_contents($footerPath);
if ($footer !== false) {
	echo $footer;
}
?>


</body>

</html>