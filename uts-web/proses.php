<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nilai_db";

// create connection
$conn = mysqli_connect ($servername, $username, $password, $dbname);

// check  connection

if (!$conn) {
    echo "Koneksi Gagal";
}


// proses menerima parameter dari form
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$presensi = $_POST['presensi']; 
$tugas = $_POST['tugas'];
$uts = $_POST['uts'];
$uas = $_POST['uas'];


// query insert data
$sql = "insert into nilai_mhs(nama,nim,presensi,tugas,uts,uas) values ('$nama', '$nim', '$presensi', '$tugas', '$uts', '$uas')";

// menjalankan query
 
if(mysqli_query($conn, $sql)){
    // "Data berhasil ditambahkan ke dalam Database";
    header("Location:select.php");
}else{
    echo "Data gagal ditambahkan";
}


// $nilai_presensi = $presensi * 0.10;
// $nilai_tugas = $tugas * 0.20;
// $nilai_uts   = $uts* 0.30;
// $nilai_uas   = $uas * 0.35;

// $nilai_akhir = $nilai_presensi + $nilai_tugas + $nilai_uts + $nilai_uas;

// // $nilai = $_POST['uas'];

// echo "<h2>UTS Pemrograman Web 2022/2023</h2>";
// echo "Nama  : $nama"; 
// "<br/>";
// echo "<br/>";
// echo "NIM    : $nim";
// "<br/>";
// echo "<br/>";
// echo "Nilai  : $nilai_akhir";
