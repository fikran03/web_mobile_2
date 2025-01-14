<?php
// Mengimpor koneksi database
include('db_config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Mendapatkan data yang diunggah
    $target_dir = "uploads/"; // Direktori tempat gambar disimpan
    $target_file = $target_dir . basename($_FILES["image"]["name"]); // Path file
    $uploadOk = 1; // Status apakah pengunggahan berhasil
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION)); // Mendapatkan ekstensi file

    // Cek apakah file yang diunggah adalah gambar
    if (getimagesize($_FILES["image"]["tmp_name"]) === false) {
        echo "File yang diunggah bukan gambar.";
        $uploadOk = 0;
    }

    // Cek apakah file sudah ada di server
    if (file_exists($target_file)) {
        echo "File sudah ada.";
        $uploadOk = 0;
    }

    // Cek ukuran file (maksimal 5MB)
    if ($_FILES["image"]["size"] > 5000000) {
        echo "Ukuran file terlalu besar.";
        $uploadOk = 0;
    }

    // Cek jenis file gambar yang diperbolehkan (JPG, JPEG, PNG, GIF)
    if ($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png" && $imageFileType != "gif") {
        echo "Hanya file JPG, JPEG, PNG & GIF yang diperbolehkan.";
        $uploadOk = 0;
    }

    // Jika semua pengecekan lulus, lanjutkan dengan mengunggah file
    if ($uploadOk == 1) {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            // Mendapatkan data jabatan dari form
            $title = $_POST['title'];

            // Menyimpan data ke database
            $stmt = $conn->prepare("INSERT INTO staff (image_path, title) VALUES (?, ?)");
            $stmt->bind_param("ss", $target_file, $title); // Mengikat parameter untuk menghindari SQL injection

            // Menjalankan query dan memeriksa apakah berhasil
            if ($stmt->execute()) {
                echo "Data berhasil disimpan!";
            } else {
                echo "Gagal menyimpan data ke database.";
            }

            $stmt->close(); // Menutup prepared statement
        } else {
            echo "Terjadi kesalahan saat mengunggah file.";
        }
    }
}

// Menutup koneksi database
$conn->close();
?>
