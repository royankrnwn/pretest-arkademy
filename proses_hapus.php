<?php 

include "koneksi.php";

$id = $_GET['id'];
$param = array(':id' => $id);

$query = $con->prepare("DELETE FROM produk WHERE id = :id");

if($query->execute($param)) {
    echo "<script>alert('Data berhasil dihapus'); window.location='index.php';</script>";
} else {
    echo "<script>alert('Data gagal dihapus'); window.location='index.php';</script>";
}

?>