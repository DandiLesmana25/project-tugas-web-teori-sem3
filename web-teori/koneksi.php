<?php

//variable koneksi
$servername="localhost";
$username="root";
$password="";
$dbname="nilai_db";

//membuat koneksi ke server dan database
$conn = mysqli_connect($servername, $username, $password, $dbname);

//cek koneksi
if (!$conn) {
    echo "Koneksi gagal";
}

?>