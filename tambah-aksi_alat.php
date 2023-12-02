<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id_alat = $_POST['id_alat'];
$nama = $_POST['nama'];
$jenis = $_POST['jenis'];
$warna = $_POST['warna'];
$jumlah = $_POST['jumlah'];
$kondisi = $_POST['kondisi'];
$penanggung_jawab = $_POST['penanggung_jawab'];

 
// menginput data ke database
mysqli_query($koneksi,"INSERT INTO alat2 VALUES('$id_alat','$nama', '$jenis', '$warna', '$jumlah', '$kondisi', '$penanggung_jawab')");
 
// mengalihkan halaman kembali ke index.php                       
header("location:alat.php");
 
?>