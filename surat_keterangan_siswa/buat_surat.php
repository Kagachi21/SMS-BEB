<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Form Surat Keterangan </title>
	<style type="text/css">
		body {
			background-image: url(gambar/background.jpg);
			background-repeat: no-repeat;
			position: fixed;
			width: 100%;
			height: 100%;
			background-size: 100%;

		}
		.container {
			position: center;
			height: 600px;
			width: 700px;
			margin: auto;
			background-color: #2d7d6387;
			color: white;
			text-align: center;
}
			
	}
	.halaman {
		text-align: center;
		font-family: late;
		font-weight: bold;
		padding-top: 20px;
	}
	table {
		margin: auto;
	}
	.table td {
		padding-bottom: 20px;
	}


	</style>
</head>
<body>
	<div class="coverBg"></div>
	<div class="container">
		<h1 class="halaman"> SURAT KETERANGAN </h1>
	<form method="post" action="proses_simpan_surat.php">
	<table class="table">
	<tr>
		<td> </td>
	</tr>
	<tr>
		<td> NIS </td>
		<td> : </td> 
		<td> <input type="text" name="NIS" witdh="60px" required> </td>
	</tr>
	<tr>
		<td> </td>
	</tr>
	<tr>
		<td> Nama </td>
		<td> : </td> 
		<td> <input type="text" name="Nama" witdh="60px" required> </td>
	</tr>
	<tr>
		<td> </td>
	</tr>
	<tr>
		<td> Kelas </td>
		<td> : </td> 
		<td> <input type="text" name="Kelas" required> </td>
	</tr>
	<tr>
		<td> </td>
	</tr>
	<tr>
		<td> Jurusan </td>
		<td> : </td> 
		<td> <input type="text" name="Jurusan" required> </td>
	</tr>
	<tr>
		<td> </td>
	</tr>
	<tr>
		<td> Keterangan </td>
		<td> : </td> 
		<td> <textarea cols="22" rows="3" name="Keterangan" required></textarea> </td>
	</tr>
	<tr>
		<td> </td>
	</tr>
	<tr>
		<td> Upload Bukti Surat Keterangan </td>
		<td> : </td> 
		<td> <input type="file" name="image" class="form-control"> </td>
	</tr>
	<tr>
		<td> </td>
	</tr>
	<tr>
		<td> </td>
	</tr>
	<tr>
		<td> <input type="submit" name="submit" value="simpan"> </td>
	</tr>
</div>
	</table>
</form>
</body>
</html>