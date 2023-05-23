<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTSWEB</title>
    <style>
        body {
            background-color: whitesmoke;
        }
        
        p {
            font-family: courier;
        }
    </style>
</head>

<body>
    <h2>UTS Pemrograman Web 2022/2023</h2>
    <form action="proses.php" method="post" target="_blank">
        <pre>
Nama        : <input type="text" name="nama"><br>

NIM         : <input type="number" name="nim"> <br> 
       
Presensi    : <input type="number" name="presensi" required> <br>

Tugas       : <input type="number" name="tugas" required> <br>
       
UTS         : <input type="number" name="uts" required> <br>

UAS         : <input type="number" name="uas"  required> <br>

<input type="submit" value="proses">

<a href="select.php">Lihat Data</a>
        <!-- <input type="submit" name="daftar"> -->
        <!-- <input type="reset" name="hapus_data"> -->
    </form>


</body>

</html>