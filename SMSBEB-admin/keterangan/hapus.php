<?php 
include "../../config/koneksi.php";
$q = Delete("WHERE id=$_GET[id]", "tb_keterangan");
if ($q) {
    echo "<script>alert('berhasil hapus data');window.location='surat-keterangan.php'</script>";
  }else{
    echo "<script>alert('gagal hapus data');window.location='surat-keterangan.php'</script>";
  }
?>