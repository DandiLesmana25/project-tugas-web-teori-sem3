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