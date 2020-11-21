<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CARI DATA</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h2>CARI DATA</h2>
    <div class="searchnav">
      <form action="index.php" method="post">
        <label for="nama">Nama :</label>
        <input type="text" name="nama" value="">
        <input type="submit" value="Cari">
      </form>
      <table border="1">
        <tr>
          <th>Nama</th>
          <th>NRP</th>
          <th>Alamat</th>
          <th>Jurusan</th>
        </tr>
        <?php
        include '../connection.php';

        if (strlen($_POST['nama']) != 0) {
        $nama = $_POST['nama'];

        $mydata = mysqli_query($connect, "select * from mahasiswa inner join jurusan on mahasiswa.ID_Jur = jurusan.ID_Jur where mahasiswa.Nama='$nama'");
        while ($d = mysqli_fetch_array($mydata)) {
        ?>
        <tr>
          <td><?php echo $d[1]?></td>
          <td><?php echo $d[0]?></td>
          <td><?php echo $d[2]?></td>
          <td><?php echo $d[5]?></td>
        </tr>
      <?php } }?>
      </table>
    </div>
  </body>
</html>
