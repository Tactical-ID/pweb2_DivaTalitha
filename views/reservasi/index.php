<?php

//memanggil class model database
include_once '../../config.php';
include_once '../../controllers/ReservasiController.php';
require '../../index.php';

//instansiasikan class db
$database = new database;
$db = $database->getKoneksi();

$reservasiController = new ReservasiController($db);
$reservasi = $reservasiController->getAllReservasi();
?>

    <div class = "px-5 py-3">
    <h3>Data Reservasi</h3>
    <a class="btn btn-primary mb-2 mt-2" href="tambahReservasi">Tambah Reservasi</a>
    <br>

    <table class="table table-striped">
    <tr>
        <th>No</th>
        <th>Nama Pengguna</th>
        <th>Alamat</th>
        <th>No Telepon</th>
        <th>Nama Hewan</th>
        <th>Jenis Hewan</th>
        <th>Check In</th>
        <th>Check Out</th>
        <th>Tipe Kamar</th>
        <th>Total Biaya</th>
        <th>Catatan</th>
        <th>Status Reservasi</th>
        
        <th>Aksi</th> 
    </tr>

    <?php
    $no=1;
    foreach($reservasi as $x){
        ?>

        <tr>
            <td><?php echo $no++?></td>
            <td><?php echo $x ['nama']?></td>
            <td><?php echo $x ['alamat']?></td>
            <td><?php echo $x ['no_telp']?></td>
            <td><?php echo $x ['nama_hewan']?></td>
            <td><?php echo $x ['jenis_hewan']?></td>
            <td><?php echo $x ['checkIn']?></td>
            <td><?php echo $x ['checkOut']?></td>
            <td><?php echo $x ['tipe_kamar']?></td>
            <td><?php echo $x ['totalBiaya']?></td>
            <td><?php echo $x ['catatan']?></td>
            <td><?php echo $x ['status_reservasi']?></td>
            <td>
                <a class="btn btn-warning" href = "editReservasi?id_reservasi=<?php echo $x ['id_reservasi'];?>">Edit</a>
                <a class="btn btn-danger" href = "hapusReservasi?id_reservasi=<?php echo $x ['id_reservasi'];?>">Hapus</a>
            </td>
        </tr>
        <?php
    }
    ?>
    </table>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
