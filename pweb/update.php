<?php
include "koneksi.php";

//Penerima Parameter dari FORM
$id=$_POST['id'];
$nama=$_POST['nama'];
$nim=$_POST['nim'];
$presensi=$_POST['presensi'];
$tugas=$_POST['tugas'];
$uts=$_POST['uts'];
$uas=$_POST['uas'];

$sql = "UPDATE nilai_uts SET nama='$nama', nim='$nim', presensi='$presensi', tugas='$tugas', uts='$uts', uas='$uas' where id='$id'";

if(mysqli_query($koneksi,$sql)) {
    //echo "Data Telah Berhasil DiTambahkan";
    header("Location:select.php");
}else{
    echo "Data Telah Gagal DiTambahkan";
}
?>