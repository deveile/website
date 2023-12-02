<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form

$id_anggota = $_POST['id_anggota'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];


 
// menginput data ke database
mysqli_query($koneksi,"INSERT INTO anggota2 VALUES('$id_anggota','$nama','$kelas')");
 
// mengalihkan halaman kembali ke index.php                       
header("location:anggota.php");
 
?>