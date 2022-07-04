<?php
require('../config/koneksi.php');
header('Content-Type: text/xml');
if($_POST['status'] == 2){
    $id = $_POST['id_tiket'];
    $teknisi = $_POST['teknisi'];
    $status = $_POST['status'];
    $query = mysqli_query($koneksi, "UPDATE tbl_tiket SET teknisi = '$teknisi',status = '$status' WHERE id_tiket = '$id'");
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
}else{
    $id = $_POST['id_tiket'];
    $status = $_POST['status'];
    $tgls = $_POST['tgl_selesai'];
    $query = mysqli_query($koneksi, "UPDATE tbl_tiket SET status = '$status', tgl_selesai = '$tgls' WHERE id_tiket = '$id'");
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
}