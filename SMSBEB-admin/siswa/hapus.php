<?php 
include "../../config/koneksi.php";
$q = Delete("WHERE nis=$_GET[id]", "tb_siswa");
if ($q) {
    echo "<script>alert('berhasil hapus data');window.location='data-siswa.php'</script>";
  }else{
    echo "<script>alert('gagal hapus data');window.location='data-siswa.php'</script>";
  }
?>