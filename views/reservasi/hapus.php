<?php

include_once '../../config.php';
include_once '../../controllers/ReservasiController.php';

$database = new database($id_reservasi);
$db = $database->getKoneksi();

if(isset($_GET['id_reservasi'])){
    $id_reservasi = $_GET['id_reservasi'];

    $reservasiController = new ReservasiController($db);
    $result = $reservasiController->deleteReservasi($id_reservasi);

    if($result){
        header("location:reservasi");
    }

}