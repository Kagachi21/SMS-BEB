<?php
   require_once("Pendaftaran/koneksi.php");
   $username = $_POST['username_ortu'];
   $pass = $_POST['password_ortu'];
   $Nik = $_POST['nik'];
   $Nis = $_POST['nis'];
   $kode = $_POST['kode'];
   $foto = $_POST['foto_ktp'];
   $cekuser = mysql_query("SELECT * FROM tb_ortu WHERE username_ortu = '$username'");
   if(mysql_num_rows($cekuser) > 0) {
     echo "<div align='center'>Username Sudah Terdaftar! <a href='daftarakun.php'>Back</a></div>";
   } else {
     if(!$username || !$pass) {
       echo "<div align='center'>Masih ada data yang kosong! <a href='daftarakun.php'>Back</a>";
     } else {
       $simpan = mysql_query("INSERT INTO tb_ortu(username_ortu, password_ortu, nik, nis, kode, foto_ktp) VALUES('$username','$pass','$Nik','$Nis','$kode','$foto')");
       if($simpan) {
         echo "<div align='center'>Pendaftaran Sukses, Silahkan <a href='index.php'>Login</a></div>";
       } else {
         echo "<div align='center'>Proses Gagal!</div>";
       }
     }
   }
?>
