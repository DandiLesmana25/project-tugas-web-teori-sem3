<?php

$id = $_GET['id'];

include 'koneksi.php';

$sql = "SELECT * FROM nilai_mhs WHERE id='$id'";

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);


if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $presensi = $_POST['presensi'];
    $tugas = $_POST['tugas'];
    $uts = $_POST['uts'];
    $uas = $_POST['uas'];

    $update = " UPDATE nilai_mhs SET nama = '$nama', nim = '$nim', presensi = '$presensi', tugas = '$tugas', uts = '$uts', uas = '$uas' WHERE id = $id ";
   
   if($result = mysqli_query($conn,$update)){
    echo"<script>
    alert('Data berhasil diubah!');
    </script>";

    header("Location: select.php");
    exit;
    }
   echo"<script>
    alert('Data gagal diubah!');
    </script>";




    //if ($result->num_rows>0) {
    
    // }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
	<h2>Form Edit Nilai</h2>
    <form method="POST">
        <table>
            <tr>
                <td>Id</td>
                <td>: <input type="text" name="id" value="<?php echo "$row[id]"; ?>" disabled>
                     <input type="hidden" name="id" value="<?php echo "$row[id]"; ?>">
                </td>
            </tr>
            <tr>
                <td><label>Nama</label></td>
                <td> : <input type="text" name="nama" require value= <?= $row['nama']?> ></td>
            </tr>
            <tr>
                <td><label>NIM</label></td>
                <td> : <input type="text" name="nim" require value= <?= $row['nim']?>></td>
            </tr>
            <tr>
                <td><label>Presensi</label></td>
                <td> : <input type="text" name="presensi" require value= <?= $row['presensi']?>>10%</td>
            </tr>
            <tr>
                <td><label>Tugas</label></td>
                <td> : <input type="text" name="tugas" require  value= <?= $row['tugas']?>>25%</td>
            </tr>
            <tr>
                <td><label>UTS</label></td>
                <td> : <input type="text" name="uts" require value= <?= $row['uts']?>>30%</td>
            <tr>
                <td><label>UAS</label></td>
                <td> : <input type="text" name="uas" require value= <?= $row['uas']?>>35%</td>
            </tr>
            <tr>
                <td><Button type="submit" name="submit">Update</Button></td>
            </tr>
            <tr>
                <td><a href="select.php">Lihat Data</a></td>
            </tr>
        </table>
    </form>
</body>
</html>
