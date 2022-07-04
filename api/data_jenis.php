<?php 
require('../config/koneksi.php');
$query = mysqli_query($koneksi,"SELECT * FROM tbl_jenis");
$respons = [];
while($data = mysqli_fetch_array($query)){
    $a = [
        'id_jenis' => $data['id_jenis'],
        'jenis' => $data['jenis'],
    ];
    array_push($respons, $a);
}
echo json_encode($respons);