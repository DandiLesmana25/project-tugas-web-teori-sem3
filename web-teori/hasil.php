<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>UTS Pemrograman Web 2022/2023</h2>
</body>
</html>

<?php

$nama = $_POST['nama'];
$nim = $_POST['nim'];
$presensi = $_POST['presensi'];
$tugas = $_POST['tugas'];
$uts = $_POST['uts'];
$uas = $_POST['uas'];


$presensi = 10/100 * $presensi;
$tugas = 25/100 * $tugas;
$uts = 30/100 * $uts;
$uas = 35/100 * $uas;

$hasil = $presensi + $tugas + $uts + $uas;


echo "Nama  :  " . "$nama" . "</br>";
echo "NIM   :  " . "$nim" . "</br>";
echo "Nilai :  " . "$hasil";

?>