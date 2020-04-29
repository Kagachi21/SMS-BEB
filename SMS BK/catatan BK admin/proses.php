<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$tanggal        = date("Y-m-d H:i:s");
$nis            = $_POST['nis'];
$kasus          = $_POST['kasus'];
$deskripsi      = $_POST['deskripsi'];
$point          = $_POST['point'];
$ceknis = mysqli_query($koneksi,"SELECT * FROM tb_siswa WHERE nis = '$nis'");
$data = mysqli_fetch_array($ceknis);
$nissiswa = $data["nis"];
if($nis==$nissiswa){
  $simpan = mysqli_query($koneksi,"INSERT INTO tb_bk(tanggal, nis, kasus, deskripsi, point) VALUES('$tanggal', '$nis', '$kasus', '$deskripsi', '$point')");
  if($simpan) {
    echo "<script type='text/javascript'>alert('Penyimpanan Berhasil');
    history.back(self);
    </script>";
  }else {
    echo "<script type='text/javascript'>alert('Proses Gagal');
    history.back(self);
    </script>";
  }
}else {
  echo "<script type='text/javascript'>alert('NIS tidak terdeteksi');
  history.back(self);
  </script>";
}

?>
