<html>
<head>
  <title>Aplikasi CRUD Plus Upload Gambar dengan PHP</title>
</head>
<body>
  <h1>Data Siswa</h1>
  <a href="keterangan.php">Tambah Data</a><br><br>
  <table border="1" width="100%">
  <tr>
    <th>ID</th>
    <th>Tanggal</th>
    <th>Keterangan</th>
    <th colspan="2">Aksi</th>
  </tr>
  <?php
  // Load file koneksi.php
  include "konek.php";

  $query = "SELECT * FROM tb_keterangan"; // Query untuk menampilkan semua data siswa
  $sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query

  while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
    echo "<tr>";
	  echo "<td>".$data['id_ket']."</td>";
    echo "<td><img src='foto/".$data['foto_ket']."' width='100' height='100'></td>";
    echo "<td>".$data['tanggal_ket']."</td>";
    echo "<td>".$data['jenis_ket']."</td>";
    echo "<td><a href='form_ubah.php?keterangan=".$data['jenis_ket']."'>Ubah</a></td>";
    echo "<td><a href='proses_hapus.php?keterangan=".$data['jenis_ket']."'>Hapus</a></td>";
    echo "</tr>";
  }
  ?>
  </table>
</body>
</html>
