<?php
   include 'koneksi.php';

   $nis = $_POST['nis'];
   $tanggal = date("Y-m-d H:i:s");
   $tagihan = $_POST['jml_tagihan'];
   $jenis = $_POST['jenis_pembayaran'];
   $status = $_POST['status'];

$ceknis = mysqli_query($koneksi,"SELECT * FROM tb_siswa WHERE nis = '$nis'");
$data = mysqli_fetch_array($ceknis);
$nissiswa = $data["nis"];
if($nis==$nissiswa){
  $simpan = mysqli_query($koneksi,"INSERT INTO tb_pembayaran(nis, tgl_pembayaran, jml_tagihan, jenis_pembayaran, status) VALUES('$nis', '$tanggal', '$tagihan', '$jenis', '$status')");
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
