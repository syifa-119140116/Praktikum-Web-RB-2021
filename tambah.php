<?php
//include file koneksi ke database
include "koneksi.php";
//menerima nilai dari kiriman form
$nim=$_POST["nim"];
$nama=$_POST["nama"];
$prodi=$_POST["prodi"];
$angkatan=$_POST["angkatan"];

//Query input menginput data kedalam tabel mahasiswa
$sql="insert into mahasiswa (nim,nama,prodi,angkatan) values('$nim','$nama','$prodi','$angkatan')";

//mengeksekusi/menjalankan query diatas
$hasil=mysqli_query($kon,$sql);

?>