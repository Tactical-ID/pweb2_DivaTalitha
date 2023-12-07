<?php

include_once '../../config.php';
include_once '../../controllers/ReservasiController.php';

$database = new database();
$db = $database->getKoneksi();

if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $no_telp = $_POST['no_telp'];
    $nama_hewan = $_POST['nama_hewan'];
    $jenis_hewan = $_POST['jenis_hewan'];
    $checkIn = $_POST['checkIn'];
    $checkOut = $_POST['checkOut'];
    $tipe_kamar = $_POST['tipe_kamar'];
    $totalBiaya = $_POST['totalBiaya'];
    $catatan = $_POST['catatan'];
    $status_reservasi = $_POST['status_reservasi'];
    $reservasiController = new reservasiController($db);
    $result = $reservasiController->createReservasi($nama, $alamat, $no_telp, $nama_hewan, $jenis_hewan, $checkIn, $checkOut, $tipe_kamar, $totalBiaya, $catatan, $status_reservasi);

    if($result){
        header("location:reservasi");
    }else{
        header("location:tambahReservasi");
    }
    
}