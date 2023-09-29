<?php 
// menghubungkan dengan koneksi
include 'koneksi.php';
// menghubungkan dengan library excel reader
include "excel_reader2.php";
?>
 
<?php
// upload file xls
$target = basename($_FILES['filexls']['name']) ;
move_uploaded_file($_FILES['filexls']['tmp_name'], $target);
 
// beri permisi agar file xls dapat di baca
chmod($_FILES['filexls']['name'],0777);
 
// mengambil isi file xls
$data = new Spreadsheet_Excel_Reader($_FILES['filexls']['name'],false);
// menghitung jumlah baris data yang ada
$jumlah_baris = $data->rowcount($sheet_index=0);
 
// jumlah default data yang berhasil di import
$berhasil = 0;
for ($i=2; $i<=$jumlah_baris; $i++){
 
	// menangkap data dan memasukkan ke variabel sesuai dengan kolumnya masing-masing
	$salam     = $data->val($i, 1);
	$isi   = $data->val($i, 2);
	$penutup  = $data->val($i, 3);
 
	if($salam != "" && $isi != "" && $penutup != ""){
		// input data ke database (table data_pegawai)
		mysqli_query($conn,"REPLACE into isi_pesan values(22,'$salam','$isi','$penutup')");
		$berhasil++;
	}
}
 
// hapus kembali file .xls yang di upload tadi
unlink($_FILES['filexls']['name']);
 
// alihkan halaman ke index.php
header("location:tabel.php?berhasil=$berhasil");
?>