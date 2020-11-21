<?php
$server = "localhost";
$user = "root";
$pass = "";
$datab = "mhs_pens";

$connect = new mysqli($server, $user, $pass, $datab);

if ($connect->connect_error) {
  die("Koneksi Gagal: ".$connect->connect_error);
}
 ?>
