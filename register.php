<?php
include "koneksi.php";

if (isset($_POST['daftar'])) {
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $cek = mysqli_query($koneksi, "select * from login WHERE username='$username'");

    if (mysqli_num_rows($cek) > 0) {
        echo "Username sudah digunakan!";
    } else {
        $simpan = mysqli_query($koneksi, "insert into login (nama, username, password, akses)
        values ('$nama', '$username', '$password', 'admin')");

        if ($simpan) {
            header("Location: login.php");
            exit;
        } else {
            echo "Register gagal!";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>

<h2>REGISTER ADMIN</h2>

<form method="POST">
    Nama:<br>
    <input type="text" name="nama" required><br><br>

    Username:<br>
    <input type="text" name="username" required><br><br>

    Password:<br>
    <input type="password" name="password" required><br><br>

    <button type="submit" name="daftar">Daftar</button>
</form>

<p>Sudah punya akun? <a href="login.php">Login</a></p>

</body>
</html>
