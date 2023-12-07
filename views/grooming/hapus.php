<?php

include_once '../../config.php';
include_once '../../controllers/GroomingController.php';

$database = new database($id_grooming);
$db = $database->getKoneksi();

if(isset($_GET['id_grooming'])){
    $id_grooming = $_GET['id_grooming'];

    $groomingController = new GroomingController($db);
    $result = $groomingController->deleteGrooming($id_grooming);

    if($result){
        header("location:grooming");
    }

}