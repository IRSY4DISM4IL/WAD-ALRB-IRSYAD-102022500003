<?php
include 'koneksi.php';

if (isset($_POST['hapus_semua'])) {
    mysqli_query($koneksi, "TRUNCATE TABLE ruangan");
    header("Location: read.php");
    exit();
}

$query = mysqli_query($koneksi, "SELECT * FROM ruangan ORDER BY Nomor ASC");
?>

<!DOCTYPE html>
<html lang="id">
<html>
     <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>POLI KLINIK</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <div id="data-pasien">

        <h2>DATA PASIEN</h2>
        <table width="90%" border="1" cellspacing="0" id="tabel-pasien" class="mb-3">
        <thead>
            <tr>
                <th>Nomor</th>
                <th>Nama Ruangan</th>
                <th>Jenis Poli</th>
                <th>Lokasi Gedung</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody id="isi-tabel-pasien">
            <tr>
                <td>1</td>
                <td>Ruangan Thiga</td>
                <td>Poli Gigi</td>
                <td>Gedung Enham</td>
                <td><a href="index.html" class="btn btn-warning btn-sm">Edit</a></td>
            </tr>
        </tbody>
    </table>
    
            <div class="mb-3">
                <button type="button" id="btn-hapus-semua" class="btn btn-danger">Delete</button>
            </div>
        
         <a href="index.html" class="btn btn-secondary">Back</a>

        </div>
    </body>
</html>