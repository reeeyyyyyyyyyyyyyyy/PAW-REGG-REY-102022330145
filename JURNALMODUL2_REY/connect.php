<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "moduldua";
$port = 3306;


// conn
$conn = mysqli_connect($host, $username, $password, $database, $port);


// check conn

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

?>