<?php
require('../config/koneksi.php');
$username = $_POST['username'];
$password = md5($_POST['password']);
header('Content-Type: text/xml');
$query = mysqli_query($koneksi, "SELECT * FROM tbl_admin WHERE username ='$username' AND password = '$password'");
$row = mysqli_fetch_array($query);
$count = mysqli_num_rows($query);
if ($count > 0) {
    $respons = [];
    $respons = [
        'id_admin' => $row['id_admin'],
        'username' => $row['username'],
        'nama' => $row['nama'],
        'level' => $row['level'],
        'success' => 1,
        'message' => 'login berhasil'
    ];
    echo json_encode($respons);
} else {
    $respons = [
        'success' => 0,
        'message' => 'user tidak ada ' . $count
    ];
    echo json_encode($respons);
}
