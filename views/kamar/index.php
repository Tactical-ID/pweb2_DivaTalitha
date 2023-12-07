<?php

//memanggil class model database
include_once '../../config.php';
include_once '../../controllers/KamarController.php';
require '../../index.php';

//instansiasikan class db
$database = new database;
$db = $database->getKoneksi();

$kamarController = new KamarController($db);
$kamar = $kamarController->getAllKamar();
?>

    <div class = "px-5 py-3">
    <h3>Data Kamar</h3>
    <a class="btn btn-primary mb-2 mt-2" href="tambahKamar">Tambah Kamar</a>
    <br>

    <table class="table">
    <tr>
        <th>No</th>
        <th>Jenis Kamar</th>
        <th>Harga Kamar</th>
        <th>Status Kamar</th>
        <th>Aksi</th> 
    </tr>

    <?php
    $no=1;
    foreach($kamar as $x){
        ?>

        <tr>
            <td><?php echo $no++?></td>
            <td><?php echo $x ['jenis_kamar']?></td>
            <td><?php echo $x ['harga']?></td>
            <td><?php echo $x ['statuskmr']?></td>
            <td>
                <a class="btn btn-warning" href = "editKamar?id_kamar=<?php echo $x ['id_kamar'];?>">Edit</a>
                <a class="btn btn-danger" href = "hapusKamar?id_kamar=<?php echo $x ['id_kamar'];?>">Hapus</a>
            </td>
        </tr>
        <?php
    }
    ?>
    </table>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
