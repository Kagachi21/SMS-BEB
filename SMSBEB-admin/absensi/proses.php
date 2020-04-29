<?php
include "../../config/koneksi.php";
session_start();
// echo "<pre>";
// print_r($_POST);
$d = $_POST;
$q = "";
for ($i=0; $i < count($d['status_absen']) ; $i++) {
    if ($d['status_absen'][$i] != '') {

        $nis = $d['nis'][$i];
        $kelas = $d['kelas'];
        $type = $d['type'];
        $tanggal = date('Y-m-d H:i:s');
        $status = $d['status_absen'][$i];
        $now = date('Y-m-d');
        // echo "SELECT * FROM tb_absen_harian WHERE nis='$nis' and tanggal like '%$tanggal%' and type='$type'";
        $cek = mysqli_query($koneksi, "SELECT * FROM tb_absen_harian WHERE nis='$nis' and tanggal like '%$now%' and type='$type'");
        $jumlah = mysqli_num_rows($cek);
        echo $jumlah;
        if($jumlah < 1){
            $q = "INSERT INTO tb_absen_harian(nis, tanggal, status_absen, id_kelas, type) VALUES('$nis', '$tanggal', '$status','$kelas', '$type')";;
            $qu = mysqli_query($koneksi, $q);

        }else{
            $q = "UPDATE tb_absen_harian SET status_absen='$status' WHERE nis='$nis' and tanggal like '%$now%'";
            $qu = mysqli_query($koneksi, $q);
        }
    }
}
if ($qu) {
        echo "<script>alert('berhasil ubah data');window.location='absen-harian.php'</script>";
    }else{
        echo "<script>alert('gagal ubah data');window.location='form.php'</script>";
    }
?>
