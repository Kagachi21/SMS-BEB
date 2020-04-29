<?php
include "../../config/koneksi.php";
$d = $_POST;
$f = $_FILES;
  // if ($_GET['input']) {
    if ($_GET['type'] == 'add') {
      // $q = "INSERT INTO tb_siswa (".implode(',', array_keys($_POST)).") VALUES ('".implode("', '", array_values($_POST))."')";
      // mysqli_query($koneksi, $q);
      $q = insert($_POST, "tb_jadwal");
      if ($q) {
        echo "<script>alert('berhasil tambah data');window.location='jadwal.php'</script>";
      }else{
        echo "<script>alert('gagal tambah data');window.location='form.php'</script>";
      }
    }else if($_GET['type'] == 'edit'){
        
        $arr = [
          'nip' => $d['nip'],
          'id_kelas' => $d['id_kelas'],
          'id_mapel' => $d['id_mapel'],
          'hari' => $d['hari'],
          'jam' => $d['jam']
        ];
        $q = Update($arr, "WHERE id=$d[id]", "tb_jadwal");      
        if ($q) {
          echo "<script>alert('berhasil ubah data');window.location='jadwal.php'</script>";
        }else{
          echo "<script>alert('gagal ubah data');window.location='form.php?type=edit&nis=$d[nis]'</script>";
        }
    }
?>
