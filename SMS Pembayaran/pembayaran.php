<?php
   session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Form Pembayaran</title>
    <link rel="stylesheet" type="text/css" href="pembayaran.css">
  </head>
  <body>
    <div class="header">
      <h2>Status Pembayaran</h2>
    </div>
    <form action="proses.php" method="post">

    <div class="input-group">
      <label> NIS </label>
      <input type="text" name="nis">
    </div>
    <div class="input-group">
      <label>Tanggal</label>
      <input type="date" name="tgl_pembayaran">
    </div>
    <div class="input-group">
      <label>Jumlah Tagihan</label>
      <input type="text" name="jml_tagihan">
    </div>
    <div class="input-group">
      <label>Jenis Pembayaran</label>
      <select type="text" name="jenis_pembayaran">
        <option>SPP Tahun 1</option>
        <option>SPP Tahun 2</option>
        <option>SPP Tahun 3</option>
        <option>Study Tour</option>
      </select>
    </div>

    <div class="input-group">
      <label>Status</label>
    </div>
      <input type="radio" name="status" value="LUNAS">Lunas
      <hr>
      <button type="submit" class="btn">SIMPAN</button>

  </form>
</body>
</html>
