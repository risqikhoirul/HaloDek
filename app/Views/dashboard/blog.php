<?= $this->extend('dashboard/sidebar'); ?>
<?= $this->section('content'); ?>

<!-- Tampilkan pesan kesalahan jika ada -->
<?php $errorMessage = session('errors'); ?>
<?php if ($errorMessage): ?>
    <div class="alert alert-danger">
    <?php foreach ($errorMessage as $error): ?>
            <?= esc($error) ?><br>
        <?php endforeach; ?>
    </div>
        
<?php endif; ?>
<!--  -->

<!-- Tampilkan pesan sukses jika ada -->
<?php $successMessage = session('success'); ?>
<?php if ($successMessage): ?>
    <div class="alert alert-success">
            <?= esc($successMessage) ?><br>
    </div>
<?php endif; ?>
<!--  -->


            
<section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Snow Editor</h4>
            </div>
            <div class="card-body">
                <p>Snow is a clean editor theme</p>
                <div id="snow">
                    <p>Hello World!</p>
                    <p>Some initial <strong>bold</strong> text</p>
                    <p><br></p>
                    
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Bubble Editor</h4>
            </div>
            <div class="card-body">
                <p>Block some text to display options in poppovers </p>
                <div id="bubble">
                    <p>Hello World!</p>
                    <p>Some initial <strong>bold</strong> text</p>
                    <p><br></p>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Full Editor</h4>
            </div>
            <div class="card-body">
                <p>Block some text to display options in poppovers </p>
                <div id="full">
                    <p>Hello World!</p>
                    <p>Some initial <strong>bold</strong> text</p>
                    <p><br></p>
                </div>
            </div>
        </div>
    </section>
</div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2022 &copy; Voler</p>
                    </div>
                    <div class="float-end">
                        <p>Crafted with <span class='text-danger'><i data-feather="heart"></i></span> by <a href="https://saugi.me">Saugi</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="assets/js/feather-icons/feather.min.js"></script>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/app.js"></script>
    
    <script src="assets/vendors/quill/quill.min.js"></script>
    <script src="assets/js/pages/form-editor.js"></script>

    <script src="assets/js/main.js"></script>



    <script>
        var snow = new Quill('#snow', {
    theme: 'snow'
});
var bubble = new Quill('#bubble', {
    theme: 'bubble'
});
new Quill("#full", { 
    bounds: "#full-container .editor", 
    modules: { 
        toolbar: [
            [{ font: [] }, { size: [] }], 
            ["bold", "italic", "underline", "strike"], 
            [
                { color: [] }, 
                { background: [] }
            ], 
            [
                { script: "super" }, 
                { script: "sub" }
            ], 
            [
                { list: "ordered" }, 
                { list: "bullet" }, 
                { indent: "-1" }, 
                { indent: "+1" }
            ], 
            ["direction", { align: [] }], 
            ["link", "image", "video"], 
            ["clean"]] 
        }, 
        theme: "snow" 
    })
    </script>
    <script src="assets/js/feather-icons/feather.min.js"></script>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/app.js"></script>
    
    <script src="assets/vendors/quill/quill.min.js"></script>
    <script src="assets/js/pages/form-editor.js"></script>

    <script src="assets/js/main.js"></script>

    <?= $this->endSection(); ?>