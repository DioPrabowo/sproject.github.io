<?php
$servername = "localhost";
$username = "root";
$password = "";
$db   = "sproject";

// Create connection
$koneksi = new mysqli($servername, $username, $password,$db);

// Check connection
if ($koneksi->connect_error) {
    die("Connection failed: " . $koneksi->connect_error);
}

// Sesuaikan path sesuai dengan struktur proyek Anda

?>