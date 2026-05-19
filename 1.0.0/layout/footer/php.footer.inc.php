</div>

<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/layout/sidebar/php.sidebarLeft.php");
?>

</div>


<?php
$footerPath = $_SERVER['DOCUMENT_ROOT'] . "/python/templates/footer.html";
$footer = @file_get_contents($footerPath);
if ($footer !== false) {
	echo $footer;
}
?>


<!-- Highlight.js -->
<link rel="stylesheet" href="https://utensils.samwilliam.de/highlight/styles/github.min.css">
<script src="https://utensils.samwilliam.de/highlight/highlight.min.js"></script>
<script>
    hljs.highlightAll();
</script>
</body>

</html>