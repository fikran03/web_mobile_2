<?php
// Konfigurasi database
$host = "localhost";    // Host database, biasanya "localhost"
$user = "root";         // Username database Anda
$pass = "";             // Password database Anda
$db   = "dashboard_db"; // Nama database Anda

// Membuat koneksi ke database
$conn = new mysqli($host, $user, $pass, $db);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}
?>
