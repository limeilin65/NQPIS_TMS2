<?php
// koneksi database
$conn = mysqli_connect("localhost", "root", "", "nqpis_tms2");

function query($query)
{
    global $conn;
    $hasil = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($hasil)) {
        $rows[] = $row;
    }
    return $rows; 
}
