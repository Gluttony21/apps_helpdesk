<?php
require('../config/koneksi.php');
$id = $_POST['id_teknisi'];
$nama = $_POST['nama_teknisi'];
$gender = $_POST['gender_teknisi'];
header('Content-Type: text/xml');
$query = mysqli_query($koneksi, "UPDATE tbl_teknisi SET nama_teknisi = '$nama',  gender_teknisi = '$gender' WHERE id_teknisi = '$id'");
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