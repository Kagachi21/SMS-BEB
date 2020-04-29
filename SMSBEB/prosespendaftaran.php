<?php
   require_once("../config/koneksi.php");
   $username = $_POST['username'];
   $pass = $_POST['password'];
   $nis = $_POST ['nis'];
   $nik = $_POST ['nik'];
   $kode = $_POST ['kode'];
   $cekuser = mysqli_query($koneksi, "SELECT * FROM tb_ortu WHERE username = '$username'");
   if(mysqli_num_rows($cekuser) > 0) {
     echo "<script type='text/javascript'>alert('Username sudah terdaftar silahkan Login');
     history.back(self);
     </script>";
   } else {
     if(!$username || !$pass) {
       echo "<div align='center'>Masih ada data yang kosong! <a href='daftar.php'>Back</a>";
     } else {
       $simpan = mysqli_query($koneksi, "INSERT INTO tb_ortu(username, password, nis, nik, kode) VALUES('$username','$pass','$nis','$nik','$kode')");
       if($simpan) {
         echo "<script type='text/javascript'>alert('Penyimpanan Berhasil');
         history.back(self);
         </script>";
       } else {
         echo "<script type='text/javascript'>alert('Proses Gagal');
         history.back(self);
         </script>";
       }
     }
   }
?>
