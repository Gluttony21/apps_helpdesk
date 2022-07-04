<?php
require('../config/koneksi.php');
$nama = $_POST['nama_teknisi'];
$gender = $_POST['gender_teknisi'];
header('Content-Type: text/xml');
$qcode = mysqli_query($koneksi, "SELECT MAX(id_teknisi) AS max_code FROM tbl_teknisi");
$d = mysqli_fetch_array($qcode);
$a = $d['max_code'];
$urut = (int)substr($a, 1, 3);
$urut++;
$id = "T" . sprintf("%03s", $urut);
if($qcode){
    $query = mysqli_query($koneksi, "INSERT INTO tbl_teknisi(id_teknisi,nama_teknisi,gender_teknisi) VALUES('$id','$nama','$gender')");
    if ($query) {
        $respons = [
            'success' => 1,
            'message' => "berhasil simpan"
        ];
        echo json_encode($respons);
    } else {
        $respons = [
            'success' => 0,
            'message' => "gagal simpan"
        ];
        echo json_encode($respons);
    }
}