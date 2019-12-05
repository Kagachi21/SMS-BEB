<?php 
    // memanggil koneksi.php
    include 'koneksi.php';

    // menangkap isian id pada tabel
    // disimpan dalam variabel
    $id = $_GET['id'];

    // query untuk menghapus data dengan id tertentu
    mysqli_query($host, "DELETE FROM tb_siswa WHERE id='$id'");

    // kondisi untuk mengecek apakah query berhasil atau tidak
    if (mysqli_affected_rows($host) > 0) {
        // apabila berhasil
    echo "
        <script>
        alert ('Data berhasil dihapus');
        document.location.href = 'index.php';
        </script>
    ";
    } else {
        // apabila gagal
    echo "
        <script>
        alert ('Data gagal dihapus');
        document.location.href = 'index.php';
        </script>
    ";
    }

    
?>