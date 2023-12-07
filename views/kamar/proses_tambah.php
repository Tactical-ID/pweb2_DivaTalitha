<?php

include_once '../../config.php';
include_once '../../controllers/KamarController.php';

$database = new database();
$db = $database->getKoneksi();

if(isset($_POST['submit'])){
    $jenis_kamar = $_POST['jenis_kamar'];
    $harga = $_POST['harga'];
    $statuskmr = $_POST['statuskmr'];

    $kamarController = new KamarController($db);
    $result = $kamarController->createKamar($jenis_kamar, $harga, $statuskmr);

    if($result){
        header("location:kamar");
    }else{
        header("location:tambahKamar");
    }
    
}