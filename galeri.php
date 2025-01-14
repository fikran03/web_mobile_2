<?php
// Koneksi ke database
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

// Ambil data galeri dari database
$stmt = $conn->prepare("SELECT * FROM gallery");
$stmt->execute();
$gallery = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Second Gallery</title>
    <style>
        /* Global Styles */
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background: #d3b295; /* Warna sesuai contoh */
        }

        /* Header Styles */
        .header {
            background-color: #f4e1d2;
            text-align: center;
            padding: 40px 0;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .header h1 {
            margin: 0;
            font-size: 3em;
            color: #5a4234;
            font-family: 'Georgia', serif;
        }

        /* Navigation Styles */
        .navbar {
            display: flex;
            justify-content: center;
            background-color: #f4e1d2;
            padding: 10px 0;
        }

        .navbar a {
            color: #333;
            text-decoration: none;
            padding: 10px 20px;
            font-size: 1.2em;
            margin: 0 10px;
            transition: color 0.3s;
        }

        .navbar a:hover {
            color: #d35400;
        }

        .navbar a.active {
            font-weight: bold;
            color: #d35400;
        }

        /* Gallery Grid */
        .gallery-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
            gap: 20px;
            margin: 30px auto;
            width: 90%;
            max-width: 1200px;
        }

        .gallery-item {
            position: relative;
            overflow: hidden;
            cursor: pointer;
        }

        .gallery-item img {
            width: 100%;
            display: block;
            object-fit: cover;
            height: 200px;
            transition: transform 0.5s ease-in-out;
            border: 6px solid black;
        }

        .gallery-item:hover img {
            transform: scale(1.1);
        }

        /* Overlay Effect */
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-size: 1.5em;
            font-weight: bold;
            opacity: 0;
            transition: opacity 0.5s ease-in-out;
        }

        .gallery-item:hover .overlay {
            opacity: 1;
        }

        /* Footer */
        .footer {
            background: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
            margin-top: 20px;
        }

        /* Back Button */
        .back-button-container {
            text-align: center;
            margin: 20px 0;
        }

        .back-button {
            background-color: #5a4234;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 1.2em;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .back-button:hover {
            background-color: #d35400;
        }
    </style>
</head>
<body>

    <!-- Header -->
    <div class="header">
        <h1>Gallery</h1>
        <p>Galerry Project of CV. Klasagun Papua Abadi</p>
    </div>

    <!-- Galeri -->
    <style>
        .expand-btn {
            background: linear-gradient(135deg, #d2b356, #d2b356); /* Gradient background */
            color: white;
            padding: 12px 24px;
            font-size: 15px;
            font-weight: bold;
            border: none;
            border-radius: 8px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2); /* Subtle shadow */
            cursor: pointer;
            transition: all 0.3s ease; /* Smooth transition */
            display: inline-block; /* Membuat tombol menyesuaikan ukuran konten */
            width: 115px;
            height: 40px;
            /* width: 200px; */ /* Opsional: menentukan lebar spesifik */
            margin-left: 540px;
        }

        .expand-btn:hover {
            background: linear-gradient(135deg, #d2b356, #d2b356); /* Reverse gradient on hover */
            transform: scale(1.05); /* Slightly enlarge button on hover */
            box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.3); /* Deeper shadow on hover */
        }

        .expand-btn:active {
            transform: scale(0.95); /* Slightly shrink on click */
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2); /* Lighter shadow on click */
        }
        </style>
        
        </aside>

        <!--Content Section-->
        <div id="services" class="scrollto clearfix">
        <div class="row no-padding-bottom clearfix">

        <style>
            /* Add existing styles */
            /* Header Styles */
            .header {
                background-color: #f4e1d2;
                text-align: center;
                padding: 40px 0;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            }

            .header h1 {
                margin: 0;
                font-size: 3em;
                color: #5a4234;
                font-family: 'Georgia', serif;
            }

            /* Gallery Grid */
            .gallery-container {
                display: grid;
                grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
                gap: 20px;
                margin: 30px auto;
                width: 90%;
                max-width: 1200px;
                margin-bottom: 200px;
            }

            .gallery-item {
                position: relative;
                overflow: hidden;
                cursor: pointer;
            }

            .gallery-item img {
                width: 100%;
                display: block;
                object-fit: cover;
                height: 200px;
                transition: transform 0.5s ease-in-out;
                border: 6px solid black;
            }

            .gallery-item:hover img {
                transform: scale(1.1);
            }

            /* Overlay Effect */
            .overlay {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(0, 0, 0, 0.5);
                display: flex;
                justify-content: center;
                align-items: center;
                color: white;
                font-size: 1.5em;
                font-weight: bold;
                opacity: 0;
                transition: opacity 0.5s ease-in-out;
            }

            .gallery-item:hover .overlay {
                opacity: 1;
            }

            /* Modal Styles */
            .modal {
                display: none;
                position: fixed;
                z-index: 1;
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.8);
                justify-content: center;
                align-items: center;
                transition: opacity 0.3s ease;
            }

            .modal-content {
                position: relative;
                max-width: 90%;
                max-height: 90%;
                overflow: hidden;
            }

            .modal-content img {
                width: 100%;
                height: auto;
                transition: transform 0.3s ease-in-out;
                cursor: zoom-in;
            }

            /* Close Button Styles */
            .close {
                position: absolute;
                top: 25px;
                right: 30px;
                color: white;
                font-size: 2em;
                font-weight: bold;
                border: none;
                cursor: pointer;
            }

            /* Zoom Effect */
            .zoomed {
                transform: scale(1.5);
            }
        </style>

        <?php
        // Koneksi ke database
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

        // Ambil data galeri dari database
        $stmt = $conn->prepare("SELECT * FROM gallery");
        $stmt->execute();
        $gallery = $stmt->fetchAll(PDO::FETCH_ASSOC);
        ?>
        <!-- Gallery Section -->
        <div class="gallery-container">
            <?php if (!empty($gallery)): ?>
                <?php foreach ($gallery as $item): ?>
                    <div class="gallery-item" onclick="openModal('<?= htmlspecialchars($item['image']) ?>')">
                        <img src="<?= htmlspecialchars($item['image']) ?>" alt="<?= htmlspecialchars($item['title']) ?>">
                        <div class="overlay">
                            <?= htmlspecialchars($item['title']) ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p style="text-align: center; font-size: 1.5em;">Belum ada data galeri.</p>
            <?php endif; ?>
            <button class="expand-btn" onclick="window.location.href='index.php'">Kembali</button>
        </div>

        <!-- Modal for Image Zoom -->
        <div id="myModal" class="modal">
            <span class="close" onclick="closeModal()">&times;</span>
            <div class="modal-content">
                <img id="modalImage" src="" alt="Zoomed Image" onclick="zoomImage()">
            </div>
        </div>

        <script>
            // Open modal with image
            function openModal(imageSrc) {
                var modal = document.getElementById('myModal');
                var modalImage = document.getElementById('modalImage');
                modal.style.display = "flex";
                modalImage.src = imageSrc;
            }

            // Close the modal
            function closeModal() {
                var modal = document.getElementById('myModal');
                modal.style.display = "none";
            }

            // Zoom image inside the modal
            function zoomImage() {
                var modalImage = document.getElementById('modalImage');
                modalImage.classList.toggle("zoomed");
            }

            // Close modal if clicked outside of the image
            window.onclick = function(event) {
                var modal = document.getElementById('myModal');
                if (event.target === modal) {
                    modal.style.display = "none";
                }
            }
        </script>


    <!-- Galeri End -->

    <!-- Footer -->
    <div class="footer">
        &copy; 2024 CV. Klasagun Papua Abadi. All rights reserved.
    </div>

</body>
</html>
