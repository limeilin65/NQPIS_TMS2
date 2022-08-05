<?php
require 'functions.php';
// connect
$conn = mysqli_connect("localhost", "root", "", "nqpis_tms2");
// cek udah submit atau belum
if (isset($_POST["submitsurat2"])) {

    header("Location: halamanpersetujuan.php");
    $nis = $_POST["nis"];
    $nama = $_POST["nama"];
    $kamar = $_POST["kamar"];
    $kakamar = $_POST["kakamar"];
    $kelas = $_POST["kelas"];
    $alasan = $_POST["alasan"];
    $pilihan = $_POST["pilihan"];
    // query insert data
    $query = "INSERT INTO halamanpersetujuan 
                VALUES
    ('','$nis','$nama','$kamar','$kakamar','$kelas','$alasan')";
    mysqli_query($conn, $query);

    // cek keberhasilan ditambahkan atau tidak
    if (mysqli_affected_rows($conn) > 0) {
        echo "berhasil";
    }
} elseif (isset($_POST["submitmemo2"])) {

    header("Location: halamanpersetujuan.php");
    $nis = $_POST["nis"];
    $nama = $_POST["nama"];
    $kamar = $_POST["kamar"];
    $kakamar = $_POST["kakamar"];
    $kelas = $_POST["kelas"];
    $alasan = $_POST["alasan"];
    $pilihan = $_POST["pilihan"];
    // query insert data
    $query = "INSERT INTO halamanpersetujuan
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
    <title>Form Izin</title>
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
    <br><br>
    <h1 class="text-center">Form Izin</h1>

    <form action="halamanpersetujuan" method="post">
        <ul>

            <li>
                <label for="nis">NIS :</label>
                <input type="text" name="nis" id="nis">
            </li>
            <li>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" id="nama">
            </li>
            <li>
                <label for="kamar">Kamar :</label>
                <input type="text" name="kamar" id="kamar">
            </li>
            <li>
                <label for="kakamar">Kepala Kamar :</label>
                <input type="text" name="kakamar" id="kakamar">
            </li>
            <li>
                <label for="kelas">Kelas :</label>
                <input type="text" name="kelas" id="kelas" placeholder="kelas dan lembaga">
            </li>
            <li>
                <label for="alasan">Alasan :</label>
                <input type="text" name="alasan" id="alasan">
            </li>
            <li>
                <button type="submit" name="submitsurat2">Surat</button> | <button type="submit" name="submitmemo2">Memo</button>
            </li>
        </ul>



    </form>



</body>

</html>