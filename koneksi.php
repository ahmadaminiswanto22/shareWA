<?php
$conn = mysqli_connect("localhost", "root", "", "kirim_pesan");

if (mysqli_connect_errno()) {
    echo "koneksi database gagal:" . mysqli_connect_errno();
}
if (isset($_POST['simpan'])) {
    $salam = $_POST['salam'];
    $isi = $_POST['isi'];
    $penutup = $_POST['penutup'];
    $id = 22;
    // $salam = htmlspecialchars($_POST['salam']);
    // $isi = htmlspecialchars($_POST['isi']);
    // $penutup = htmlspecialchars($_POST['penutup']);
    // $id = 22;

    urlencode(mysqli_query($conn, "REPLACE INTO isi_pesan VALUES('$id','$salam','$isi','$penutup')"));
    // $query = "UPDATE isi_pesan SET
    //         id='$id',
    //         salam ='$salam ',
    //         isi='$isi',
    //         penutup='$penutup'
    //         WHERE id=$id
    //         ";
    // $update = urlencode($query);
    // var_dump($update);
    // exit();
    // urlencode(mysqli_query($conn, $query));
    if (mysqli_affected_rows($conn) > 0) {
        echo "
        <script>
            alert('Data Pesan Berhasil dibuat');
            document.location.href='tabel.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Data Pesan Gagal dibuat');
            document.location.href='tabel.php';
        </script>
        ";
    }
}
