<?php

include "koneksi.php";
?>

<?php 
    include_once('template/head.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>ARKADEMY</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="judul">		
		<a href="index.php">	
		<img src="arkademy.png" width="200" align="left" margin-top="10" /></a>
		<h1>Web Produk Arkademy</h1>
	</div>


	<br />

	<div class="container">
		<a href="form_tambah.php" class="btn btn-info"><i class="fa fa-plus"></i>Tambah Data Baru</a>

		<br><br>
	

	<h3>Data Produk Arkademy</h3>
	<div style="overflow: auto;" >
		<table class="table table-striped table-bordered table-hover" id="tb-user">
			<thead>
			<tr>
				<th>No</th>
				<th><center>Nama</center></th>
             	<th><center>Keterangan</center></th>
             	<th><center>Harga</center></th>
             	<th><center>Jumlah</center></th>
				<th><center>Opsi</center></th>		
			</tr>
			</thead>
			<tbody>
			<?php 
			$query = $con->query("SELECT * FROM produk"); // tampil menggunakan method query
			$nomor = 1;

			while($data = $query->fetch(PDO::FETCH_ASSOC)) { ?>
				<tr>
					<td align="center"><?php echo $nomor++; ?>.</td>
					<td align="center"><?php echo $data['nama_produk']; ?></td>
					<td align="center"><?php echo $data['keterangan']; ?></td>
					<td align="center"><?php echo $data['harga']; ?></td>
					<td align="center"><?php echo $data['jumlah']; ?></td>
					<td width="90px" align="center">
						<a href="form_edit.php?id=<?php echo $data['id']; ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil">UBAH</i></a> 
						<a href="proses_hapus.php?id=<?php echo $data['id']; ?>" onclick="return confirm('Yakin hapus data?')"
							class="btn btn-danger btn-xs"><i class="fa fa-trash">HAPUS</i></a>	
					</td>
				</tr>
			<?php
			} ?>
			</tbody>
		</table>
	</div>
	 <footer>
       <p class="text-center">Royan Kurniawan - Copyright &copy; 2020</p>
    </footer>
</body>
<?php 
    include_once('template/script.php');
?>
</html>
