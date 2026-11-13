<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Backend Petugas</title>
</head>
<body>

<h2>TANTICA KASIR</h2>
<h3>HALAMAN PETUGAS</h3>

<p>Selamat datang, <?php echo $_SESSION['username']; ?></p>

<ul>
    <li><a href="transaksi.php">Transaksi</a></li>
    <li><a href="barang.php">Data Barang</a></li>
    <li><a href="customer.php">Data Customer</a></li>
    <li><a href="laporan.php">Laporan</a></li>
    <li><a href="logout.php">Logout</a></li>
</ul>

</body>
</html>
