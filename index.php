<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nomor_ruangan   = $_POST['nomor_ruangan'];
    $nama_ruangan    = $_POST['Ruangan'];     
    $jenis_poli      = $_POST['Jenis'];       
    $lokasi_gedung   = $_POST['Gedung'];       

    $nomor_alat      = $_POST['nomor_alat'];
    $nama_alat       = $_POST['Alat'];         
    $jumlah_alat     = $_POST['Jumlah'];       
    $kondisi_alat    = $_POST['Kondisi'];      

    $query_ruangan = "INSERT INTO ruangan (nomor, nama_ruangan, jenis_poli, lokasi_gedung) 
                      VALUES ('$nomor_ruangan', '$nama_ruangan', '$jenis_poli', '$lokasi_gedung')";
    $simpan_ruangan = mysqli_query($koneksi, $query_ruangan);

    $query_alat = "INSERT INTO alat_medis (nomor, nama_alat, jumlah, kondisi) 
                   VALUES ('$nomor_alat', '$nama_alat', '$jumlah_alat', '$kondisi_alat')";
    $simpan_alat = mysqli_query($koneksi, $query_alat);

    if ($simpan_ruangan && $simpan_alat) {
        header("Location: read.php");
        exit();
    } else {
        echo "Gagal menyimpan data: " . mysqli_error($koneksi);
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
                            <td><input type="number" name="nomor_ruangan" id="nomor" class="form-control" required></td>
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

                <table width="90%" border="1" cellspacing="0" class="table table-bordered my-3">
                    <thead>
                        <tr>
                            <th>Nomor</th>            
                            <th><label for="Alat">Nama Alat Medis</label></th>
                            <th><label for="Jumlah">Jumlah</label></th>
                            <th><label for="Kondisi">Kodisi</label></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="number" name="nomor_alat" id="nomor" class="form-control" required></td>
                            <td><input type="text" name="Alat" id="Alat" class="form-control" required></td>
                            <td><input type="number" name="Jumlah" id="Jumlah" class="form-control" required></td>
                            <td>
                                <select name="Kondisi" id="Jenis" class="form-select">
                                    <option value="Baik">Baik</option>
                                    <option value="Kotor">Kotor</option>
                                    <option value="Rusak">Rusak</option>
                                </select>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <button type="submit" class="btn btn-primary">Simpan</button>    

            </form>
        </div>
    </body>
</html>