<?php
include "koneksi.php";

if (isset($_POST['username']) && isset($_POST['password'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $akses = $_POST['akses'];

    $sql = "select * from login where username='$username'and password='$password' and akses='$akses'";

    $query = mysqli_query($koneksi, $sql);

    if (mysqli_num_rows($query) > 0) {

        if ($akses == "admin") {
            header("Location: backend.php");
            exit;
        } else {
            header("Location: backend_petugas.php");
            exit;
        }

    } else {
        echo "Username atau password salah!";
    }

} else {
    echo "Data login belum lengkap!";
}
?>
