<!DOCTYPE html>
<html>
<body>
 
	<center>
 
		<h2>DATA ALAT</h2>
		
 
	</center>
 
	<?php 
	include 'koneksi.php';
	?>
 
	<table border="1" style="width: 100%">
		<tr>
			<th width="1%">No</th>
            <th>ID ALAT</th>
			<th>NAMA</th>
			<th>JENIS</th>
			<th>WARNA</th>
			<th>JUMLAH</th>
            <th>KONDISI</th>
            <th>PENANGGUNG JAWAB</th>
		</tr>
		<?php 
		$no = 1;
		$sql = mysqli_query($koneksi,"select * from alat2");
		while($data = mysqli_fetch_array($sql)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $data['id_alat']; ?></td>
			<td><?php echo $data['nama']; ?></td>
			<td><?php echo $data['jenis']; ?></td>
			<td><?php echo $data['warna']; ?></td>
			<td><?php echo $data['jumlah']; ?></td>
            <td><?php echo $data['kondisi']; ?></td>
            <td><?php echo $data['penanggung_jawab']; ?></td>
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