<?php
require('../config/koneksi.php');
$id = $_POST['id_pc'];
$nama = $_POST['nama_pc'];
$tipe = $_POST['tipe_pc'];
header('Content-Type: text/xml');
$query = mysqli_query($koneksi, "UPDATE tbl_pc SET nama_pc = '$nama', tipe_pc = '$tipe' WHERE id_pc = '$id'");
if ($query) {
    $respons = [
        'success' => 1,
        'message' => "berhasil Update"
    ];
    echo json_encode($respons);
} else {
    $respons = [
        'success' => 0,
        'message' => "gagal Update"
    ];
    echo json_encode($respons);
}