<?php 
include "koneksi.php";

$params = [
    "id"    => $_POST['id'],
    "nama_produk" => $_POST['nama_produk'],
    "keterangan"  => $_POST['keterangan'],
    "harga"       => $_POST['harga'],
    "jumlah"      => $_POST['jumlah'],
  ];

$sql = "UPDATE produk SET
            nama_produk   = :nama_produk,
            keterangan    = :keterangan,
            harga         = :harga,
            jumlah        = :jumlah
        WHERE id = :id";
$query = $con->prepare($sql);
if($query->execute($params)) { 
    echo "<script>alert('Data berhasil diedit'); window.location='index.php';</script>";
} else {
    echo "<script>alert('Data gagal diedit');</script>";
}


?>