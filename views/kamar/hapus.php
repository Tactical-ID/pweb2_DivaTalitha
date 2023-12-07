<?php

include_once '../../config.php';
include_once '../../controllers/KamarController.php';

$database = new database($id_kamar);
$db = $database->getKoneksi();

if(isset($_GET['id_kamar'])){
    $id_kamar = $_GET['id_kamar'];

    $kamarController = new KamarController($db);
    $result = $kamarController->deleteKamar($id_kamar);

    if($result){
        header("location:kamar");
    }

}