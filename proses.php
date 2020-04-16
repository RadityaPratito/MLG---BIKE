<?php
include 'koneksi.php';

$Username = $_POST ['Username'];
$Password = $_POST ['Password'];

$koneksi->query("insert into rental (Username,Password) values ('$Username','$Password')");
header ("location:crud.php");
?>