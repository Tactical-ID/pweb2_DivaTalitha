<?php

include_once '../../models/Kamar.php';

class KamarController
{
    private $model;

    public function __construct($db)
    {
        $this->model = new Kamar($db);
    }

    public function getAllKamar()
    {
        return $this->model->getAllKamar();
    }

    public function createKamar($jenis_kamar, $harga, $statuskmr)
    {
        return $this->model->createKamar($jenis_kamar, $harga, $statuskmr);

    }

    public function getKamarById($id_kamar)
    {
        return $this->model->getKamarById($id_kamar);
    }

    public function updateKamar($id_kamar, $jenis_kamar, $harga, $statuskmr)
    {
        return $this->model->updateKamar($id_kamar, $jenis_kamar, $harga, $statuskmr);
    }

    public function deleteKamar($id_kamar)
    {
        return $this->model->deleteKamar($id_kamar);
    }
}