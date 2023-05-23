<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nilai_db";

// create connection
$conn = mysqli_connect ($servername, $username, $password, $dbname);

// check  connection

if (!$conn) {
    die("Connection Failed :" . mysqli_connect);
}
echo "Connected succesfully";





