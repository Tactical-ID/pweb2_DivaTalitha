<?php

 include_once '../../config.php';
 include_once '../../controllers/KamarController.php';
 require '../../index.php';

 $database = new database();
 $db = $database->getKoneksi();

 if (isset($_GET['id_kamar'])) {
    $id_kamar = $_GET['id_kamar'];

    $kamarController = new KamarController($db);
    $kamarData = $kamarController->getKamarById($id_kamar);

    if ($kamarData) {
        if (isset($_POST['submit'])) {
            $jenis_kamar = $_POST['jenis_kamar'];
            $harga = $_POST['harga'];
            $statuskmr = $_POST['statuskmr'];
            $result =$kamarController->updateKamar($id_kamar, $jenis_kamar, $harga, $statuskmr);

            if ($result){
                header("location:kamar");
            } else {
                header("location:editKamar");
            }
        }
    } else {
        echo "Data kamar tidak ditemukan";
    }
 }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Data Kamar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<div class="container mt-5">
    <h3>Edit Data Kamar</h3>

    <?php if ($kamarData): ?>
        <form action="" method="post">
            <?php foreach ($kamarData as $d => $value): ?>
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
