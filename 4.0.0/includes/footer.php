</main>
</div>
</div>
</div>

<script type="module" src="/assets/stimulus-bootstrap.js"></script>

<!-- Bootstrap Bundle mit Popper einbinden -->
<script src="https://utensils.samwilliam.de/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Highlight.js -->
<link rel="stylesheet" href="https://utensils.samwilliam.de/highlight/styles/github.min.css">
<script src="https://utensils.samwilliam.de/highlight/highlight.min.js"></script>

<!-- TinyMCE-Editor einbinden -->
<script src="https://utensils.samwilliam.de/tinymce/tinymce.min.js"></script>
<script>
    if (typeof tinymce !== 'undefined' && document.querySelector('textarea')) {
    tinymce.init({
        selector: 'textarea',
        license_key: 'gpl',
        content_css: [
            'https://utensils.samwilliam.de/highlight/styles/default.min.css',
            '/styles/editor.css'
        ],
        menubar: false,
        language: 'de',
        language_url: 'https://utensils.samwilliam.de/tinymce/langs/de.js',
        plugins: 'code table lists fullscreen wordcount link image autosave advlist codesample preview',
        toolbar: 'code undo redo | bold italic | blocks | link image codesample table blockquote | bullist numlist | alignleft aligncenter alignright removeformat preview',
        fontsize_formats: "10pt 12pt 14pt 16pt 18pt 24pt 36pt"
    });
    }
</script>

<style>
  .tox .tox-statusbar {
    display: none;
  }
</style>
</body>

</html>