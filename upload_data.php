<?php
include 'header.php';
?>

<!-- page content -->
<div class="right_col" role="main">
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Upload Data Pesan</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <?php
                    include("koneksi.php");
                    ?>
                    <br>
                    <form action="upload_aksi.php" method="post" enctype="multipart/form-data" class="row g-2">
                        <div class="col-auto ">
                            <input class="form-control" type="file" name="filexls" id="filexls">
                        </div>
                        <div class="col-auto">
                            <input type="submit" name="upload" class="btn btn-sm btn-primary" value="Upload File XLS/XLSX">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /page content -->

<?php
include 'footer.php';
?>