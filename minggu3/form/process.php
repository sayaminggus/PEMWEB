<?php
include '../connection.php';
$nrp = $_POST['nrp'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jurusan = $_POST['jurusan'];

mysqli_query($connect, "insert into mahasiswa (NRP, Nama, Alamat, ID_Jur) values ('$nrp', '$nama', '$alamat', '$jurusan')");

header("location:index.php");
?>
