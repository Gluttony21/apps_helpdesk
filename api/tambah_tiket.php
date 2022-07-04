<?php
require('../config/koneksi.php');
date_default_timezone_set('asia/jakarta');
$id_karyawan = $_POST['id_karyawan'];
$nama_karyawan = $_POST['nama_karyawan'];
$keluhan = $_POST['keluhan'];
$image = date('dmYHis') . str_replace(" ", "", basename($_FILES['image']['name']));
$Path = "../images/" . $image;
move_uploaded_file($_FILES['image']['tmp_name'], $Path);
$tgl_buat = date('Y-m-d');
$sts = 1;
header('Content-Type: text/xml');
$qcode = mysqli_query($koneksi, "SELECT MAX(id_tiket) AS max_code FROM tbl_tiket");
$d = mysqli_fetch_array($qcode);
$a = $d['max_code'];
$urut = (int)substr($a, 6, 3);
$urut++;
$my= date('ym');
$id = "IT". $my . sprintf("%03s", $urut);
if($qcode){
    $query = mysqli_query($koneksi, "INSERT INTO tbl_tiket(id_tiket,id_karyawan,nama_karyawan,keluhan,foto,tgl_buat,status) VALUES('$id','$id_karyawan','$nama_karyawan','$keluhan','$image','$tgl_buat','$sts')");
    $v = var_dump($query);
    if ($query) {
        $respons = [
            'success' => 1,
            'message' => "tiket berhasil dibuat"
        ];
        echo json_encode($respons);
    } else {
        $respons = [
            'success' => 0,
            'message' => "gagal"
        ];
        echo json_encode($respons);
    }
}