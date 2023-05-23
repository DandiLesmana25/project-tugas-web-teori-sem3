<?php
include "koneksi.php";

//Get parameter ID
$ID = $_GET['id'];

//query insert data
$sql = "DELETE from nilai_uts where id=$ID";

//menjalankan query
if(mysqli_query($koneksi,$sql)) {
    //echo "Data Telah Berhasil DiTambahkan";
    header("Location:select.php");
}else{
    echo "Data Telah Gagal DiTambahkan";
}
?>