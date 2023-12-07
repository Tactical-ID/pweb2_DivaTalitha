<?php
require '../../index.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PETHOTEL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
<body>
    <div class ="px-4 py-8">

  <form action="proses_tambahReservasi? aksi=tambah" method="post">
  <h3>tambah data reservasi</h3>
  <div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" class="form-control" name="nama">
  </div>
  <div class="mb-3">
    <label for="alamat" class="form-label">Alamat</label>
    <input type="text" class="form-control" name="alamat">
  </div>
  <div class="mb-3">
    <label for="no_telp" class="form-label">No Telepon</label>
    <input type="text" class="form-control" name="no_telp">
  </div>
  <div class="mb-3">
    <label for="nama_hewan" class="form-label">Nama Hewan</label>
    <input type="text" class="form-control" name="nama_hewan">
  </div>
  <div class="mb-3">
    <label for="jenis_hewan" class="form-label">Jenis Hewan</label>
    <input type="text" class="form-control" name="jenis_hewan">
  </div>
  <div class="mb-3">
    <label for="checkIn" class="form-label">Check In</label>
    <input type="date" class="form-control" name="checkIn">
  </div>
  <div class="mb-3">
    <label for="checkOut" class="form-label">Check Out</label>
    <input type="date" class="form-control" name="checkOut">
  </div>
  <tr>
    <td>Tipe Kamar</td>
    <td>
    <select class="form-control" required = "" name="tipe_kamar">
            <option value="Standar Room">Standar Room</option>
            <option value="Suite Room">Suite Room</option>
            <option value="VIP Suite Room">VIP Suite Room</option>
    </select>
    </td>
  </tr>
  <div class="mb-3">
    <label for="totalBiaya" class="form-label">Total Biaya</label>
    <input type="text" class="form-control" name="totalBiaya">
  </div>
  <div class="mb-3">
    <label for="catatan" class="form-label">Catatan</label>
    <input type="text" class="form-control" name="catatan">
  </div>
  <div class="mb-3">
    <label for="status_reservasi" class="form-label">Status Reservasi</label>
    <input type="text" class="form-control" name="status_reservasi">
  </div>
  
  <button type="submit" name="submit" class="btn btn-success" onclick="showAlert()">Simpan</button>
</form>

<script>
  function showAlert(){
    alert("data reservasi berhasil ditambahkan! ");
  }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</div>
</body>
</html>


