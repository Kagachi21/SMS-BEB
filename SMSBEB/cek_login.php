<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include '../config/koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"SELECT * FROM tb_siswa WHERE nis='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
// cek apakah username dan password di temukan pada database
if($cek > 0){

	$data = mysqli_fetch_assoc($login);
	$_SESSION['nis'] = $data['nis'];
	$_SESSION['level'] = "siswa";
	header("location:dashboard/user.php");

	}
else {
	
	$login = mysqli_query($koneksi,"SELECT * FROM tb_ortu WHERE username='$username' and password='$password'");
	// menghitung jumlah data yang ditemukan
	$cek = mysqli_num_rows($login);
	if ($cek  > 0) {
		// code...
		$data = mysqli_fetch_assoc($login);
		$_SESSION['nik'] = $data['nik'];
		$_SESSION['nis'] = $data['nis'];
		$_SESSION['level'] = "ortu";
		header("location:dashboard/user.php");
	}else {
		$login = mysqli_query($koneksi,"SELECT * FROM tb_guru WHERE nip='$username' and password='$password'");
		// menghitung jumlah data yang ditemukan
		$cek = mysqli_num_rows($login);
		if ($cek  > 0) {
			// code...
			$data = mysqli_fetch_assoc($login);
			$_SESSION['nip'] = $data['nip'];
			$_SESSION['username'] = $data['nama'];
			$_SESSION['level'] = "guru";
			header("location:../SMSBEB-guru/absensi/absen-mapel.php");
		}else {
			$login = mysqli_query($koneksi,"SELECT * FROM tb_admin WHERE username='$username' and password='$password'");
			// menghitung jumlah data yang ditemukan
			$cek = mysqli_num_rows($login);
			if ($cek  > 0) {
				// code...
				$data = mysqli_fetch_assoc($login);
				$_SESSION['username'] = $data['username'];
				$_SESSION['level'] = "admin";
				header("location:../SMSBEB-admin/siswa/data-siswa.php");
			}else {
				// header("location:index.php?pesan=gagal");
			}
		}
	}
}
?>
