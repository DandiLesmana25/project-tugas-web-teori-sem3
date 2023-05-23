<?php
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$presensi = $_POST['presensi'];
$tugas = $_POST['tugas'];
$uts = $_POST['uts'];
$uas = $_POST['uas'];

$nilai_presensi = $presensi * 0.1;
$nilai_tugas = $tugas * 0.2;
$nilai_uts   = $uts* 0.3;
$nilai_uas   = $uas * 0.4;

$nilai_akhir = $nilai_presensi + $nilai_tugas + $nilai_uts + $nilai_uas;

// $nilai = $_POST['uas'];


echo "Nama : $nama";
echo "NIM : $nim";
echo "Nilai : $nilai_akhir";
