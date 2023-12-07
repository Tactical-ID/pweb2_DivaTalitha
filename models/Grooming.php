<?php

class Grooming{
    private $koneksi;

    public function __construct($db)
    {
        $this->koneksi = $db;
    
    }

    public function getAllGrooming(){
        $query = "SELECT * FROM grooming";
        $result = mysqli_query($this->koneksi,$query);
        return $result;
    }

    public function createGrooming($nama_pengguna, $namaHewan, $jenisHewan, $jenisLayanan, $tgl_grooming, $waktu, $total_biaya){
        $query = "INSERT INTO grooming (nama_pengguna, namaHewan, jenisHewan, jenisLayanan, tgl_grooming, waktu, total_biaya) VALUES ('$nama_pengguna', '$namaHewan', '$jenisHewan', '$jenisLayanan', '$tgl_grooming', '$waktu', '$total_biaya')";
        $result = mysqli_query($this->koneksi, $query);
        if($result){
            return true;
        } else {
            return false;
        }
    }
    

    public function getGroomingById($id_grooming)
{
    $query = "SELECT * FROM grooming where id_grooming = $id_grooming";
    $result = mysqli_query($this->koneksi, $query);
    return mysqli_fetch_assoc($result);
}

    public function updateGrooming($id_grooming, $nama_pengguna, $namaHewan, $jenisHewan, $jenisLayanan, $tgl_grooming, $waktu, $total_biaya){
        $query = "UPDATE grooming SET nama_pengguna ='$nama_pengguna', namaHewan='$namaHewan', jenisHewan='$jenisHewan', jenisLayanan='$jenisLayanan', tgl_grooming='$tgl_grooming', waktu='$waktu', total_biaya='$total_biaya' WHERE id_grooming=$id_grooming";
        $result = mysqli_query($this->koneksi, $query);
        
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    

    public function deleteGrooming($id_grooming){
    $query = "DELETE FROM grooming where id_grooming = $id_grooming";
    $result = mysqli_query($this->koneksi, $query);
    if($result){
        return true;
    }else{
        return false;
    }

    }
    

}
