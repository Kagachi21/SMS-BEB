<?php
   session_start();
   if(isset($_SESSION['tanggal'])) {
   header('location:index.php'); }
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Form Keterangan</title>
    <link rel="stylesheet" type="text/css" href="ket.css">
  </head>
  <body>
    <div class="header">
      <h2>Keterangan</h2>
    </div>
    <form action="prosesket.php" method="post">

    <div class="input-group">
      <label>Tanggal</label>
      <input type="date" name="tanggal">
    </div>
    <div class="input-group">
      <label>Keterangan</label>
    </div>
      <input type="radio" name="keterangan" value="sakit">Sakit
      <input type="radio" name="keterangan" value="ijin">Ijin
    <div class="input-group">
      <label>Surat Keterangan</label>
      <input type="file" name="foto" placeholder="Foto SURAT"required>
    </div>
      <button type="submit" class="btn">SIMPAN</button>

  </form>
</body>
</html>
