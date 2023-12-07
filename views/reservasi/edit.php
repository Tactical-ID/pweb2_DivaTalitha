<?php

include_once '../../config.php';
include_once '../../controllers/ReservasiController.php';
require '../../index.php';

$database = new database();
$db = $database->getKoneksi();

if (isset($_GET['id_reservasi'])) {
    $id_reservasi = $_GET['id_reservasi'];

    $reservasiController = new ReservasiController($db);
    $reservasiData = $reservasiController->getReservasiById($id_reservasi);

    if ($reservasiData) {
        if (isset($_POST['submit'])) {
            $nama = $_POST['nama'];
            $alamat = $_POST['alamat'];
            $no_telp = $_POST['no_telp'];
            $nama_hewan = $_POST['nama_hewan'];
            $jenis_hewan = $_POST['jenis_hewan'];
            $checkIn = $_POST['checkIn'];
            $checkOut = $_POST['checkOut'];
            $tipe_kamar = $_POST['tipe_kamar'];
            $totalBiaya = $_POST['totalBiaya'];
            $catatan = $_POST['catatan'];
            $status_reservasi = $_POST['status_reservasi'];
            $result = $reservasiController->updateReservasi($id_reservasi, $nama, $alamat, $no_telp, $nama_hewan, $jenis_hewan, $checkIn, $checkOut, $tipe_kamar, $totalBiaya, $catatan, $status_reservasi);

            if ($result) {
                header("location:reservasi");
            } else {
                header("location:editReservasi");
            }
        }
    } else {
        echo "Data pengguna tidak ditemukan";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Data Reservasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-5">
        <h3>Edit Data Reservasi</h3>

        <?php if ($reservasiData): ?>
            <form action="" method="post">
                <?php foreach ($reservasiData as $d => $value): ?>
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
