<?php
//koneksi
include "koneksi.php";

//Get parameter ID
$ID = $_GET['id'];

//Query
$sql = "SELECT * FROM nilai_uts where id=$ID";

//Menjalankan query
$result=mysqli_query($koneksi, $sql);

$row=mysqli_fetch_assoc($result);
?>


<html>
<head>
<title>Wellcome</title>
</head>
<body>
	<h1><strong>Web Pemprograman Latihan 1</strong></h1>
	<hr>
	<h2>FORM EDIT NILAI</h2>	
<fieldset style="width: 25%;">
<form action="update.php" method="POST">
<table>
    <tr>
        <td>ID</td>
        <td>:</td>
        <td>
        <input type="text" name="id" style="width:260px;" value="<?php echo"$row[id]";?>"disabled>
        <input type="hidden" name="id" style="width:260px;" value="<?php echo"$row[id]";?>">        
        </td>       
    </tr>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td><input type="text" name="nama" style="width:260px;" value="<?php echo "$row[nama]"; ?>"></td>
	</tr>
	<tr>
		<td>NIM</td>
		<td>:</td>
		<td><input type="text" name="nim" style="width:260px;" value="<?php echo "$row[nim]"; ?>"></td>
	</tr>
	<tr>
		<td>Presensi</td>
		<td>:</td>
		<td><input type="text" name="presensi" style="width:260px;" value="<?php echo "$row[presensi]"; ?>">10%</td>
	</tr>
	<tr>
		<td>Tugas</td>
		<td>:</td>
		<td><input type="text" name="tugas" style="width:260px;" value="<?php echo "$row[tugas]"; ?>">25%</td>	
	</tr>
	<tr>
		<td>UTS</td>
		<td>:</td>
		<td><input type="text" name="uts" style="width:260px;" value="<?php echo "$row[uts]"; ?>">30%</td>
	</tr>
	<tr>
		<td>UAS</td>
		<td>:</td>
		<td><input type="text" name="uas" style="width:260px;" value="<?php echo "$row[uas]"; ?>">35%</td>
	</tr>
	<tr>
		<td><input type="submit" value="UPDATE" style="width:75px; height:30px; background: gray; color: white;"></td>
	</tr>
    <tr><td><a href="select.php">Cancel</td></tr>
</table>
</form>
</fieldset> 
</body>
</html>
