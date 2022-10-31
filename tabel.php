<?php
$judul = 'Buku Tamu Digital';
include "header.php";
include 'koneksi.php';

?>

<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Data Isi Pesan
    </div>
    <div class="card-body">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-success mb-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Buat Pesan
        </button>
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th class="text-center" style="width: 1%;">No</th>
                    <th class="text-center" style="width: 19%;">Salam</th>
                    <th class="text-center" style="width: 50%;">Isi</th>
                    <th class="text-center" style="width: 30%;">Penutup</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "koneksi.php";
                $no = 1;
                $sql = mysqli_query($conn, "SELECT * FROM isi_pesan");
                while ($data = mysqli_fetch_assoc($sql)) {
                ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $data['salam']; ?></td>
                        <td><?= $data['isi']; ?></td>
                        <td><?= $data['penutup']; ?></td>
                    </tr>
                <?php
                }
                ?>

            </tbody>
        </table>
    </div>
</div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Isi Pesan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="koneksi.php" method="post">
                    <div class="mb-3">
                        <label for="salam" class="form-label">Salam</label>
                        <input type="text" class="form-control" name="salam" id="salam" placeholder="example: Assalamualaikum ">
                    </div>
                    <div class="mb-3">
                        <label for="isi" class="form-label">Isi Pesan</label>
                        <textarea class="form-control" name="isi" id="isi" rows="4"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="isi" class="form-label">Penutup</label>
                        <textarea class="form-control" name="penutup" id="penutup" rows="2"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-sm" name="simpan">Simpan</button>
                    </div>
                </form>

            </div>

        </div>
    </div>
</div>
</main>
<?php
include "footer.php";
?>