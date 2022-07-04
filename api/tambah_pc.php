<?php
require('../config/koneksi.php');
$nama = $_POST['nama_pc'];
$tipe = $_POST['tipe_pc'];
header('Content-Type: text/xml');
$qcode = mysqli_query($koneksi, "SELECT MAX(id_pc) AS max_code FROM tbl_pc");
$d = mysqli_fetch_array($qcode);
$a = $d['max_code'];
$urut = (int)substr($a, 2, 3);
$urut++;
$id = "PC" . sprintf("%03s", $urut);
if($qcode){
    $query = mysqli_query($koneksi, "INSERT INTO tbl_pc(id_pc,nama_pc,tipe_pc) VALUES('$id','$nama','$tipe')");
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