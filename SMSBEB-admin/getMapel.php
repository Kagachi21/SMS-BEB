<?php
include "../config/koneksi.php";
$kelas = $_GET['kelas'];
$qq = mysqli_query($koneksi, "SELECT * FROM tb_kelas where id='$kelas'");
$d = mysqli_fetch_array($qq);
// print_r($kelas);
$q = mysqli_query($koneksi, "SELECT * FROM tb_mapel where jurusan='$d[tipe_kelas]'");
$data = array();
foreach ($q as $s) {
  $data[] = $s;
}
echo json_encode($data);

?>
