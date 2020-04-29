<?php 
include "../../config/koneksi.php";
$q = Delete("WHERE id=$_GET[id]", "tb_jadwal");
if ($q) {
    echo "<script>alert('berhasil hapus data');window.location='jadwal.php'</script>";
  }else{
    echo "<script>alert('gagal hapus data');window.location='jadwal.php'</script>";
  }
?>