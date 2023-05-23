<?php


$id = $_GET['id'];

include 'koneksi.php';


$sql = "DELETE FROM tabel_nilai WHERE id = $id";
$result = mysqli_query($conn, $sql);
header("Location: select.php");

  ?>