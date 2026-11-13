<?php
include "koneksi.php";

if (isset($_POST['simpan'])) {
    $customer_id = $_POST['customer_id'];
    $barang_id = $_POST['barang_id'];
    $jumlah = $_POST['jumlah'];
    $tanggal = date('Y-m-d');

    $data = mysqli_query($koneksi, "select * from barang where barang_id='$barang_id'");
    $b = mysqli_fetch_array($data);

    if ($b && $jumlah > 0 && $jumlah <= $b['stok']) {

        $total = $b['harga'] * $jumlah;

        mysqli_query($koneksi, "insert into admin (tanggal, total, customer_id) values ('$tanggal', '$total', '$customer_id')");

        $admin_id = mysqli_insert_id($koneksi);

        mysqli_query($koneksi, "insert into detail (admin_id, barang_id, jumlah, total) values ('$admin_id', '$barang_id', '$jumlah', '$total')");

        mysqli_query($koneksi, "update barang set stok=stok-'$jumlah' where barang_id='$barang_id'");

        header("location:kasir.php");
        exit;

    } else {
        echo "Stok barang tidak cukup!";
    }
}

$customer = mysqli_query($koneksi, "select * from customer");
$barang = mysqli_query($koneksi, "select * from barang");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Kasir</title>
</head>
<body>

<h1>TANTICA KASIR</h1>
<h2>FORM TRANSAKSI</h2>

<form method="post">
    <table>
        <tr>
            <td>Customer</td>
            <td>
                <select name="customer_id" required>
                    <?php while ($c = mysqli_fetch_array($customer)) { ?>
                        <option value="<?php echo $c['customer_id']; ?>">
                            <?php echo $c['nama']; ?>
                        </option>
                    <?php } ?>
                </select>
            </td>
        </tr>

        <tr>
            <td>Barang</td>
            <td>
                <select name="barang_id" required>
                    <?php while ($b = mysqli_fetch_array($barang)) { ?>
                        <option value="<?php echo $b['barang_id']; ?>">
                            <?php echo $b['nama_barang']; ?>
                        </option>
                    <?php } ?>
                </select>
            </td>
        </tr>

        <tr>
            <td>Jumlah</td>
            <td><input type="number" name="jumlah" min="1" required></td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" name="simpan" value="SIMPAN"></td>
        </tr>
    </table>
</form>

</body>
</html>
