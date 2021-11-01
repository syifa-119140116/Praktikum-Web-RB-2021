<?php
include "koneksi.php";
$id = $_POST["nim"];

$sql = "delete from mahasiswa where nim='".$nim."'";
$hasil = mysqli_query($kon,$sql);
?>