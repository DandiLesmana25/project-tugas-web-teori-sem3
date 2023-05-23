<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
	<h2>UTS Pemrograman Web 2022/2023</h2>
    <form action="insert.php" method="POST">
        <table>
            <tr>
                <td><label>Nama</label></td>
                <td> : <input type="text" name="nama"></td>
            </tr>
            <tr>
                <td><label>NIM</label></td>
                <td> : <input type="text" name="nim"></td>
            </tr>
            <tr>
                <td><label>Presensi</label></td>
                <td> : <input type="text" name="presensi">10%</td>
            </tr>
            <tr>
                <td><label>Tugas</label></td>
                <td> : <input type="text" name="tugas">25%</td>
            </tr>
            <tr>
                <td><label>UTS</label></td>
                <td> : <input type="text" name="uts">30%</td>
            <tr>
                <td><label>UAS</label></td>
                <td> : <input type="text" name="uas">35%</td>
            </tr>
            <tr>
                <td><Button type="submit" name="submit">Proses</Button></td>
            </tr>
            <tr>
                <td><a href="select.php">Lihat Data</a></td>
            </tr>
        </table>
    </form>
</body>
</html>