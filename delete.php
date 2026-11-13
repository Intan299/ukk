<?php
include 'koneksi.php';

$barang_id = $_GET['id'];
mysqli_query($koneksi, "delete from barang where barang_id='$barang_id'");

header("location:barang.php");
exit;

?>