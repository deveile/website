<!DOCTYPE html>
<html>
<body>
 
	<center>
 
		<h2>DATA PEMINJAMAN</h2>
		
 
	</center>
 
	<?php 
	include 'koneksi.php';
	?>
 
	<table border="1" style="width: 100%">
		<tr>
			<th width="1%">No</th>
            <th>ID PEMINJAMAN</th>
			<th>ID_ANGGOTA</th>
			<th>ID_ALAT</th>
            <th>TANGGAL PEMINJAMAN</th>
            <th>TANGGAL PENGEMBALIAN</th>
		</tr>
		<?php 
		$no = 1;
		$sql = mysqli_query($koneksi,"select * from peminjaman2");
		while($data = mysqli_fetch_array($sql)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $data['id_peminjaman']; ?></td>
			<td><?php echo $data['anggota_id']; ?></td>
			<td><?php echo $data['alat_id']; ?></td>
            <td><?php echo $data['tanggal_peminjaman']; ?></td>
            <td><?php echo $data['tanggal_pengembalian']; ?></td>
		</tr>
		<?php 
		}
		?>
	</table>
 
	<script>
		window.print();
	</script>
 
</body>
</html>