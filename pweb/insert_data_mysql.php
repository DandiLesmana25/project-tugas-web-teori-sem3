<?php
$servername="localhost";
$username="root";
$password="";
$dbname="nilai_uts";

$koneksi=mysqli_connect($servername, $username, $password, $dbname);

if (!$koneksi) {
    echo "Koneksi Gagal";
}

$nama=$_POST['nama'];
$nim=$_POST['nim'];
$presensi=$_POST['presensi'];
$tugas=$_POST['tugas'];
$uts=$_POST['uts'];
$uas=$_POST['uas'];

$sql = "insert into nilai_uts(nama, nim, presensi, tugas, uts, uas) values ('$nama', '$nim', '$presensi', '$tugas', '$uts', '$uas')";

if(mysqli_query($koneksi,$sql)) {
    //echo "Data Telah Berhasil DiTambahkan";
    header("Location:select.php");
}else{
    echo "Data Telah Gagal DiTambahkan";
}
?>