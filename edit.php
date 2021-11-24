<?php
include "koneksi.php";

$id = $_POST["id"];
$tawar = $_POST["tawar"];
$cokelat = $_POST["cokelat"];
$keju = $_POST["keju"];

$sql = "update toko_roti set tawar='".$tawar."', cokelat='".$cokelat."', keju='".$keju."' where id = '".$id."' ";
$hasil = mysqli_query($kon,$sql);
?>