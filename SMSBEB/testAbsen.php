<?php

include "koneksi.php";
$tO = $_POST["id_tahun"];
$nis = $_POST["nis"];
$kelas = $_POST["kelas"];

$tQ = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM tb_tahun_ajaran WHERE tahun_ajaran = '$tO'"));
$awal = $tQ["awal"]; $akhir = $tQ["akhir"];

$queryAbsen = mysqli_query($koneksi, "SELECT * FROM tb_absen_harian WHERE nis = '$nis' AND id_kelas = '$kelas' AND DATE(timestamp) BETWEEN '$awal' AND '$akhir'");

$holder = [];

while($data = mysqli_fetch_array($queryAbsen)){
    array_push($holder, [$data["status_absen"], $data["timestamp"]]);
}

echo json_encode($holder);
