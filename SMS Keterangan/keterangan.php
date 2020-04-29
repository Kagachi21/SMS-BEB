<!DOCTYPE html>
<html>
  <head>
    <title>Form Keterangan</title>
    <link rel="stylesheet" type="text/css" href="admin/ket.css">
  </head>
  <body>
    <div class="header">
      <h2>Keterangan</h2>
    </div>
    <form method="post" action="prosesket.php" enctype="multipart/form-data">
  <table cellpadding="8">
    <td>Tanggal</td>
    <td><input type="date" name="tanggal_ket"></td>
  </tr>
  <tr>
    <td>Keterangan</td>
    <td>
    <input type="radio" name="jenis_ket" value="Ijin"> Ijin
    <input type="radio" name="jenis_ket" value="Sakit"> Sakit
    </td>
  </tr>
  <tr>
    <td>Foto</td>
    <td><input type="file" name="foto_ket"></td>
  </tr>
  </table>

  <hr>
  <input type="submit" value="Simpan">
  <a href="admin/index.php"><input type="button" value="Batal"></a>
  </form>
</body>
</html>
