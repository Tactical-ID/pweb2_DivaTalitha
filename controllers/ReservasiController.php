<?php

include_once '../../models/Reservasi.php';

class ReservasiController
{
    private $model;

    public function __construct($db)
    {
        $this->model = new Reservasi($db);
    }

    public function getAllReservasi()
    {
        return $this->model->getAllReservasi();
    }

    public function createReservasi($nama, $alamat, $no_telp, $nama_hewan, $jenis_hewan, $checkIn, $checkOut, $tipe_kamar, $totalBiaya, $catatan, $status_reservasi)
    {
        return $this->model->createReservasi($nama, $alamat, $no_telp, $nama_hewan, $jenis_hewan, $checkIn, $checkOut, $tipe_kamar, $totalBiaya, $catatan, $status_reservasi);

    }

    public function getReservasiById($id_reservasi)
    {
        return $this->model->getReservasiById($id_reservasi);
    }

    public function updateReservasi($id_reservasi, $nama, $alamat, $no_telp, $nama_hewan, $jenis_hewan, $checkIn, $checkOut, $tipe_kamar, $totalBiaya, $catatan, $status_reservasi)
    {
        return $this->model->updateReservasi($id_reservasi, $nama, $alamat, $no_telp, $nama_hewan, $jenis_hewan, $checkIn, $checkOut, $tipe_kamar, $totalBiaya, $catatan, $status_reservasi);
    }

    public function deleteReservasi($id_reservasi)
    {
        return $this->model->deleteReservasi($id_reservasi);
    }
}