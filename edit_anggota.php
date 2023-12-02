<!DOCTYPE html>
<html>
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
	
	<title>DATA ANGGOTA RAVEN</title>
</head>
<body>
 
	<Center><h2>EDIT DATA ANGGOTA RAVEN </h2></center>
	<br/>
	<a href="anggota.php">KEMBALI</a>
	<br/>
	<br/>
	<?php
	include 'koneksi.php';
	$id = $_GET['id_anggota'];
	$data = mysqli_query($koneksi,"select * from anggota2 WHERE id_anggota='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		 <div class="right">
        <div class="form-container">
		<form method="post" action="edit-aksi_anggota.php">
			<table>
				<tr>			
					<td>id_anggota</td>
					<td>
						<input type="hidden" name="id_anggota" value="<?php echo $d['id_anggota']; ?>">
						<input type="text" name="id_anggota" value="<?php echo $d['id_anggota']; ?>">
					</td>
				</tr>
				<tr>
					<td>Nama</td>
					<td><input type="text" name="nama" value="<?php echo $d['nama']; ?>"></td>
				</tr>

				<tr>
					<td>Kelas</td>
					<td><input type="text" name="kelas" value="<?php echo $d['kelas']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<th><input type="submit" value="SIMPAN"
                            onclick="return confirm('APAKAH ANDA YAKIN?')"></th>
				</tr>		
			</table>
		</form>
		</div>
        </div>
		<?php 
	}
	?>
 
</body>
</html>