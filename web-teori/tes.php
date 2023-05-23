<?php

$id = $_GET['id'];

include 'koneksi.php';

$sql = "SELECT * FROM tabel_nilai WHERE id='$id'";

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);


if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $presensi = $_POST['presensi'];
    $tugas = $_POST['tugas'];
    $uts = $_POST['uts'];
    $uas = $_POST['uas'];

    $update = " UPDATE tabel_nilai SET nama = '$nama', nim = '$nim', presensi = '$presensi', tugas = '$tugas', uts = '$uts', uas = '$uas' WHERE id = $id ";
   
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
	<h2>UTS Pemrograman Web 2022/2023</h2>
    <form method="POST">
        <table>
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

<?php

include 'koneksi.php';

?>

<html>
    <head>
        <title>Select</title>
        <style>
        
        table, th, td {
        justify-content: center;
        align-items: center;
        color: #111111;
        text-align: center;
		border-collapse: collapse;
		border: 4px solid #111111;
		font-family: 'Times New Roman', Times, serif;
		}

		th {
			background-color: #c8757dff;
		}

		td {
			background-color: #c8757dff;
		}
        </style>
    </head>
<body>
    <h3>Data Nilai Mahasiswa</h3>
    <table border = 1>
        <tr>
            <th>Id</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Presensi</th>
            <th>Tugas</th>
            <th>UTS</th>
            <th>UAS</th>
            <th>Operasi</th>
        </tr>
        <?php
        //membuat query
        $sql = "SELECT * FROM tabel_nilai";

        //jalankan query
        $result = mysqli_query($conn, $sql);

        //cek jumlah data
        if (mysqli_num_rows($result) > 0) {

            //menampilkan data
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['nama']."</td>";
                echo "<td>".$row['nim']."</td>";
                echo "<td>".$row['presensi']."</td>";
                echo "<td>".$row['tugas']."</td>";
                echo "<td>".$row['uts']."</td>";
                echo "<td>".$row['uas']."</td>";
                echo "<td>". "<a href='update.php?id=".$row['id']."'>Update</a>|<a href='delete.php?id=".$row['id']."'>Delete</a></td>";
                echo "</tr>";
            }
        }else {
            echo "Tidak ada data";
        }
        ?>
    </table>
    <a href="index.php">Tambah Data</a>
</body>
</html>