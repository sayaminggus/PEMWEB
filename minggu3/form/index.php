<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>TAMBAH DATA</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h2>TAMBAH DATA</h2>
    <div class="formu">
      <form action="process.php" method="post">
        <label for="nrp">NRP :</label>
        <input type="text" name="nrp" value="">
        <label for="nama">Nama :</label>
        <input type="text" name="nama" value="">
        <label for="alamat">Alamat :</label>
        <input type="text" name="alamat" value="">
        <label for="jurusan">Jurusan</label>
        <select name="jurusan">
          <option value="13">Teknik Informatika</option>
          <option value="14">Teknik Elektro</option>
          <option value="15">Teknik Telekomunikasi</option>
        </select>
        <input type="submit" value="Upload">
      </form>
    </div>
  </body>
</html>
