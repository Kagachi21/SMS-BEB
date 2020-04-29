<?php
// Load file koneksi.php
include "koneksi.php";
// Ambil Data yang Dikirim dari Form
$tanggal = $_POST['tanggal_ket'];
$keterangan = $_POST['jenis_ket'];
$nis = $_POST['nis'];
$foto = $_FILES['foto_ket']['name'];
$tmp = $_FILES['foto_ket']['tmp_name'];

// Rename nama fotonya dengan menambahkan tanggal dan jam upload
$fotobaru = date('dmYHis').$foto;
// Set path folder tempat menyimpan fotonya
$path = "foto/".$fotobaru;
// Proses upload
if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
  // Proses simpan ke Database
  $query = "INSERT INTO tb_keterangan SET tanggal_ket='$tanggal',jenis_ket='$keterangan',foto_ket='$fotobaru',nis='$nis'";
  $sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    echo "<script type='text/javascript'>alert('Penyimpanan Berhasil');
    history.back(self);
    </script>";
  }else{
    // Jika Gagal, Lakukan :
    echo "<script type='text/javascript'>alert('Proses Gagal');
    history.back(self);
    </script>";
  }
}else{
  // Jika gambar gagal diupload, Lakukan :
  echo "<script type='text/javascript'>alert('Data Kurang Valid');
  history.back(self);
  </script>";
}
?>
