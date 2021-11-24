<?php
//include file koneksi ke database
include "koneksi.php";
//menerima nilai dari kiriman form
$id=$_POST["id"];
$tawar=$_POST["tawar"];
$cokelat=$_POST["cokelat"];
$keju=$_POST["keju"];

//Query input menginput data kedalam tabel mahasiswa
$sql="insert into toko_roti (id,tawar,cokelat,keju) values('$id','$tawar','$cokelat','$keju')";

//mengeksekusi/menjalankan query diatas
$hasil=mysqli_query($kon,$sql);

?>