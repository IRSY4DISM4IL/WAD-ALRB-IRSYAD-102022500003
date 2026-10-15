<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nomor      = $POST['Nomor'];
    $ruangan    = $POST['Ruangan'];
    $jenis      = $POST['Jenis'];
    $gedung     = $POST['Gedung'];

    $query      = "INSERT INTO ruangan (Nomor, Nama_Ruangan, Jenis_Poli, Lokasi_Gedung) VALUE ('$Nomor', '$Ruangan', '$Jenis', '$Gedung')";
    $simpan     mysqli_query($koneksii, $query);

    if ($simpan) {
        header("Location: read.php");
        exit();
    } else {
        echo "Gagal simpan data!: " . mysqli_error($koneksi);
    }
}
?>

<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>POLI KLINIK - Form Ruangan</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div id="form-pasien" class="container my-4">

            <h2>DATA RUANGAN POLIKLINIK</h2>
            <form action="read.php" method="post">

                <table width="90%" border="1" cellspacing="0" class="table table-bordered my-3">
                    <thead>
                        <tr>
                            <th>Nomor</th>            
                            <th><label for="Ruangan">Nama Ruangan</label></th>
                            <th><label for="Jenis">Jenis Poli</label></th>
                            <th><label for="Gedung">Lokasi Gedung</label></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="number" name="nomor" id="nomor" class="form-control" required></td>
                            <td><input type="text" name="Ruangan" id="Ruangan" class="form-control" required></td>
                            <td>
                                <select name="Jenis" id="Jenis" class="form-select">
                                    <option value="Poli Umum">Poli Umum</option>
                                    <option value="Poli Gigi">Poli Gigi</option>
                                    <option value="Poli Anak">Poli Anak</option>
                                </select>
                            </td>
                            <td><input type="text" name="Gedung" id="Gedung" class="form-control" required></td>
                        </tr>
                    </tbody>
                </table>

                <button type="submit" class="btn btn-primary">Simpan</button>    

            </form>
        </div>
    </body>
</html>