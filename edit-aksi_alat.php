<?php 
 
include 'koneksi.php';
$id_alat = $_POST['id_alat'];
$nama = $_POST['nama'];
$jenis = $_POST['jenis'];
$warna = $_POST['warna'];
$jumlah = $_POST['jumlah'];
$kondisi = $_POST['kondisi'];
$penanggung_jawab = $_POST['penanggung_jawab'];

 
mysqli_query($koneksi,"UPDATE alat2 SET nama='$nama', jenis='$jenis', warna='$warna', jumlah='$jumlah', kondisi='$kondisi', penanggung_jawab='$penanggung_jawab'  WHERE  id_alat='$id_alat'");
 
header("location:alat.php?pesan=update");
 
?>