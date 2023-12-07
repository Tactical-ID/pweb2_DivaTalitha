

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

  <form action="proses_tambahKamar? aksi=tambah" method="post">
  <h3>tambah data kamar</h3>
  <tr>
    <td>Tipe Kamar</td>
    <td>
    <select class="form-control" required = "" name="jenis_kamar">
            <option value="Standar Room">Standar Room</option>
            <option value="Suite Room">Suite Room</option>
            <option value="VIP Suite Room">VIP Suite Room</option>
    </select>
    </td>
  </tr>
  <div class="mb-3">
    <label for="harga" class="form-label">Harga Kamar</label>
    <input type="text" class="form-control" name="harga">
  </div>
  <tr>
    <td>Status Kamar</td>
    <td>
    <select class="form-control" required = "" name="statuskmr">
            <option value="Tersedia">Tersedia</option>
            <option value="Tidak Tersedia">Tidak Tersedia</option>
    </select>
    </td>
  </tr>
  
  <button type="submit" name="submit" class="btn btn-success" onclick="showAlert()">Simpan</button>
</form>

<script>
  function showAlert(){
    alert("data kamar berhasil ditambahkan! ");
  }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</div>
</body>
</html>


