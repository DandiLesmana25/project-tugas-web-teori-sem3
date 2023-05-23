<?php

include 'koneksi.php';

//penerimaan parameter dari form
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$presensi = $_POST['presensi'];
$tugas = $_POST['tugas'];
$uts = $_POST['uts'];
$uas = $_POST['uas'];

//query insert data
$sql = "insert into nilai_mhs(nama, nim, presensi, tugas, uts, uas) values('$nama', '$nim', 
    '$presensi', '$tugas', '$uts', '$uas')";

//menjalankan query
if (mysqli_query($conn, $sql)) {
    // echo "Data berhasil dibuat dan ditambahkan kedalam Database";
    header("location:select.php");
}else {
    echo "Data gagal ditambahkan";
}

?>