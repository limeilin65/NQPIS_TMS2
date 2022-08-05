<?php
require 'functions.php';
// ambil data santri
$santri = query("SELECT * FROM halamanpersetujuan");

if (isset($_POST["submmitsetuju"])) {
    $nis = $_POST["nis"];
    $nama = $_POST["nama"];
    $kamar = $_POST["kamar"];
    $kakamar = $_POST["kakamar"];
    $kelas = $_POST["kelas"];
    $alasan = $_POST["alasan"];

    // query insert data
    $query = "INSERT INTO datasurat 
                VALUES
    ('','$nis','$nama','$kamar','$kakamar','$kelas','$alasan')";
    mysqli_query($conn, $query);

    // cek keberhasilan ditambahkan atau tidak
    if (mysqli_affected_rows($conn) > 0) {
        echo "berhasil";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="FIX/assets/style.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Halaman Persetujuan</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-info shadow-lgfixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">NQ PIS_TMS2</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-right" id="navbarNav">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="formizin.php">Form Izin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="datasurat.php">Data Surat</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="datamemo.php">Data Memo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="halamanpersetujuan.php">Persetujuan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="halamancetak.php">Cetak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <h1 class="text-center">Halaman Persetujuan</h1>

    <br><br>

    <table border="1" cellpadding="10" celspacing="0">

        <tr>
            <th>No</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Kamar</th>
            <th>Kepala Kamar</th>
            <th>Kelas</th>
            <th>Alasan</th>
            <th>Pilihan</th>
            <th>Aksi</th>

        </tr>
        <?php $i = 1; ?>

        <?php foreach ($santri as $row) : ?>

            <tr>

                <td><?= $i; ?></td>
                <td><?= $row["nis"]; ?></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["kamar"]; ?></td>
                <td><?= $row["kakamar"]; ?></td>
                <td><?= $row["kelas"]; ?></td>
                <td><?= $row["alasan"]; ?></td>
                <td>
                    <a href="">surat</a>
                    <a href="">memo</a>
                </td>
                <td>
                    <button type="submit" name="submitsetuju" class="bg-success">Setuju</button>
                    <button class="bg-danger border:none">Tidak</button>
                </td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>

</html>