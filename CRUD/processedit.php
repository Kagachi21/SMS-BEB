<?php 
    // apabila tombol update di klik
    // maka lakukan
    if (isset($_POST['update'])) {
        // menmanggil koneksi.php
        include 'koneksi.php';

        // untuk menampung isian form ke dalam variabel
        $id = $_POST['id'];
        $nim = $_POST['nim'];
        $namaDepan = $_POST['namaDepan'];
        $namaBelakang = $_POST['namaBelakang'];
        $alamat = $_POST['alamat'];
        $jKelamin = $_POST['jKelamin'];
        $kelas = $_POST['kelas'];

        // query update yang disimpan dalam variabel
        $query = "UPDATE tb_siswa SET nim='$nim', nama_depan='$namaDepan', nama_belakang='$namaBelakang', alamat='$alamat', jenis_kelamin='$jKelamin', kelas='$kelas' WHERE id='$id'";

        // kondisi untuk mengecek query gagal atau berhasil
        if(mysqli_query($host, $query)){
        // apabila berhasil
        echo "
            <script>
            alert ('Berhasil update data');
            document.location.href = 'index.php';
            </script>
        ";
        } else {
        // apabila gagal
        echo "
            <script>
            alert ('Gagal mengupdate data');
            document.location.href = 'index.php';
            </script>
        ";
        }
    }
?>