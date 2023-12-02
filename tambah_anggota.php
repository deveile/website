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
    <title>DATA ANGGOTA RAVEN </title>
</head>
<body>
<li><a href="anggota.php">kembali</a></li>
    <?php
include 'koneksi.php';

if ( isset($_POST['id_anggota']) &&isset($_POST['nama']) && isset($_POST['kelas']) ) {
    $id_anggota = $_POST['id_anggota'];
    $nama = $_POST['nama'];
	$kelas = $_POST['kelas'];

    $query = "INSERT INTO anggota2 (id_anggota,nama,kelas) VALUES ('$id_anggota', '$nama', '$kelas')";

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
                <h2>DATA ANGGOTA RAVEN</h2>
                <form action="tambah-aksi_anggota.php" method="post">
                <label for="no_hp">id_anggota:</label>
                    <input type="text" id="id_anggota" name="id_anggota"><br>    
                <label for="no_hp">Nama:</label>
                    <input type="text" id="nama" name="nama"><br>
					<label for="no_hp">Kelas:</label>
                    <input type="text" id="kelas" name="kelas"><br>
                    <input type="submit" value="Tambah">
                </form>
            </div>
        </div>
    </div>
</body>
</html>