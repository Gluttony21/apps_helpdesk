<?php 
require('../config/koneksi.php');
$_GET['sts'];
if($_GET['sts'] == "Menunggu"){
    $query = mysqli_query($koneksi,"SELECT * FROM tbl_status WHERE sts !='Selesai'");
}elseif ($_GET['sts'] == "Dikerjakan") {
    $query = mysqli_query($koneksi,"SELECT * FROM tbl_status WHERE sts !='Menunggu'");
}else{
    $query = mysqli_query($koneksi,"SELECT * FROM tbl_status WHERE sts ='Selesai'");
}
$respons = [];
while($data = mysqli_fetch_array($query)){
    $a = [
        'id_sts' => $data['id_sts'],
        'sts' => $data['sts'],
    ];
    array_push($respons, $a);
}
echo json_encode($respons);