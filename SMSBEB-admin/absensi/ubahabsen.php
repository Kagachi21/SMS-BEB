<?php
include "../../config/koneksi.php";
session_start();
// echo "<pre>";
// print_r($_POST);
$d = $_POST;
$qu = "";
for ($i=0; $i < count($d['status_absen']) ; $i++) {
    if ($d['status_absen'][$i] != '') {
        $id = $d['id'][$i];
        $kelas = $d['id_kelas'][$i];
        $mapel = $d['mapel'];
        $jam = $d['jam'][$i];
        $status = $d['status_absen'][$i];
        $q = "UPDATE tb_absen_pelajaran SET status_absen='$status' WHERE id='$id'";
        // echo $q."<br>";
        $qu = mysqli_query($koneksi, $q);
    }
}
if ($qu) {
    echo "<script>alert('berhasil ubah data');window.location='absen-mapel.php'</script>";
}else{
    echo "<script>alert('gagal ubah data');window.location='form.php'</script>";
}
?>
