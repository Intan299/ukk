<?php
include 'koneksi.php';

$user_id = $_GET['id'];
mysqli_query($koneksi, "delete from customer where user_id='$user_id'");

header("location:index.php");

?>