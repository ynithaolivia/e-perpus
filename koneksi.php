<?php
session_start();

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$koneksi = mysqli_connect("localhost", "root", "", "eperpus");

// Check connection
if (mysqli_connect_error()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>