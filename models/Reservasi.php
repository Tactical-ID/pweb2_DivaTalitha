<?php

class Reservasi{
    private $koneksi;

    public function __construct($db)
    {
        $this->koneksi = $db;
    
    }

    public function getAllReservasi(){
        $query = "SELECT * FROM reservasi";
        $result = mysqli_query($this->koneksi,$query);
        return $result;
    }

    public function createReservasi($nama, $alamat, $no_telp, $nama_hewan, $jenis_hewan, $checkIn, $checkOut, $tipe_kamar, $totalBiaya, $catatan, $status_reservasi){
        $query = "INSERT INTO reservasi (nama, alamat, no_telp, nama_hewan, jenis_hewan, checkIn, checkOut, tipe_kamar, totalBiaya, catatan, status_reservasi) VALUES ('$nama', '$alamat', '$no_telp', '$nama_hewan', '$jenis_hewan', '$checkIn', '$checkOut', '$tipe_kamar', '$totalBiaya', '$catatan', '$status_reservasi')";
        $result = mysqli_query($this->koneksi, $query);
        if($result){
            return true;
        } else {
            return false;
        }
    }
    

    public function getReservasiById($id_reservasi)
{
    $query = "SELECT * FROM reservasi where id_reservasi = $id_reservasi";
    $result = mysqli_query($this->koneksi, $query);
    return mysqli_fetch_assoc($result);
}

    public function updateReservasi($id_reservasi, $nama, $alamat, $no_telp, $nama_hewan, $jenis_hewan, $checkIn, $checkOut, $tipe_kamar, $totalBiaya, $catatan, $status_reservasi){
        $query = "UPDATE reservasi SET nama='$nama', alamat='$alamat', no_telp='$no_telp', nama_hewan='$nama_hewan', jenis_hewan='$jenis_hewan', checkIn='$checkIn', checkOut='$checkOut', tipe_kamar='$tipe_kamar', totalBiaya='$totalBiaya', catatan='$catatan', status_reservasi='$status_reservasi' WHERE id_reservasi=$id_reservasi";
        $result = mysqli_query($this->koneksi, $query);
        
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    

    public function deleteReservasi($id_reservasi){
    $query = "DELETE FROM reservasi where id_reservasi = $id_reservasi";
    $result = mysqli_query($this->koneksi, $query);
    if($result){
        return true;
    }else{
        return false;
    }

    }
    

}
