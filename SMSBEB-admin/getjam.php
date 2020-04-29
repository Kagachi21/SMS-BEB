<?php
include "../config/koneksi.php";
$hari = $_GET['hari'];
$kelas = $_GET['kelas'];
$mapel = $_GET['mapel'];
$qq = mysqli_query($koneksi, "SELECT * FROM tb_jadwal where id_kelas='$kelas' and id_mapel='$mapel' and hari='$hari'");
$d = mysqli_fetch_array($qq);
$cek = mysqli_num_rows($qq);
// print_r($kelas);
// $q = mysqli_query($koneksi, "SELECT * FROM tb_mapel where jurusan='$d[tipe_kelas]'");
$data = array();
foreach ($qq as $s) {
  $data[] = $d['jam'];
}
$loop = [];
for ($i=1; $i <= 10; $i++) { 
    if (!in_array($i, $data)) {
        $loop[] = $i;
    }
}
// echo "<pre>";
// print_r($loop);
// print_r($d);
// print_r($data);
echo json_encode($loop);

?>
