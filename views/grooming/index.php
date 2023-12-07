<?php

//memanggil class model database
include_once '../../config.php';
include_once '../../controllers/GroomingController.php';
require '../../index.php';

//instansiasikan class db
$database = new database;
$db = $database->getKoneksi();

$groomingController = new GroomingController($db);
$grooming = $groomingController->getAllGrooming();
?>

    <div class = "px-5 py-3">
    <h3>Data Grooming</h3>
    <a class="btn btn-primary mb-2 mt-2" href="tambahGrooming">Tambah Grooming</a>
    <br>

    <table class="table">
    <tr><th>No</th>
        <th>Nama Pengguna</th>
        <th>Nama Hewan</th>
        <th>Jenis Hewan</th>
        <th>Jenis Layanan</th>
        <th>Tanggal Grooming</th>
        <th>Waktu</th>
        <th>Total Biaya</th>
        <th>Aksi</th> 
    </tr>

    <?php
    $no=1;
    foreach($grooming as $x){
        ?>

        <tr>
            <td><?php echo $no++?></td>
            <td><?php echo $x ['nama_pengguna']?></td>
            <td><?php echo $x ['namaHewan']?></td>
            <td><?php echo $x ['jenisHewan']?></td>
            <td><?php echo $x ['jenisLayanan']?></td>
            <td><?php echo $x ['tgl_grooming']?></td>
            <td><?php echo $x ['waktu']?></td>
            <td><?php echo $x ['total_biaya']?></td>
            <td>
                <a class="btn btn-warning" href = "editGrooming?id_grooming=<?php echo $x ['id_grooming'];?>">Edit</a>
                <a class="btn btn-danger" href = "hapusGrooming?id_grooming=<?php echo $x ['id_grooming'];?>">Hapus</a>
            </td>
        </tr>
        <?php
    }
    ?>
    </table>
    </div>
    </div>