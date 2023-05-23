<?php
include "koneksi.php";

//Get parameter ID
$ID = $_GET['id'];

//query insert data
$sql = "DELETE from nilai_mhs where id=$ID";

//menjalankan query
if(mysqli_query($conn,$sql)) {
    //echo "Data Telah Berhasil DiTambahkan";
    header("Location:select.php");
}else{
    echo "Data Telah Gagal DiTambahkan";
}
?>
<!-- 
<?php


$id = $_GET['id'];

include 'koneksi.php';


$sql = "DELETE FROM tabel_nilai WHERE id = $id";
$result = mysqli_query($conn, $sql);
header("Location: select.php");

  ?> -->