<?php 
require('../config/koneksi.php');
$query = mysqli_query($koneksi,"SELECT * FROM tbl_tiket JOIN tbl_status ON tbl_tiket.status = tbl_status.id_sts");
$respons = [];
while($data = mysqli_fetch_array($query)){
    $getT= mysqli_query($koneksi,"SELECT * FROM tbl_teknisi WHERE id_teknisi='$data[teknisi]'");
    $dt = mysqli_fetch_array($getT);
    $a = [
        'id_tiket' => $data['id_tiket'],
        'id_karyawan' => $data['id_karyawan'],
        'nama_karyawan' => $data['nama_karyawan'],
        'keluhan' => $data['keluhan'],
        'foto' => $data['foto'],
        'tgl_buat' => $data['tgl_buat'],
        'tgl_selesai' => $data['tgl_selesai'],
        'teknisi' => $dt['nama_teknisi'],
        'sts' => $data['sts']
    ];
    array_push($respons, $a);
}
echo json_encode($respons);