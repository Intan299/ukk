<?php
session_start();
include "koneksi.php";

if(isset($_POST['username']) && isset($_POST['password'])){
    $username =$_POST['username'];
    $password =$_POST['password'];

    $sql = "select * from login where username='$username' AND password='$password' AND akses= 'admin'";
    $query = mysqli_query(mysql:$koneksi, query:$sql);
    
     $_SESSION['username'] = $username;
     $_SESSION['akses'] = 'admin';

    $jumlah=mysqli_num_rows(result: $query);
    if($jumlah>0){
    header(header:'Location: backend.php');
    }
    else{
        header(header: 'Location: proses_loginadmin.php?error=login');
    }
}
else{
    echo 'username and password salah';
}

?>