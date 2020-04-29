<?php
include "../../config/koneksi.php";
$id_kelas = $_GET['id_kelas'];
$q = mysqli_query($koneksi, "SELECT * FROM tb_siswa where id_kelas='$id_kelas'");
$data = array();
foreach ($q as $s) {
  $data[] = $s;
}
echo json_encode($data);

?>
