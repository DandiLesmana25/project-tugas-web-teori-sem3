<?php
$servername="localhost";
$username="root";
$password="";
$dbname="nilai_uts";

$koneksi=mysqli_connect($servername, $username, $password, $dbname);

if (!$koneksi) {
    echo "Koneksi Gagal";
}
?>
<html>
    <style type="text/css">
		table, th, td {
			border: 1px solid black;
			padding: 25px;
			text-align: left;
		}
	</style>
    <body>
        <fieldset style="width: 30%;">
        <center>
        <h3><center>Data Nilai Mahasiswa</center></h3>
        <table>
            <tr>
                <th> Id </th>
                <th style="width:20%;"> Nama </th>
                <th> NIM </th>
                <th> Presensi </th>
                <th> Tugas </th>
                <th> Uts </th>
                <th> Uas </th>
            </tr>
            <tr>
                <?php
                $sql = "SELECT * FROM nilai_uts";
                $result = mysqli_query($koneksi, $sql);
                while($row=mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    echo "<td>".$row['id']."</td>";
                    echo "<td>".$row['nama']."</td>";
                    echo "<td>".$row['nim']."</td>";
                    echo "<td>".$row['presensi']."</td>";
                    echo "<td>".$row['tugas']."</td>";
                    echo "<td>".$row['uts']."</td>";
                    echo "<td>".$row['uas']."</td>";
                    echo "<td><a href=\"form_edit.php?id=$row[id]\">Edit</a></td>";
                    echo "<td><a href=\"delete.php?id=$row[id]\">Delete</a></td>";
                    echo "</tr>";
                }
                ?>
            </tr>
        </table>
            <table>
                <br>
                <td style="width: 20%px;"><a href="form_nilai_uts.php">Tambahkan Data</a></td>
            </table>
        </center>    
        </fieldset>
    </body>
</html>
