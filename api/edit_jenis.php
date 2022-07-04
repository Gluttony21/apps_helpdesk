<?php
require('../config/koneksi.php');
$id = $_POST['id_jenis'];
$jenis = $_POST['jenis'];
header('Content-Type: text/xml');
$query = mysqli_query($koneksi, "UPDATE tbl_jenis SET jenis = '$jenis' WHERE id_jenis = '$id'");
if ($query) {
    $respons = [
        'success' => 1,
        'message' => "berhasil update"
    ];
    echo json_encode($respons);
} else {
    $respons = [
        'success' => 0,
        'message' => "gagal update"
    ];
    echo json_encode($respons);
}