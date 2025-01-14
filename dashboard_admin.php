<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: index.php');
    exit();
}

$host = 'localhost';
$dbname = 'admin_dashboard';
$username = 'root';
$password = '';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Koneksi gagal: " . $e->getMessage());
}

// Proses update material
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_material'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];

    $stmt = $conn->prepare("UPDATE materials SET name = :name, price = :price WHERE id = :id");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':price', $price);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $success = "Data material berhasil diupdate!";
}

// Proses tambah material
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_material'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $fileTmpPath = $_FILES['image']['tmp_name'];
    $fileName = basename($_FILES['image']['name']);
    $targetFilePath = 'uploads/' . $fileName;

    if (move_uploaded_file($fileTmpPath, $targetFilePath)) {
        $stmt = $conn->prepare("INSERT INTO materials (name, price, image) VALUES (:name, :price, :image)");
        $stmt->execute([
            ':name' => $name,
            ':price' => $price,
            ':image' => $targetFilePath
        ]);
        $success = "Material berhasil ditambahkan!";
    } else {
        $error = "Gagal mengunggah gambar material.";
    }
}

// Proses tambah galeri
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_gallery'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $category = $_POST['category'];
    $fileTmpPath = $_FILES['image']['tmp_name'];
    $fileName = basename($_FILES['image']['name']);
    $targetFilePath = 'uploads/' . $fileName;

    if (move_uploaded_file($fileTmpPath, $targetFilePath)) {
        $stmt = $conn->prepare("INSERT INTO gallery (image, title, description, category) VALUES (:image, :title, :description, :category)");
        $stmt->execute([
            ':image' => $targetFilePath,
            ':title' => $title,
            ':description' => $description,
            ':category' => $category
        ]);
        $success = "Galeri berhasil ditambahkan!";
    }
}

// Proses delete material
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['delete_material'])) {
    $id = $_GET['delete_material'];
    $stmt = $conn->prepare("DELETE FROM materials WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    header("Location: dashboard_admin.php");
    exit();
}

// Proses delete galeri
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['delete_gallery'])) {
    $id = $_GET['delete_gallery'];
    $stmt = $conn->prepare("DELETE FROM gallery WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    header("Location: dashboard_admin.php");
    exit();
}

// Logout
if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: index.php');
    exit();
}

// Catat data pengunjung
$ip_address = $_SERVER['REMOTE_ADDR'];
$user_agent = $_SERVER['HTTP_USER_AGENT'];
$stmt = $conn->prepare("INSERT INTO visitors (ip_address, user_agent) VALUES (:ip_address, :user_agent)");
$stmt->execute([
    ':ip_address' => $ip_address,
    ':user_agent' => $user_agent,
]);

// Ambil data materials dan gallery
$stmt = $conn->prepare("SELECT * FROM materials");
$stmt->execute();
$materials = $stmt->fetchAll(PDO::FETCH_ASSOC);

$stmt = $conn->prepare("SELECT * FROM gallery");
$stmt->execute();
$gallery = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <style>
        body {
            margin: 0;
            font-family: 'Roboto', sans-serif;
            background-color: #f4f4f9;
            color: #333;
            line-height: 1.6;
        }

        .header {
            background: linear-gradient(90deg, #007bff, #0056b3);
            color: white;
            padding: 20px 30px;
            text-align: center;
            font-family: 'Playfair Display', serif;
            font-size: 26px;
            position: relative;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .logout-btn {
            position: absolute;
            top: 20px;
            right: 20px;
            background: #ff4747;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 30px;
            cursor: pointer;
            transition: 0.3s;
            text-decoration: none;
        }

        .logout-btn:hover {
            background: #d12f2f;
        }

        .container {
            width: 80%;
            margin: 30px auto;
        }

        .section {
            margin: 40px 0;
        }

        h2 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        table th, table td {
            padding: 15px;
            text-align: center;
            border: 1px solid #ddd;
        }

        table th {
            background: #007bff;
            color: white;
        }

        table td {
            word-break: break-word;
        }

        table td img {
            width: 60px;
            height: 60px;
            object-fit: cover;
            border-radius: 50%;
        }

        .btn-primary {
            background: #007BFF;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 0;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn-primary:hover {
            background: #0056b3;
        }

        .btn-danger {
            background: #ff4747;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 30px;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn-danger:hover {
            background: #d12f2f;
        }

        .btn-primary {
            background: #007BFF;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 0;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn-primary:hover {
            background: #0056b3;
        }

        .btn-secondary {
            background: #28a745;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 0;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn-secondary:hover {
            background: #218838;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
        }

        .card {
            background: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-10px);
        }

        .card img {
            width: 100%;
            border-radius: 10px;
            max-height: 200px;
            object-fit: cover;
        }

        form {
            margin-bottom: 20px;
            padding: 15px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        form label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        form input, form select, form button {
            display: block;
            margin-bottom: 15px;
            padding: 10px;
            width: 100%;
            max-width: 400px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        form button {
            background-color: #007BFF;
            color: white;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        form button:hover {
            background-color: #0056b3;
        }

        .alert {
            padding: 10px;
            margin-bottom: 20px;
            background-color: #d4edda;
            color: #155724;
            border-radius: 5px;
            border: 1px solid #c3e6cb;
        }

    </style>
</head>
<body>
    <div class="header">
        <h1>Dashboard Admin</h1>
        <a href="?logout=true" class="logout-btn">Logout</a>
        <a href="dash.php" class="btn-secondary" style="position: absolute; top: 20px; left: 20px;">Dash Footer / Manajemen</a>
    </div>

    <div class="container">
        <?php if (isset($success)): ?>
            <p style="color: green;"> <?= $success ?> </p>
        <?php endif; ?>

        <h2>Kelola Material</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Nama Material</th>
                <th>Harga</th>
                <th>Gambar</th>
                <th>Action</th>
            </tr>
            <?php foreach ($materials as $material): ?>
                <form method="POST">
                    <tr>
                        <td><?= $material['id'] ?></td>
                        <td><input type="text" name="name" value="<?= htmlspecialchars($material['name']) ?>"></td>
                        <td><input type="number" name="price" value="<?= $material['price'] ?>"></td>
                        <td><img src="<?= htmlspecialchars($material['image']) ?>" alt="Material"></td>
                        <td>
                            <input type="hidden" name="id" value="<?= $material['id'] ?>">
                            <button type="submit" name="update_material">Update</button>
                            <a href="?delete_material=<?= $material['id'] ?>" onclick="return confirm('Yakin ingin menghapus material ini?')" style="color: red;">Hapus</a>
                        </td>
                    </tr>
                </form>
            <?php endforeach; ?>
        </table>

        <h2>Tambah Material</h2>
        <form method="POST" enctype="multipart/form-data">
            <input type="text" name="name" placeholder="Nama Material" required>
            <input type="number" name="price" placeholder="Harga" required>
            <input type="file" name="image" accept="image/*" required>
            <button type="submit" name="add_material" class="btn-primary">Tambah Material</button>
        </form>


        <h2>Daftar Galeri</h2>
        <div class="grid">
            <?php foreach ($gallery as $item): ?>
                <div class="card">
                    <img src="<?= htmlspecialchars($item['image']) ?>" alt="Galeri">
                    <h3><?= htmlspecialchars($item['title']) ?></h3>
                    <p><?= htmlspecialchars($item['description']) ?></p>
                    <p><strong>Kategori:</strong> <?= htmlspecialchars($item['category']) ?></p>
                    <a href="?delete_gallery=<?= $item['id'] ?>" onclick="return confirm('Yakin ingin menghapus galeri ini?')" style="color: red;">Hapus</a>
                </div>
            <?php endforeach; ?>
        </div>

        <h2>Tambah Galeri</h2>
        <form method="POST" enctype="multipart/form-data">
            <input type="text" name="title" placeholder="Judul" required>
            <input type="text" name="description" placeholder="Deskripsi" required>
            <select name="category" required>
                <option value="construction">Construction</option>
                <option value="infrastructure">Infrastructure</option>
                <option value="materials">Materials</option>
            </select>
            <input type="file" name="image" accept="image/*" required>
            <button type="submit" name="add_gallery">Tambah Galeri</button>
        </form>

        <h2>Data Pengunjung</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>IP Address</th>
                <th>Waktu Kunjungan</th>
                <th>User Agent</th>
            </tr>
            <?php
            $stmt = $conn->prepare("SELECT * FROM visitors ORDER BY visit_time DESC");
            $stmt->execute();
            $visitors = $stmt->fetchAll(PDO::FETCH_ASSOC);

            foreach ($visitors as $visitor): ?>
                <tr>
                    <td><?= $visitor['id'] ?></td>
                    <td><?= htmlspecialchars($visitor['ip_address']) ?></td>
                    <td><?= $visitor['visit_time'] ?></td>
                    <td><?= htmlspecialchars($visitor['user_agent']) ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>
