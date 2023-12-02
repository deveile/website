<!DOCTYPE html>
<html lang="en">
<head>
<style>
        /* Styling untuk form */
        .form-container {
            width: 300px;
            margin: 0 auto;
            padding: 50px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        .form-container label {
            display: block;
            margin-bottom: 5px;
        }

        .form-container input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .form-container input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        .form-container input[type="submit"]:hover {
            background-color: #45a049;
        }

        /* Styling untuk tata letak */
        .container {
            display: flex;
            justify-content: space-between;
        }

        .container .left {
            width: 70%; /* Lebar tabel */
        }

        .container .right {
            width: 30%; /* Lebar formulir */
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA PRMINJAMAN ALAT RAVEN </title>
</head>
<body>
<li><a href="peminjaman.php">kembali</a></li>
    <?php
include 'koneksi.php';

if (isset($_POST['id_peminjaman']) && isset($_POST['id_anggota']) && isset($_POST['id_alat']) && isset($_POST['tanggal_peminjaman']) && isset($_POST['tanggal_pengembalian'])) {
    $id_peminjaman = $_POST['id_peminjaman'];   
    $anggota_id = $_POST['id_anggota'];
    $alat_id = $_POST['id_alat'];
	$tanggal_peminjaman = $_POST['tanggal_peminjaman'];
    $tanggal_pengembalian = $_POST['tanggal_pengembalian'];
	

    $query = "INSERT INTO peminjaman2 (id_peminjaman,id_anggota,id_alat,tanggal_peminjaman,tanggal_pengembalian) VALUES ('$id_peminjaman', '$id_anggota', '$id_alat', '$tanggal_peminjaman', '$tanggal_pengembalian')";

    if (mysqli_query($koneksi, $query)) {
        echo "Produk berhasil ditambahkan.";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
}

mysqli_close($koneksi);
?>
<div class="right">
            <div class="form-container">
                <h2>DATA PEMINJAMAN</h2>
                <form action="tambah-aksi_peminjaman.php" method="post">
                <label for="no_hp">Id Peminjaman:</label>
                    <input type="text" id="id_peminjaman" name="id_peminjaman"><br>
                    <label for="no_hp">id Anggota:</label>
					<td><select name="id_anggota">
					<option value="">-----</option>
 				<?php
  				include 'koneksi.php';
  				$query = mysqli_query($koneksi, "SELECT id_anggota,nama FROM anggota2") or die (mysqli_error($koneksi));
  
  				while($data = mysqli_fetch_array($query)){
    			echo "<option value=$data[id_anggota]>$data[nama]>$data[id_anggota]</option>";
  				}                          
  				?>
				 </select></td>
                 <label for="no_hp">Alat yang dipinjam:</label>
					<td><select name="id_alat">
					<option value="">-----</option>
 				<?php
  				include 'koneksi.php';
  				$query = mysqli_query($koneksi, "SELECT id_alat,nama,jenis,warna,kondisi FROM alat2") or die (mysqli_error($koneksi));
  
  				while($data = mysqli_fetch_array($query)){
    			echo "<option value=$data[id_alat]>$data[nama]>$data[jenis]>$data[warna]>$data[kondisi]>$data[id_alat]</option>";
  				}                          
  				?>
				 </select></td>
					<label for="no_hp">Tanggal Peminjaman:</label>
                    <input type="date" id="tanggal_peminjaman" name="tanggal_peminjaman"><br>
                    <label for="alamat">Tanggal Pengembalian:</label>
                    <input type="date" id="tanggal_pengembalian" name="tanggal_pengembalian"><br>
                    <input type="submit" value="Tambah">
                </form>
            </div>
        </div>
    </div>
</body>
</html>