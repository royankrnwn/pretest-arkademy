<?php
    include_once('template/head.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Produk</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href='https://yukcoding.blogspot.com/favicon.ico' rel='icon' type='image/x-icon'/>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

</head>
<body>
	<div class="judul">	
        <a href="index.php">	
		<img src="arkademy.png" width="200" align="left" margin-top="10" /></a>
        <h1>Web Produk Arkademy</h1>
    </div>

	<br />
	<div class="container">
	<a href="index.php">
		<button>< Lihat Semua Data Produk</button>
	</a>

	<h3><i class="fa fa-plus"></i>Tambah Produk Baru</h3>
	<form id="inputproduk" class="form-horizontal" method="post"action="proses_tambah.php" method="post">		
		<div class="form-group">
                <label for="nama_produk" class="col-sm-2 control-label">Nama Produk</label>
                <div class="col-sm-4">
                <input type="text" class="form-control" id="nama_produk" name="nama_produk" placeholder="Masukan nama" required>
                </div>
            </div>

            <div class="form-group">
                <label for="keterangan" class="col-sm-2 control-label">Keterangan</label>
                <div class="col-sm-4">
                <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Masukan keterangan" required>
                </div>
            </div>


            <div class="form-group">
                <label for="harga" class="col-sm-2 control-label">Harga</label>
                <div class="col-sm-4">
                <input type="harga" class="form-control" id="harga" name="harga" placeholder="Masukan harga" required>
                </div>
            </div>

            <div class="form-group">
                <label for="jumlah" class="col-sm-2 control-label">Jumlah</label>
                <div class="col-sm-4">
                <input type="jumlah" class="form-control" id="jumlah" name="jumlah" placeholder="Masukan jumlah" required>
                </input>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-4">
                <button type="submit" class="btn btn-info">Tambah</button>
                </div>
            </div>
            </form>
        </div>
    </div>

    <footer>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <p class="text-center">Royan Kurniawan - Copyright &copy; 2020</p>
    </footer>
</body>
</html>

