<?php 
require('../config/koneksi.php');
$query = mysqli_query($koneksi,"SELECT * FROM tbl_status");
$respons = [];
while($data = mysqli_fetch_array($query)){
    $a = [
        'id_sts' => $data['id_sts'],
        'sts' => $data['sts'],
    ];
    array_push($respons, $a);
}
echo json_encode($respons);