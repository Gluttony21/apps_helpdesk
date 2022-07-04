<?php 
require('../config/koneksi.php');
$query = mysqli_query($koneksi,"SELECT * FROM tbl_pc JOIN tbl_jenis ON tbl_pc.tipe_pc = tbl_jenis.id_jenis");
$respons = [];
while($data = mysqli_fetch_array($query)){
    $a = [
        'id_pc' => $data['id_pc'],
        'nama_pc' => $data['nama_pc'],
        'tipe_pc' => $data['jenis'],
    ];
    array_push($respons, $a);
}
echo json_encode($respons);