<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MLG BIKE - DELETE DATA</title>
</head>
<body>
<?php
include 'koneksi.php';

$ID = $_GET ['ID'];

$query = "DELETE FROM rental WHERE ID = $ID";
$data = $koneksi->query($query);
$d= mysqli_affected_rows($koneksi);
header ("Location:crud.php");
?>
</body>
</html>