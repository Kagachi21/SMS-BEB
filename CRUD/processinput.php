<?php
  // apabila tombol input di klik
  // maka lakukan tugas
  if (isset($_POST['input'])) {
    // memanggil koneksi.php untuk koneksi database
    include 'koneksi.php';

    // menangkap inputan dari form, dan simpan ke dalam variabel
    $nim = $_POST['nim'];
    $namaDepan = $_POST['namaDepan'];
    $namaBelakang = $_POST['namaBelakang'];
    $alamat = $_POST['alamat'];
    $jKelamin = $_POST['jKelamin'];
    $kelas = $_POST['kelas'];

    // fungsi mysqli_query() untuk insert ke database
    mysqli_query($host, "INSERT INTO tb_siswa VALUES('','$nim','$namaDepan','$namaBelakang','$alamat','$jKelamin','$kelas')");

    // apabila mysqli_affected_rows($host) > 0
    // (query berhasil)
    if (mysqli_affected_rows($host) > 0) {
      // apabila berhasil, maka muncul alert berhasil
      echo "
        <script>
          alert ('Data berhasil diinput');
          document.location.href = 'index.php';
        </script>
      ";
    } else {
      // apabila gagal maka muncul alert gagal
      echo "
        <script>
          alert ('Gagal menginput data');
          document.location.href = 'index.php';
        </script>
      ";
    }
  }
  
?>
