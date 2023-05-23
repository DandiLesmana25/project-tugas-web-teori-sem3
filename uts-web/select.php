
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nilai_db";

// create connection
$conn = mysqli_connect ($servername, $username, $password, $dbname);

// check  connection

if (!$conn) {
    echo "Koneksi Gagal";
}
?>
<html>
    <body>
        <h3>Data Nilai Mahasiswa</h3>
        <table border=1>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Tugas</th>
                <th>Presensi</th>
                <th>UTS</th>
                <th>UAS</th>
            </tr>
            <tr>
                <?php
                // membuat query
                $sql= "SELECT * FROM nilai_mhs";             //disimpan di variable result
                //jalankan query
                $result = mysqli_query($conn, $sql);

                //cek jumlah data jika datanya 
                //apakah jumlah data  > 0
                if(mysqli_num_rows($result) > 0){
                //menampilkan data DARI ROW
                while($row=mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    echo "<td>". $row['id']."</td>";
                    echo "<td>". $row['nama']."</td>";
                    echo "<td>". $row['nim']."</td>";
                    echo "<td>". $row['tugas']."</td>";
                    echo "<td>". $row['presensi']."</td>";
                    echo "<td>". $row['uts']."</td>";
                    echo "<td>". $row['uas']."</td>";
                    echo "<td><a href=\"update.php?id=$row[id]\">Edit</a></td>";
                    echo "<td><a href=\"delete.php?id=$row[id]\">Delete</a></td>";
                    echo "</tr>";
                // echo "id :" . $row['id']."-Nama : ". $row['nama']." -NIM : " . $row['nim']. "<br>";
                }
                }else {
                echo "Tidak ada data";
                }
                
                ?>
            </tr>
        </table>
        <a href="uts.php">Tambah Data</a>
    </body>
</html>

<?php

// // membuat query
// $sql= "SELECT * FROM nilai";
// //jalankan query
// $result = mysqli_query($conn, $sql);

// //cek jum;ah data
// if(mysqli_num_rows($result) > 0){
//     //menampilkan data
//     while($row=mysqli_fetch_assoc($result)){
//         echo "id :" . $row['id']."-Nama : ". $row['nama']." -NIM : " . $row['nim']. "<br>";
//     }
// }else {
//     echo "Tidak ada data";
// }

?>