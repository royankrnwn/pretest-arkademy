<?php
include "koneksi.php";
?>

<?php
    include_once('template/head.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Produk</title>
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
	
	<h3><i class="fa fa-pencil"></i>Edit Data Produk</h3>
	<form class="form-horizontal" action="proses_edit.php" method="post">
		<?php
		$id = $_GET['id'];

		$query = $con->prepare("SELECT * FROM Produk WHERE id = :id"); 
		$query->bindValue(':id', $id); 
		$query->execute();
		$data = $query->fetch();
		?>		
		<div class="container">
			<div class="form-group">
				 <label for="nama" class="col-sm-2 control-label">Nama Produk</label>
                <div class="col-sm-4">
					<input type="hidden" name="id" class="form-control" value="<?php echo $data['id'] ?>">
					<input type="text" name="nama_produk" class="form-control" value="<?php echo $data['nama_produk'] ?>" required>
				 </div>
            </div>	
			 <div class="form-group">
                <label for="keterangan" class="col-sm-2 control-label">keterangan</label>
                <div class="col-sm-4">
				<input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Masukan keterangan" value="<?php echo $data['keterangan'] ?>" required>			
			</div>
            </div>	

			 <div class="form-group">
                <label for="harga" class="col-sm-2 control-label">harga</label>
                <div class="col-sm-4">
				<input type="text" class="form-control" id="harga" name="harga" value="<?php echo $data['harga'] ?>" required>			
				</div>
            </div>

			<div class="form-group">
                <label for="jumlah" class="col-sm-2 control-label">jumlah</label>
                <div class="col-sm-4">
				<input type="text" name="jumlah" class="form-control" id="jumlah" value="<?php echo $data['jumlah'] ?>" required>            
			</div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-4">
                <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
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
<?php
    include_once('template/script.php');
?>
</html>

