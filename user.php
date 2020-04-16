<?php
// aktif session php
session_start();
// menyambungkan ke koneksi
include 'koneksi.php';

// menangkap data dari form
$Username = $_POST['Username'];
$Password = $_POST['Password'];

// query
$query = mysqli_query($koneksi,"SELECT * FROM rental WHERE Username = '$Username' and Password = '$Password'");

$cek = mysqli_num_rows($query);

if ($cek > 0) {
    session_start();
    $_SESSION['username'] = $Username ;
    $_SESSION['status'] = "login";
    header("location: crud-user/crud.php"); 
} else {
    header("location: home.html");
}
?>