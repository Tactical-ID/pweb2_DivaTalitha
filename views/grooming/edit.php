<?php

 include_once '../../config.php';
 include_once '../../controllers/GroomingController.php';
 require '../../index.php';

 error_reporting(E_ERROR | E_PARSE);
 $database = new database();
 $db = $database->getKoneksi();

 if (isset($_GET['id_grooming'])) {
    $id_grooming = $_GET['id_grooming'];

    $groomingController = new GroomingController($db);
    $groomingData = $groomingController->getGroomingById($id_grooming);

    if ($groomingData) {
        if (isset($_POST['submit'])) {
            $nama_pengguna = $_POST['nama_pengguna'];
            $namaHewan = $_POST['namaHewan'];
            $jenisHewan = $_POST['jenisHewan'];
            $jenisLayanan = $_POST['jenisLayanan'];
            $tgl_grooming = $_POST['tgl_grooming'];
            $waktu = $_POST['waktu'];
            $total_biaya = $_POST['total_biaya'];
            $result =$groomingController->updateGrooming($id_grooming, $nama_pengguna, $namaHewan, $jenisHewan, $jenisLayanan, $tgl_grooming, $waktu, $total_biaya);

            if ($result){
                header("location:grooming");
            } else {
                header("location:editGrooming");
            }
        }
    } else {
        echo "Data hewan tidak ditemukan";
    }
 }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Data Grooming</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<div class="container mt-5">
    <h3>Edit Data Grooming</h3>

    <?php if ($groomingData): ?>
        <form action="" method="post">
            <?php foreach ($groomingData as $d => $value): ?>
                <div class="mb-3 row">
                    <label for="<?php echo $d; ?>" class="col-sm-2 col-form-label"><?php echo $d; ?></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="<?php echo $d; ?>" value="<?php echo $value; ?>">
                    </div>
                </div>
            <?php endforeach; ?>

            <div class="mb-3 row">
                <div class="col-sm-10 offset-sm-2">
                    <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
                </div>
            </div>
        </form>
    <?php endif; ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
