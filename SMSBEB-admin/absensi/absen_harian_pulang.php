<?php
function json_response($code = 200, $message = null)
{
    // clear the old headers
    header_remove();
    // set the actual code
    http_response_code($code);
    // set the header to make sure cache is forced
    header("Cache-Control: no-transform,public,max-age=300,s-maxage=900");
    // treat this as json
    header('Content-Type: application/json');
    $status = array(
        200 => '200 OK',
        400 => '400 Bad Request',
        422 => 'Unprocessable Entity',
        500 => '500 Internal Server Error'
        );
    // ok, validation error, or failure
    header('Status: '.$status[$code]);
    // return the encoded json
    return json_encode(array(
        'status' => $code < 300, // success or not?
        'message' => $message
        ));
}

$kelas = $_POST["kelas"];
$date = $_POST["tanggal"];
$host = mysqli_connect("localhost", "root", "", "db_sms");
$queryKelas = mysqli_query($host, "SELECT * FROM tb_siswa WHERE id_kelas = '$kelas'");



while($data = mysqli_fetch_array($queryKelas)){
    $nis = $data["nis"];
    $kelas = $data["id_kelas"];
    mysqli_query($host, "INSERT INTO tb_absen_harian VALUES('$nis','$date','Pulang','$kelas')");
}

echo json_response(200, 'working');
