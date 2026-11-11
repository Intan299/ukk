<?php
include "koneksi.php";

if(isset($_POST['username']) && isset($_POST['password'])){
    $username =$_POST['username'];
    $password =$_POST['password'];

    $sql = "select * from login where username='$username' AND password='$password'";
    $query = mysqli_query($koneksi,$sql);

    $jumlah=mysqli_num_rows(result: $query);
    if($jumlah>0){
    header(header:'Location: login.php');
    }
    else{
        header(header: 'Location: proses_login.php?error=login');
    }
}
else{
    echo 'username and password salah';
}

?>

