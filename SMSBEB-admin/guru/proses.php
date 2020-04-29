<?php
include "../../config/koneksi.php";
$d = $_POST;
$f = $_FILES;
  // if ($_GET['input']) {
    if ($_GET['type'] == 'add') {
      // $type = str_replace("image/", "", $_FILES['foto']['type']);
      // $nametodb = $d['nis'].".".$type;
      // move_uploaded_file($_FILES['foto']['tmp_name'], "../../foto/siswa/".$nametodb);
      // $_POST['foto'] = $nametodb;
      $q = insert($_POST, "tb_guru");
      if ($q) {
        echo "<script>alert('berhasil tambah data');window.location='guru.php'</script>";
      }else{
        echo "<script>alert('gagal tambah data');window.location='form.php'</script>";
      }
    }else if($_GET['type'] == 'edit'){

        $arr = [
          'nip' => $d['nip'],
          'nama' => $d['nama'],
          'email' => $d['email'],
          'alamat' => $d['alamat'],
        ];
        if ($d['password'] != '') {
          $arr['password'] = $d['password'];
        }
        $q = Update($arr, "WHERE id=$d[id]", "tb_guru");      
        if ($q) {
          echo "<script>alert('berhasil ubah data');window.location='guru.php'</script>";
        }else{
          echo "<script>alert('gagal ubah data');window.location='form.php?type=edit&nis=$d[nis]'</script>";
        }
    }
?>
