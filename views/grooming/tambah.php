

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

  <form action="proses_tambahGrooming? aksi=tambah" method="post">
  <h3>tambah data grooming</h3>
  <div class="mb-3">
    <label for="nama_pengguna" class="form-label">Nama Pengguna</label>
    <input type="text" class="form-control" name="nama_pengguna">
  </div>
  <div class="mb-3">
    <label for="namaHewan" class="form-label">Nama Hewan</label>
    <input type="text" class="form-control" name="namaHewan">
  </div>
  <div class="mb-3">
    <label for="jenisHewan" class="form-label">Jenis Hewan</label>
    <input type="text" class="form-control" name="jenisHewan">
  </div>
  <tr>
    <td>Jenis Layanan</td>
    <td>
    <select class="form-control" required = "" name="jenisLayanan">
                <option value="Triming">Triming</option>
                <option value="Mandi dan Pembersihan">Mandi dan Pembersihan</option>
                <option value="Grooming Bulu">Grooming Bulu</option>
                <option value="Perawatan Kulit">Perawatan Kulit</option>
                <option value="Pelayanan Spa Hewan">Pelayanan Spa Hewan</option>
    </select>
    </td>
  </tr>
  <div class="mb-3">
    <label for="tgl_grooming" class="form-label">Tanggal Grooming</label>
    <input type="date" class="form-control" name="tgl_grooming">
  </div>
  <div class="mb-3">
    <label for="waktu" class="form-label">Waktu</label>
    <input type="text" class="form-control" name="waktu">
  </div>
  <div class="mb-3">
    <label for="total_biaya" class="form-label">Total Biaya</label>
    <input type="text" class="form-control" name="total_biaya">
  </div>
  
  <button type="submit" name="submit" class="btn btn-success" onclick="showAlert()">Simpan</button>
</form>

<script>
  function showAlert(){
    alert("data grooming berhasil ditambahkan! ");
  }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</div>
</body>
</html>


