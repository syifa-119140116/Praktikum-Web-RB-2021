<?php
include "koneksi.php";
$id = $_GET["id"];

$sql = "delete from toko_roti where id='".$id."'";
$hasil = mysqli_query($kon,$sql);
?>