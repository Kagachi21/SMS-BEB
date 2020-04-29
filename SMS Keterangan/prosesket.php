<?php
// Load file koneksi.php
include "konek.php";
// Ambil Data yang Dikirim dari Form
$tanggal = $_POST['tanggal_ket'];
$keterangan = $_POST['jenis_ket'];
$foto = $_FILES['foto_ket']['name'];
$tmp = $_FILES['foto_ket']['tmp_name'];

// Rename nama fotonya dengan menambahkan tanggal dan jam upload
$fotobaru = date('dmYHis').$foto;
// Set path folder tempat menyimpan fotonya
$path = "foto/".$fotobaru;
// Proses upload
if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
  // Proses simpan ke Database
  $query = "INSERT INTO tb_keterangan SET tanggal_ket='$tanggal',jenis_ket='$keterangan',foto_ket='$fotobaru'";
  $sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("location: keterangan.php"); // Redirect ke halaman index.php
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='keterangan.php'>Kembali Ke Form</a>";
  }
}else{
  // Jika gambar gagal diupload, Lakukan :
  echo "Maaf, Gambar gagal untuk diupload.";
  echo "<br><a href='keterangan.php'>Kembali Ke Form</a>";
}
?>
