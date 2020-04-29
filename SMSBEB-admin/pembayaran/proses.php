<?php
include "../../config/koneksi.php";
$d = $_POST;
$f = $_FILES;
  // if ($_GET['input']) {
    if ($_GET['type'] == 'add') {
      $q = insert($_POST, "tb_pembayaran");
      if ($q) {
        echo "<script>alert('berhasil tambah data');window.location='pembayaran.php'</script>";
      }else{
        echo "<script>alert('gagal tambah data');window.location='form.php'</script>";
      }
    }else if($_GET['type'] == 'edit'){
        
        $arr = [
          'nis' => $d['nis'],
          'tanggal' => $d['tanggal'],
          'jenis_pembayaran' => $d['jenis_pembayaran'],
          'deskripsi' => $d['deskripsi']
        ];
        
        $q = Update($arr, "WHERE nis=$d[nis]", "tb_pembayaran");      
        if ($q) {
          echo "<script>alert('berhasil ubah data');window.location='pembayaran.php'</script>";
        }else{
          echo "<script>alert('gagal ubah data');window.location='form.php?type=edit&nis=$d[nis]'</script>";
        }
    }
?>
