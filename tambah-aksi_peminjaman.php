<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form

$id_peminjaman = $_POST['id_peminjaman'];
$id_anggota = $_POST['id_anggota'];
$id_alat = $_POST['id_alat'];
$tanggal_peminjaman = $_POST['tanggal_peminjaman'];
$tanggal_pengembalian = $_POST['tanggal_pengembalian'];


 
// menginput data ke database
mysqli_query($koneksi,"INSERT INTO peminjaman2 VALUES('$id_peminjaman','$id_anggota', '$id_alat', '$tanggal_peminjaman', '$tanggal_pengembalian')");
 
// mengalihkan halaman kembali ke index.php                       
header("location:peminjaman.php");
 
?>