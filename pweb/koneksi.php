<?php
$servername="localhost";
$username="root";
$password="";
$dbname="nilai_uts";

$koneksi=mysqli_connect($servername, $username, $password, $dbname);

if (!$koneksi) {
    echo "Koneksi Gagal";
}