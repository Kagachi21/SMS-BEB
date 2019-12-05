<?php
if ($_POST('submit')=="simpan")
{
	$nis = $_POST('NIS');
	$nama = $_POST('Nama');
	$kelas = $_POST('Kelas');
	$jurusan = $_POST('Jurusan');
	$keterangan = $_POST('Keterangan');

	if (empty($nis))
	{
		echo "<script> alert (NIS belum di isi) </script>";
		echo "<meta http-equiv='refresh' content='1 url=buat_surat.php'>";
	}
	else if (empty($nama))
	{
		echo "<script> alert (Nama belum di isi) </script>";
		echo "<meta http-equiv='refresh' content='1 url=buat_surat.php'>";
	}
	else if (empty($kelas))
	{
		echo "<script> alert (Kelas belum di isi) </script>";
		echo "<meta http-equiv='refresh' content='1 url=buat_surat.php'>";
	}
	else if (empty($jurusan))
	{
		echo "<script> alert (Kelas belum di isi) </script>";
		echo "<meta http-equiv='refresh' content='1 url=buat_surat.php'>";
	}
	else if (empty($keterangan))
	{
		echo "<script> alert (Keterangan belum di isi) </script>";
		echo "<meta http-equiv='refresh' content='1 url=buat_surat.php'>";
	}
	else
	{
		$db = mysqli_connect("localhost", "id3032441_amaldi")
		$simpan = mysqli_query ($db, "INSERT into simpan_data(NIS,Nama,Kelas,Jurusan,Keterangan) values ('$NIS', '$Nama', '$Kelas', '$Jurusan', '$Keterangan')");
		if ($simpan)
		{
			echo "<script> alert ('Berhasil Disimpan') </script>";
			echo "<meta http-equiv='refresh' content='1 url=buat_surat.php'>";
		}
		else
		{
			echo "<script> alert ('Gagal Menyimpan') </script>";
			echo "<meta http-equiv='refresh' content='1 url=buat_surat.php'>";
		}
	}
}

?>
	