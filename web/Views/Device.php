<!-- Page Title -->
<h2 class="text-center mb-4">
    <b><?= $title ?></b>
</h2>

<div class="row justify-content-md-center">
    <!-- Preview -->
    <div class="col-12 mb-4">
        <h4>
            <b>Preview</b>
        </h4>
        <div class="row justify-content-md-center">
            <div class="col-md-auto">
                <div class="card rounded shadow">
                    <img src="../Assets/img/My Desktop.jpg" alt="My Desktop" class="rounded">
                </div>
            </div>
        </div>
    </div>

    <!-- Hardware Spesification -->
    <div class="col-md-6 col-sm-12 mb-4">
        <h4>
            <!-- <b>Hardware Spesification</b> -->
        </h4>
        <div class="table-responsive col-auto w-100">
            <table class="table table-bordered table-hover">
                <thead class="bg-dark text-light">
                    <tr>
                        <td colspan="2" class="text-center">
                            <b>HARDWARE SPESIFICATION</b>
                        </td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <b>Type</b>
                        </td>
                        <td>
                            DELL LATITUDE E7270
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <b>Processor</b>
                        </td>
                        <td>
                            Intel(R) Core(TM) i5-6300U (4) @ 2.40GH.z
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <b>RAM</b>
                        </td>
                        <td>
                            16GB (Dual Channel)
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <b>Storage</b>
                        </td>
                        <td>
                            250GB SSD
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <b>Graphics</b>
                        </td>
                        <td>
                            Intel Skylake GT2 [HD Graphics 520]
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <b>Resolution</b>
                        </td>
                        <td>
                            1920 x 1080
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    
    <!-- System Spesification -->
    <div class="col-md-6 col-sm-12">
        <h4>
            <!-- <b>System Spesification</b> -->
        </h4>
        <div class="table-responsive col-auto w-100">
            <table class="table table-bordered table-hover">
                <thead class="bg-dark text-light">
                    <tr>
                        <td colspan="2" class="text-center">
                            <b>SYSTEM SPESIFICATION</b>
                        </td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <b>OS</b>
                        </td>
                        <td>
                            Arch Linux
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <b>Kernel</b>
                        </td>
                        <td>
                            linux-lts 5.10
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <b>Web Server</b>
                        </td>
                        <td>
                            Apache
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <b>Database Server</b>
                        </td>
                        <td>
                            MariaDB
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <b>Programming Lang</b>
                        </td>
                        <td>
                            PHP 8
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <b>Framework</b>
                        </td>
                        <td>
                            CodeIgniter 4
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Buttons Back to Home -->
<?php
include $_SERVER['DOCUMENT_ROOT'] . '/web/Parts/Button.php';
?>