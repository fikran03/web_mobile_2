<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input, textarea, button {
            width: 100%;
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        button {
            background-color: #28a745;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #218838;
        }
        .back-button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            text-align: center;
            display: block;
            width: 150px;
            margin: 20px auto;
        }
        .back-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Admin Dashboard - Footer Management</h2>
        <form id="footerForm" action="update_footer.php" method="POST">
            <div class="form-group">
                <label for="address">Alamat:</label>
                <textarea id="address" name="address" rows="3" placeholder="Masukkan alamat..."></textarea>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Masukkan email...">
            </div>
            <div class="form-group">
                <label for="contact">Kontak:</label>
                <textarea id="contact" name="contact" rows="3" placeholder="Masukkan kontak..."></textarea>
            </div>
            <div class="form-group">
                <label for="logo">URL Logo:</label>
                <input type="text" id="logo" name="logo" placeholder="Masukkan URL logo...">
            </div>
            <div class="form-group">
                <label for="companyName">Nama Perusahaan:</label>
                <input type="text" id="companyName" name="companyName" placeholder="Masukkan nama perusahaan...">
            </div>
            <div class="form-group">
                <label for="description">Deskripsi Perusahaan:</label>
                <textarea id="description" name="description" rows="3" placeholder="Masukkan deskripsi perusahaan..."></textarea>
            </div>

        <button type="submit">Simpan</button>
        </form>
    </div>

    <form action="upload.php" method="POST" enctype="multipart/form-data">
    <label for="image">Upload Gambar:</label>
    <input type="file" name="image" required>
    <label for="title">Jabatan:</label>
    <input type="text" name="title" required>
    <button type="submit">Simpan</button>
</form>


<?php
// Mengimpor koneksi database
include('db_config.php');

// Query untuk mengambil data dari tabel staff
$result = $conn->query("SELECT * FROM staff");

// Menampilkan data gambar dan jabatan dengan tombol hapus
while ($row = $result->fetch_assoc()) {
    echo '<div class="col-3">';
    echo '<img src="' . $row['image_path'] . '" alt="' . $row['title'] . '" style="border: 6px solid black; width: 100px; height: 100px;"/>';
    echo '<p style="text-align: center; margin-top: 5px; font-size: 18px; font-weight: bold; color: #333; background-color: #d2b356; margin-left: 125px; padding: 5px 10px; border-radius: 5px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); display: inline-block; text-transform: uppercase; letter-spacing: 1px;">' . $row['title'] . '</p>';
    
    // Tombol Hapus
    echo '<form action="delete.php" method="POST" style="display:inline-block;">
            <input type="hidden" name="id" value="' . $row['id'] . '">
            <input type="hidden" name="image_path" value="' . $row['image_path'] . '">
            <button type="submit" onclick="return confirm(\'Apakah Anda yakin ingin menghapus data ini?\')">Hapus</button>
          </form>';
    echo '</div>';
}

$conn->close(); // Menutup koneksi database
?>
<!-- Button to go back to the previous page -->
<a href="dashboard_admin.php" class="back-button">Kembali</a>

</body>
</html>
