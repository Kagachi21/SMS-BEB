<?php
include "../../config/koneksi.php";
$d = $_POST;
$f = $_FILES;
  // if ($_GET['input']) {
    if ($_GET['type'] == 'add') {
      $type = str_replace("image/", "", $_FILES['foto']['type']);
      $nametodb = $d['nis'].".".$type;
      move_uploaded_file($_FILES['foto']['tmp_name'], "../../foto/siswa/".$nametodb);
      $_POST['foto'] = $nametodb;
      // $q = "INSERT INTO tb_siswa (".implode(',', array_keys($_POST)).") VALUES ('".implode("', '", array_values($_POST))."')";
      // mysqli_query($koneksi, $q);
      $q = insert($_POST, "tb_siswa");
      if ($q) {
        echo "<script>alert('berhasil tambah data');window.location='data-siswa.php'</script>";
      }else{
        echo "<script>alert('gagal tambah data');window.location='form.php'</script>";
      }
    }else if($_GET['type'] == 'edit'){
        
        $arr = [
          'nis' => $d['nis'],
          'nama' => $d['nama'],
          'email' => $d['email'],
          'jenis_kelamin' => $d['jenis_kelamin'],
          'id_kelas' => $d['id_kelas'],
          'alamat' => $d['alamat'],
          'tempat_lahir' => $d['tempat_lahir'],
          'tanggal_lahir' => $d['tanggal_lahir'],
          'no_hp' => $d['no_hp']
        ];
        if ($f['foto']['name'] != '') {
          $type = str_replace("image/", "", $_FILES['foto']['type']);
          $arr['foto'] = $d['nis'].".".$type;
          move_uploaded_file($_FILES['foto']['tmp_name'], "../../foto/siswa/".$arr['foto']);
        }
        if ($d['password'] != '') {
          $arr['password'] = $d['password'];
        }
        $q = Update($arr, "WHERE nis=$d[nis]", "tb_siswa");      
        if ($q) {
          echo "<script>alert('berhasil ubah data');window.location='data-siswa.php'</script>";
        }else{
          echo "<script>alert('gagal ubah data');window.location='form.php?type=edit&nis=$d[nis]'</script>";
        }
    }
?>
