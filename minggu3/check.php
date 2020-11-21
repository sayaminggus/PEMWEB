<?php
include'connection.php';

$query = "select * from mahasiswa inner join jurusan on mahasiswa.ID_Jur = jurusan.ID_Jur where mahasiswa.Nama='Anin'";
$hasil  =mysqli_query($connect, $query);

$nama = array();

while ($d = mysqli_fetch_array($hasil)) {
  $nama[] = $d;
}
echo json_encode($nama);
?>
