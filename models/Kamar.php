<?php

class Kamar{
    private $koneksi;

    public function __construct($db)
    {
        $this->koneksi = $db;
    
    }

    public function getAllKamar(){
        $query = "SELECT * FROM kamarkandang";
        $result = mysqli_query($this->koneksi,$query);
        return $result;
    }

    public function createKamar($jenis_kamar, $harga, $statuskmr){
        $query = "INSERT INTO kamarkandang (jenis_kamar, harga, statuskmr) VALUES ('$jenis_kamar','$harga','$statuskmr')";
        $result = mysqli_query($this->koneksi, $query);
        if($result){
            return true;
        } else {
            return false;
        }
    }
    

    public function getKamarById($id_kamar)
{
    $query = "SELECT * FROM kamarkandang where id_kamar = $id_kamar";
    $result = mysqli_query($this->koneksi, $query);
    return mysqli_fetch_assoc($result);
}

    public function updateKamar($id_kamar, $jenis_kamar, $harga, $statuskmr){
        $query = "UPDATE kamarkandang SET jenis_kamar='$jenis_kamar', harga='$harga', statuskmr='$statuskmr' WHERE id_kamar=$id_kamar";
        $result = mysqli_query($this->koneksi, $query);
        
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    

    public function deleteKamar($id_kamar){
    $query = "DELETE FROM kamarkandang where id_kamar = $id_kamar";
    $result = mysqli_query($this->koneksi, $query);
    if($result){
        return true;
    }else{
        return false;
    }

    }
    

}
