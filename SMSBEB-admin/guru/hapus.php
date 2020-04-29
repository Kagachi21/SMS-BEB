<?php 
include "../../config/koneksi.php";
$q = Delete("WHERE nip=$_GET[nip]", "tb_guru");
if ($q) {
    echo "<script>alert('berhasil hapus data');window.location='guru.php'</script>";
  }else{
    echo "<script>alert('gagal hapus data');window.location='guru.php'</script>";
  }
?>