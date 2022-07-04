<?php 
require('../config/koneksi.php');
$query = mysqli_query($koneksi,"SELECT * FROM tbl_gender");
$respons = [];
while($data = mysqli_fetch_array($query)){
    $a = [
        'inisial' => $data['inisial'],
        'jenis_gender' => $data['jenis_gender'],
    ];
    array_push($respons, $a);
}
echo json_encode($respons);