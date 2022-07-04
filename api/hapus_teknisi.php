<?php
require('../config/koneksi.php');
$id = $_POST['id_teknisi'];
header('Content-Type: text/html');
$query = mysqli_query($koneksi, "DELETE FROM tbl_teknisi WHERE id_teknisi = '$id'");
if ($query) {
    $respons = [
        'success' => 1,
        'message' => "berhasil delete"
    ];
    echo json_encode($respons);
} else {
    $respons = [
        'success' => 0,
        'message' => "gagal delete"
    ];
    echo json_encode($respons);
}