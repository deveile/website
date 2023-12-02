<?php 
 
include 'koneksi.php';
$id_peminjaman = $_POST['id_peminjaman'];
$id_anggota = $_POST['id_anggota'];
$id_alat = $_POST['id_alat'];
$tanggal_peminjaman = $_POST['tanggal_peminjaman'];
$tanggal_pengembalian = $_POST['tanggal_pengembalian'];

 
mysqli_query($koneksi,"UPDATE peminjaman2 SET id_anggota ='$id_anggota', id_alat='$id_alat', tanggal_peminjaman='$tanggal_peminjaman', tanggal_pengembalian='$tanggal_pengembalian' WHERE  id_peminjaman='$id_peminjaman'");
 
header("location:peminjaman.php?pesan=update");
 
?>