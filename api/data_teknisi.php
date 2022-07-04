<?php 
require('../config/koneksi.php');
$query = mysqli_query($koneksi,"SELECT * FROM tbl_teknisi JOIN tbl_gender ON tbl_teknisi.gender_teknisi = tbl_gender.inisial");
$respons = [];
while($data = mysqli_fetch_array($query)){
    $a = [
        'id_teknisi' => $data['id_teknisi'],
        'nama_teknisi' => $data['nama_teknisi'],
        'gender_teknisi' => $data['jenis_gender'],
    ];
    array_push($respons, $a);
}
echo json_encode($respons);