<?php
include "../../config/koneksi.php";
session_start();
// echo "<pre>";
// print_r($_POST);
$d = $_POST;
for ($i=0; $i < count($d['status_absen']) ; $i++) {
    if ($d['status_absen'][$i] != '') {
        $nis = $d['nis'][$i];
        $kelas = $d['id_kelas'][$i];
        $mapel = $d['mapel'];
        $jam = $d['jam'][$i];
        $status = $d['status_absen'][$i];
        $q = "INSERT INTO tb_absen_pelajaran(nis, id_kelas, id_mapel, nip, jam, status_absen) VALUES('$nis', '$kelas', '$mapel', '$_SESSION[nip]', '$jam', '$status')";
        // echo $q."<br>";
        $qu = mysqli_query($koneksi, $q);
        if ($qu) {
            echo "<script>alert('berhasil tambah data');window.location='absen-mapel.php'</script>";
        }else{
            echo "<script>alert('gagal tambah data');window.location='form.php'</script>";
        }
    }
}
?>
