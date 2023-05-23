<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/CSS/main.css">
    <title>UTS | PEMROGRAMAN WEB</title>
</head>
<body> -->
<?php
// koneksi database
include 'koneksi.php';

// menerima input data dari form
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$presensi = $_POST['presensi'];
$tugas = $_POST['tugas'];
$uts = $_POST['uts'];
$uas = $_POST['uas'];

$nilai_presensi = $presensi * 0.10;
$nilai_tugas = $tugas * 0.20;
$nilai_uts   = $uts* 0.30;
$nilai_uas   = $uas * 0.35;

// $nilai_akhir = $nilai_presensi + $nilai_tugas + $nilai_uts + $nilai_uas;

// menginput data ke database
mysqli_query ($con, "INSERT INTO nilai value ('','$nama','$nim','$presensi','$tugas','$uts','$uas')");


?>
