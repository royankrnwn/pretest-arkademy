<?php 

include "koneksi.php";

    $nama_produk = $_POST['nama_produk'];
    $keterangan  = $_POST['keterangan'];
    $harga       = $_POST['harga'];
    $jumlah      = $_POST['jumlah'];

$query = $con->prepare("INSERT INTO produk (nama_produk, keterangan, harga, jumlah) 
                        VALUES (:nama_produk, :keterangan, :harga, :jumlah)");

$query->bindparam(':nama_produk', $nama_produk); // menggunakan bindparam
$query->bindparam(':keterangan', $keterangan);
$query->bindparam(':harga', $harga);
$query->bindparam(':jumlah', $jumlah);

if($query->execute()) {
    echo "<script>alert('Data berhasil ditambahkan'); window.location='index.php';</script>";
} else {
    echo "<script>alert('Data gagal ditambahkan');</script>";
}


?>