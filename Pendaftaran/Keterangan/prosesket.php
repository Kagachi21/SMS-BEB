<?php
   require_once("konek.php");
   $Tanggal = $_POST['tanggal'];
   $Keterangan = $_POST['keterangan'];
   $Fotoket = $_POST['foto'];
   $cektanggal = mysql_query("SELECT * FROM tb_keterangan WHERE username = '$Tanggal'");
   if($cektanggal > 0) {
     echo "<div align='center'>Tanggal tidak benar <a href='keterangan.php'>Back</a></div>";
   } else {
     if(!$Tanggal) {
       echo "<div align='center'>Masih ada data yang kosong! <a href='keterangan.php'>Back</a>";
     } else {
       $simpan = mysql_query("INSERT INTO tb_keterangan(tanggal, keterangan, foto) VALUES('$Tanggal','$Keterangan','$Fotoket')");
       if($simpan) {
         echo "<div align='center'>Pendaftaran Sukses, Silahkan <a href='keterangan.php'>kemabali</a></div>";
       } else {
         echo "<div align='center'>Proses Gagal!</div>";
       }
     }
   }
?>
