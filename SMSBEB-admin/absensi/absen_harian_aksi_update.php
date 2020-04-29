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



$host = mysqli_connect("localhost", "root", "", "db_sms");

$r = $_POST["json"];

$jsonArr = json_decode($r, true);

function status($rStatus){
    switch($rStatus){
        case "hadir":
            return 1;
        case "hadir_t":
            return 2;
        case "tidak_h":
            return 3;
        }
}

foreach($jsonArr as $t){
    $nis = $t["nis"];
    $tStamp = $t["timestamp"];
    $status = status($t["status_hadir"]);
    $kelas = $t["kelas"];
    mysqli_query($host, "UPDATE tb_absen_harian SET status_absen = '$status' WHERE nis = '$nis' AND timestamp = '$tStamp'");
}

echo json_response(200, 'working');

?>