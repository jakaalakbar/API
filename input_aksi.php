<?php 
include 'koneksi.php';

$nama       = $_POST['nama'];
$julukan    = $_POST['julukan'];
$stadium    = $_POST['stadium'];

mysqli_query($conn, "INSERT INTO tim_favorit VALUES('','$nama','$julukan','$stadium')");
 
header("location:index.php?page=timFavorit");
