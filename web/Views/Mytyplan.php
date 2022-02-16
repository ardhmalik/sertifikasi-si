<!-- Page Title -->
<h2 class="text-center mb-4">
    <b><?= $title ?></b>
</h2>

<!-- In Process -->
<div class="row justify-content-center">
    <div class="col-12 col-lg-8">
        <img src="../Assets/img/code.jpg" alt="Code of mytyplan" class="img-fluid p-3 shadow rounded">
    </div>
    <div class="col-12 col-lg-4 py-4 my-auto">
        <p class="lh-lg">
            I was build this project with the CodeIgniter framework 3.1.11 (currently), Bootstrap 4, VS Code and git. Can be seen at the click this
            <a target="blank" href="https://github.com/ardhmalik/sertifikasi-si" class="btn btn-sm btn-dark fw-bold">
                <i class="fab fa-github-alt"></i> | github
            </a> repository. 
            Please give feedback so that this project can be useful for everyone.
        </p>
    </div>
    <div class="col-12 col-lg-4 d-none d-lg-block my-auto">
        <p class="text-end lh-lg">
            This is a dashboard page of the My This Year Plan project, it may not be as beautiful and comfortable as other programs in managing your plans now.
            But, after this sertification program I will provide additional features to make it more beautiful and comfortable to use.
        </p>
    </div>
    <div class="col-12 col-lg-8 mt-4">
        <img src="../Assets/img/mtyplan.jpg" alt="Mytyplan page" class="img-fluid p-3 shadow rounded">
    </div>
    <div class="col-12 col-lg-4 d-block d-lg-none mt-3">
        <p class="lh-lg">
            This is a dashboard page of the My This Year Plan project, it may not be as beautiful and comfortable as other programs in managing your plans now.
            But, after this sertification program I will provide additional features to make it more beautiful and comfortable to use.
        </p>
    </div>
</div>

<!-- Buttons Back to Home -->
<?php
include $_SERVER['DOCUMENT_ROOT'] .  "/web/Parts/Button.php";
?>