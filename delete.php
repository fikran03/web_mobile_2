<?php
// Mengimpor koneksi database
include('db_config.php');

// Cek apakah id dan image_path ada
if (isset($_POST['id']) && isset($_POST['image_path'])) {
    $id = $_POST['id'];
    $image_path = $_POST['image_path'];

    // Menghapus file gambar dari server
    if (file_exists($image_path)) {
        unlink($image_path); // Menghapus file gambar
    }

    // Menghapus data dari database
    $stmt = $conn->prepare("DELETE FROM staff WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "Data berhasil dihapus.";
    } else {
        echo "Gagal menghapus data.";
    }

    $stmt->close();
} else {
    echo "Data tidak ditemukan.";
}

$conn->close(); // Menutup koneksi database

// Redirect ke halaman sebelumnya setelah penghapusan
header("Location: dash.php"); // Sesuaikan dengan halaman yang menampilkan data
exit;
?>
