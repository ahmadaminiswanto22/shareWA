<?php
$judul = 'Kirim Pesan';
include "header.php";
?>
<style>
    form .tambah-link .buat-link,
    .hasil .buat-link {
        background-color: #deb887;
        text-decoration: none;
        font-weight: 400;
        font-size: 16px;
        font-style: bold;
        color: #fff;
        border-color: #ffc0cb;
    }

    .hasil .hasil-link {
        width: 75%;
        padding: 5px;
    }

    .hasil .tombol-wa {
        background-color: #128C7E;
        text-decoration: none;
        font-weight: 400;
        font-size: 16px;
        font-style: bold;
        color: #fff;
        border-color: #075E54;
    }
</style>
<div class="container">
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-comments m-1"></i>
            Kirim Pesan Via Whats App
        </div>
        <div class="card-body">
            <div class="row text-center justify-content-center judul">
                <div class="col-md-10">
                    <h4><a href="https://www.webook.id" style="text-decoration: none;">RPL SMK Terput 2</a></h4>
                    <h2>Sukses Tunggakan</h2>
                    <br>
                    <!-- <p class="font-weight-bolder text-right">Kepada Yth.</p> -->
                    <form action="" method="post">
                        <div class="row mb-3">
                            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="nama" id="nama">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
                            <div class="col-sm-8">
                                <input type="kelas" class="form-control" name="kelas" id="kelas">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="jmlh_uang" class="col-sm-2 col-form-label">Jumlah Uang</label>
                            <div class="col-sm-8">
                                <input type="jmlh_uang" class="form-control" name="jmlh_uang" id="jmlh_uang">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="bulan" class="col-sm-2 col-form-label">Bulan</label>
                            <div class="col-sm-8">
                                <input type="bulan" class="form-control" name="bulan" id="bulan">
                            </div>
                        </div>
                        <div class="form-group mt-2 tambah-link">
                            <button class="btn buat-link" type="submit" name="send"> Tampil Data </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- ------------- -->
    <div class="row text-justify justify-content-center">
        <div class="col-md-12">
            <div class="hasil">
                <?php
                if (isset($_POST['send'])) {
                    urlencode(@$nama = htmlspecialchars($_POST['nama']));
                    urlencode(@$kelas = htmlspecialchars($_POST['kelas']));
                    urlencode(@$jmlh_uang = htmlspecialchars($_POST['jmlh_uang']));
                    urlencode(@$bulan = htmlspecialchars($_POST['bulan']));
                }

                $search = array(
                    '+',
                    '&'
                );

                $replace = array(
                    '-',
                    '%26'
                );
                include "koneksi.php";
                $no = 1;
                $sql = mysqli_query($conn, "SELECT * FROM isi_pesan");
                $data = mysqli_fetch_assoc($sql);
                $enter = '%0A';
                ?>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Isi Pesan dan Data Siswa
                    </div>
                    <div class="card-body">
                        <p>
                            <?= urldecode($data['salam']); ?>
                            <br>
                            <?= urldecode($data['isi']); ?>
                            <br>
                            Nama : <?= @$nama ?>
                            <br>
                            Kelas : <?= @$kelas ?>
                            <br>
                            Besaran Administrasi Keuangan Sekolah : <?= @$jmlh_uang ?>
                            <br>
                            Bulan : <?= @$bulan ?>
                            <br>
                            <?= urldecode($data['penutup']); ?>
                        </p>
                    </div>
                    <?= "
                                        <a target=_blank href='https://wa.me/?text=" . $data['salam'] . "" . $enter . "" . $data['isi'] . "" . $enter . "Nama: " . @$nama . "" . $enter . "Kelas: " . @$kelas . "" . $enter . "Besaran Administrasi Keuangan Sekolah: " . @$jmlh_uang . "" . $enter . "Bulan: " . @$bulan . "" . $enter . "" . $data['penutup'] . "' data-action='share/whatsapp/share' class='m-2' >
                                        <button class='btn tombol-wa'> Kirim Pesan via WhatsApp </button></a>
                                        ";
                    ?>
                    <br>
                </div>
                <!-- <a href="whatsapp://send?text=<?= $salam_muslim ?><?= $tamu ?> <?= $di_tempat ?> <?= $isi ?><?= str_replace("+", "-", "$actual_link"); ?> <?= $penutup ?>" data-action="share/whatsapp/share" class="m-2">
                    <button class="btn tombol-wa"> Kirim Link via WhatsApp </button></a> -->
                <!-- ============= -->

                <br>
                <!-- ============= -->

            </div>
        </div>
    </div>
    <!-- ------------- -->
</div>

</div>
</main>
<script type="text/javascript">
    function copy_text() {
        document.getElementById("pilih").select();
        document.execCommand("copy");
        alert("Text berhasil dicopy");
    }
</script>
<?php
include "footer.php";
?>