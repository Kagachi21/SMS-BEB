<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"SELECT * FROM tb_siswa WHERE username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){

	$data = mysqli_fetch_assoc($login);
	$_SESSION['nis'] = $data['nis'];
	header("location:user.php");

	}
else {
	
	$login = mysqli_query($koneksi,"SELECT * FROM tb_ortu WHERE username_ortu='$username' and password_ortu='$password'");
	// menghitung jumlah data yang ditemukan
	$cek = mysqli_num_rows($login);
	if ($cek  > 0) {
		// code...
		$data = mysqli_fetch_assoc($login);
		$_SESSION['nik'] = $data['nik'];
		header("location:ortu.php");
	}else {
	header("location:index.php?pesan=gagal");
	}
}
?>
