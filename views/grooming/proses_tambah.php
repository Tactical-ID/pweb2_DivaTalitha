<?php

include_once '../../config.php';
include_once '../../controllers/GroomingController.php';

$database = new database();
$db = $database->getKoneksi();

if(isset($_POST['submit'])){
    $nama_pengguna = $_POST['nama_pengguna'];
    $namaHewan = $_POST['namaHewan'];
    $jenisHewan = $_POST['jenisHewan'];
    $jenisLayanan = $_POST['jenisLayanan'];
    $tgl_grooming = $_POST['tgl_grooming'];
    $waktu = $_POST['waktu'];
    $total_biaya = $_POST['total_biaya'];

    $groomingController = new GroomingController($db);
    $result = $groomingController->createGrooming($nama_pengguna, $namaHewan, $jenisHewan, $jenisLayanan, $tgl_grooming, $waktu, $total_biaya);

    if($result){
        header("location:grooming");
    }else{
        header("location:tambahGrooming");
    }
    
}