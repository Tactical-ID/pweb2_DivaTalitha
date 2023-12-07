<?php

include_once '../../models/Grooming.php';

class GroomingController
{
    private $model;

    public function __construct($db)
    {
        $this->model = new Grooming($db);
    }

    public function getAllGrooming()
    {
        return $this->model->getAllGrooming();
    }

    public function createGrooming($nama_pengguna, $namaHewan, $jenisHewan, $jenisLayanan, $tgl_grooming, $waktu, $total_biaya)
    {
        return $this->model->createGrooming($nama_pengguna, $namaHewan, $jenisHewan, $jenisLayanan, $tgl_grooming, $waktu, $total_biaya);

    }

    public function getGroomingById($id_grooming)
    {
        return $this->model->getGroomingById($id_grooming);
    }

    public function updateGrooming($id_grooming, $nama_pengguna, $namaHewan, $jenisHewan, $jenisLayanan, $tgl_grooming, $waktu, $total_biaya)
    {
        return $this->model->updateGrooming($id_grooming, $nama_pengguna, $namaHewan, $jenisHewan, $jenisLayanan, $tgl_grooming, $waktu, $total_biaya);
    }

    public function deleteGrooming($id_grooming)
    {
        return $this->model->deleteGrooming($id_grooming);
    }
}