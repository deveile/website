<?php 
 
include 'koneksi.php';
$id_anggota = $_POST['id_anggota'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
 
mysqli_query($koneksi,"UPDATE anggota2 SET nama='$nama', kelas='$kelas'  WHERE  id_anggota='$id_anggota'");
 
header("location:anggota.php?pesan=update");
 
?>