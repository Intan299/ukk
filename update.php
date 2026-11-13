<?php
include 'koneksi.php';

$id = $_GET['id'];

$data = mysqli_query($koneksi, "select * from barang where barang_id='$id'");
$d = mysqli_fetch_array($data);
?>

<!DOCTYPE html>
<html>
<head>
    <title>UPDATE BARANG</title>
</head>
<body>

<h2>UPDATE DATA BARANG</h2>

<form method="post" action="">
    <table>
        <tr>
            <td>Nama Barang</td>
            <td><input type="text" name="nama" value="<?php echo $d['nama_barang']; ?>"></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td><input type="number" name="harga" value="<?php echo $d['harga']; ?>"></td>
        </tr>
        <tr>
            <td>Stok</td>
            <td><input type="number" name="stok" value="<?php echo $d['stok']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="simpan" value="SIMPAN"></td>
        </tr>
    </table>
</form>

<a href="barang.php">KEMBALI</a>

<?php
if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];

    mysqli_query($koneksi, "update barang set nama_barang='$nama', harga='$harga', stok='$stok' where barang_id='$id'");

    header("location:barang.php");
}
?>

</body>
</html>
