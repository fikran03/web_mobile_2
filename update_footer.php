<?php
include 'db_config.php'; // Hubungkan ke database

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari form
    $address = $conn->real_escape_string($_POST['address']);
    $email = $conn->real_escape_string($_POST['email']);
    $contact = $conn->real_escape_string($_POST['contact']);
    $logo = $conn->real_escape_string($_POST['logo']);
    $companyName = $conn->real_escape_string($_POST['companyName']);
    $description = $conn->real_escape_string($_POST['description']);

    // Perbarui data footer di database
    $sql = "UPDATE footer SET 
                address = '$address', 
                email = '$email', 
                contact = '$contact', 
                logo = '$logo', 
                companyName = '$companyName', 
                description = '$description' 
            WHERE id = 1";

    if ($conn->query($sql) === TRUE) {
        echo "Data footer berhasil diperbarui.";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close(); // Tutup koneksi database
}
?>
