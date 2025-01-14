<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">

    <!--Page Title-->
    <title>e-Klasagun</title>

    <!--Meta Keywords and Description-->
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>

    <!--Favicon-->
    <link rel="shortcut icon" href="images/yup.jpg" title="KPA"/>

    <!-- Main CSS Files -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Namari Color CSS -->
    <link rel="stylesheet" href="css/namari-color.css">

    <!--Icon Fonts - Font Awesome Icons-->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Animate CSS-->
    <link href="css/animate.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    <!--Google Webfonts-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!-- Preloader -->
<div id="preloader">
    <div id="status" class="la-ball-triangle-path">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<!--End of Preloader-->

<div class="page-border" data-wow-duration="0.7s" data-wow-delay="0.2s">
    <div class="top-border wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;"></div>
    <div class="right-border wow fadeInRight animated" style="visibility: visible; animation-name: fadeInRight;"></div>
    <div class="bottom-border wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;"></div>
    <div class="left-border wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;"></div>
</div>

<div id="wrapper">

    <header id="banner" class="scrollto clearfix" data-enllax-ratio=".5">
        <div id="header" class="nav-collapse">
            <div class="row clearfix">
                <div class="col-1">

                    <!--Logo-->
                    <div id="logo">

                        <!--Logo that is shown on the banner-->
                        <img src="images/ekla.png" id="banner-logo" alt="Landing Page"/>
                        <!--End of Banner Logo-->

                                

                        <!--The Logo that is shown on the sticky Navigation Bar-->
                        <img src="images/ekla.png" id="navigation-logo" alt="Landing Page"/>
                        <!--End of Navigation Logo-->

                    </div>
                    <!--End of Logo-->

                    <aside>
                        <!-- Social Icons in Header -->
                        <ul class="social-icons">
                            <li>
                                <a target="_blank" title="Facebook" href="https://www.facebook.com/username">
                                    <i class="fa fa-facebook fa-1x"></i><span>Facebook</span>
                                </a>
                            </li>
                            <li>
                                <a target="_blank" title="Instagram" href="https://www.instagram.com/klasagun_papua_abadi/profilecard/?igsh=MW16MzVkOWRzaHd6aA==">
                                    <i class="fa fa-instagram fa-1x"></i><span>Instagram</span>
                                </a>
                            </li>
                            <li>
                                <a target="_blank" title="Email" href="mailto:klasagunpapuaabadi@gmail.com">
                                    <i class="fa fa-envelope fa-1x"></i><span>Email</span>
                                </a>
                            </li>
                            <a href="admin_login.php" class="btn btn-primary d-flex justify-content-center align-items-center" style="width: 50px; height: 50px; border-radius: 50%;">
                            <i class="fas fa-sign-in-alt h3" ></i>
                        </a>
                        </ul>
                        
                        <!-- End of Social Icons in Header -->
                    </aside>
                    

                    <!--Main Navigation-->
                    <nav id="nav-main">
                        <ul>
                            <li>
                                <a href="#banner">Home</a>
                            </li>
                            <li>
                                <a href="#about">About</a>
                            </li>
                            <li>
                                <a href="#gallery">Gallery</a>
                            </li>
                            <li>
                                <a href="#services">Services</a>
                            </li>
                            <li>
                                <a href="#testimonials">Testimonials</a>
                            </li>
                            <li>
                                <a href="#pricing">Pricing</a>
                            </li>
                            <li>
                                <a href="#contact">Contact</a>
                            </li>
                        </ul>
                    </nav>
                    <!--End of Main Navigation-->

                    <div id="nav-trigger"><span></span></div>
                    <nav id="nav-mobile"></nav>

                </div>
            </div>
        </div><!--End of Header-->

        <!-- Banner Content -->
        <div id="banner-content" class="row clearfix">

            <div class="col-38">

                <div class="section-heading">
                    <h1 class="left-align typewriter"></h1>
                    <h2 class="left-align">Mengutamakan Kualitas dalam Setiap Proyek Konstruksi Layanan Kontraktor dan Pengadaan Material Profesional di Sorong, Papua Barat Daya</h2>
                </div>

                <style>
                    .left-align {
                        text-align: left;
                        font-family: Arial, sans-serif;
                        font-size: 2em;
                    }
                    
                    .typewriter::after {
                        content: '';
                        animation: blink 0.7s step-end infinite;
                        color: black;
                    }
                    
                    @keyframes blink {
                        50% {
                            opacity: 0;
                        }
                    }

                </style>

                <script>
                    const texts = ["CV. KLASAGUN PAPUA ABADI", "PENYUPLAI MATERIAL & KONTRAKTOR"];
                    let textIndex = 0;  // Index untuk menentukan teks yang sedang ditampilkan
                    let charIndex = 0;  // Index karakter saat ini
                    let isDeleting = false;
                    const speed = 100;   // Kecepatan mengetik dalam milidetik
                    const delay = 2000;  // Jeda sebelum menghapus teks

                    function typeWriter() {
                        const element = document.querySelector('.typewriter');
                        const currentText = texts[textIndex];

                        // Kondisi saat menambahkan teks
                        if (!isDeleting && charIndex <= currentText.length) {
                            element.innerHTML = currentText.slice(0, charIndex) + '<span class="cursor"></span>';
                            charIndex++;
                            setTimeout(typeWriter, speed);

                        // Mulai penghapusan teks ketika selesai mengetik
                        } else if (isDeleting && charIndex >= 0) {
                            element.innerHTML = currentText.slice(0, charIndex) + '<span class="cursor"></span>';
                            charIndex--;
                            setTimeout(typeWriter, speed);

                        // Reset ke kondisi mengetik untuk teks berikutnya
                        } else if (charIndex < 0) {
                            isDeleting = false;
                            charIndex = 0;
                            textIndex = (textIndex + 1) % texts.length;  // Beralih ke teks berikutnya
                            setTimeout(typeWriter, speed);

                        // Jeda sebelum mulai penghapusan teks
                        } else {
                            isDeleting = true;
                            setTimeout(typeWriter, delay);
                        }
                    }

                    // Mulai animasi saat halaman dimuat
                    window.onload = typeWriter;


                </script>
                <!-- Call to Action -->
                <!-- End Call to Action -->
                <a href="tel:+6281243172003" class="button" style=" cursor: pointer; ">HUBUNGI KAMI</a>
            </div>

        </div><!-- End of Row -->

        <style>
            .left-align {
                text-align: left; /* Pastikan teks rata kiri */
            }
        </style>

    </header>

    <!--Main Content Area-->
    <main id="content">

        <!--Introduction-->
        <section id="about" class="introduction scrollto">

            <div class="row clearfix">

                <div class="col-3">
                    <div class="section-heading">
                        <!-- Tambahkan tag img di sini -->
                        <img src="images/yup.jpg" alt="Layanan CV. Klasagun Papua Abadi" style="width:100px; height:100px;">
                        
                        <h3>LAYANAN</h3>
                        <h2 class="section-title">CV. KLASAGUN PAPUA ABADI</h2>
                        <p class="section-subtitle" style="color: black;">
                            Kami adalah mitra terpercaya Anda dalam konstruksi, menyediakan solusi berkualitas tinggi dengan layanan profesional, tepat waktu, dan sesuai anggaran. 
                            Dengan tim ahli berpengalaman dan teknologi terbaru, kami berkomitmen untuk menghadirkan hasil terbaik
                            yang dapat memenuhi kebutuhan serta harapan Anda di setiap proyek, mulai dari perencanaan hingga penyelesaian.
                        </p>
                        <button class="expand-btn1" onclick="window.location.href='sejarah.html'">Sejarah</button>             
                    </div>

                    <style>
                    .expand-btn1 {
                        background: linear-gradient(135deg, #d2b356, #d2b356); /* Gradient background */
                        color: white;
                        padding: 12px 24px;
                        font-size: 14px;
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
                    }

                    .expand-btn1:hover {
                        background: linear-gradient(135deg, #d2b356, #d2b356); /* Reverse gradient on hover */
                        transform: scale(1.05); /* Slightly enlarge button on hover */
                        box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.3); /* Deeper shadow on hover */
                    }

                    .expand-btn1:active {
                        transform: scale(0.95); /* Slightly shrink on click */
                        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2); /* Lighter shadow on click */
                    }
                    </style>
                </div>
                <div class="col-2-3">

                    <!--Icon Block-->
                    <div class="col-2 icon-block icon-top wow fadeInUp" data-wow-delay="0.1s">
                        <!--Icon-->
                        <div class="icon">
                            <img src="images/satu.png" alt="Architecture Logo" style="width:50px; height:auto;"> <!-- Gambar logo -->
                        </div>
                        <!--Icon Block Description-->
                        <div class="icon-block-description">
                            <h4>Architecture &amp; Building</h4>
                            <p>Bidang ini berkaitan dengan perencanaan, desain, dan pembangunan struktur bangunan yang meliputi rumah tinggal, gedung komersial, dan fasilitas umum lainnya. 
                                Kami menyediakan layanan profesional dalam merancang dan membangun bangunan yang sesuai dengan kebutuhan dan visi klien kami.</p>
                        </div>
                    </div>
                    <!--End of Icon Block-->


                    <!--Icon Block-->
                    <div class="col-2 icon-block icon-top wow fadeInUp" data-wow-delay="0.3s">
                        <!--Icon-->
                        <div class="icon">
                            <img src="images/dua.png" alt="Architecture Logo" style="width:50px; height:auto;"> <!-- Gambar logo -->
                        </div>
                        <!--Icon Block Description-->
                        <div class="icon-block-description">
                            <h4>Konstruksi</h4>
                            <p>Kami adalah ahli dalam pelaksanaan konstruksi, termasuk pemancangan, pengecoran, pemasangan struktur, dan finishing bangunan. 
                                Dengan tenaga kerja terampil dan peralatan modern, kami memberikan hasil berkualitas tinggi dan tepat waktu dalam setiap proyek konstruksi yang kami tangani.</p>
                        </div>
                    </div>
                    <!--End of Icon Block-->

                    <!--Icon Block-->
                    <div class="col-2 icon-block icon-top wow fadeInUp" data-wow-delay="0.5s">
                        <!--Icon-->
                        <div class="icon">
                            <img src="images/tiga.png" alt="Architecture Logo" style="width:50px; height:auto;"> <!-- Gambar logo -->
                        </div>
                        <!--Icon Block Description-->
                        <div class="icon-block-description">
                            <h4>Laveransir</h4>
                            <p>Bidang ini mencakup pengadaan material bangunan dan peralatan konstruksi. Kami menyediakan berbagai macam material berkualitas tinggi, seperti batu bata, semen, 
                                besi beton, dan pasir hitam dengan kualitas terbaik di kota sorong, serta menyediakan layanan pengiriman untuk memastikan kelancaran proyek konstruksi Anda.</p>
                        </div>
                    </div>
                    <!--End of Icon Block-->

                    <!--Icon Block-->
                    <div class="col-2 icon-block icon-top wow fadeInUp" data-wow-delay="0.5s">
                        <!--Icon-->
                        <div class="icon">
                            <img src="images/empat.png" alt="Architecture Logo" style="width:50px; height:auto;"> <!-- Gambar logo -->
                        </div>
                        <!--Icon Block Description-->
                        <div class="icon-block-description">
                            <h4>Amanah</h4>
                            <p>CV. Klasagun Papua Abadi selalu menjunjung tinggi amanah dalam setiap pekerjaan yang kami lakukan. Sebagai kontraktor dan penyedia material terpercaya, kami berkomitmen untuk memberikan hasil terbaik dengan integritas dan tanggung jawab. 
                                Setiap proyek yang kami tangani dikerjakan dengan teliti, transparan, dan sesuai dengan janji yang telah kami buat, memastikan kepuasan dan kepercayaan penuh dari klien.</p>
                        </div>
                    </div>
                    <!--End of Icon Block-->
                    
                </div>
            </div>
        </section>
        <!--End of Introduction-->

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
            margin-left: 500px;
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
                top: 100px;
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
            <button class="expand-btn" onclick="window.location.href='galeri.php'">Gallery</button>
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


<!--Content Left Side-->
<div class="col-3">
   <!--User Testimonial-->
   <blockquote class="testimonial text-right bigtest">
       <q>Kami memiliki pengalaman yang luas dalam industri konstruksi di Papua Barat Daya, memberikan kepercayaan bagi pelanggan dalam setiap proyek yang kami tangani.</q>
       <footer>— Pengalaman Luas</footer>
   </blockquote>
   <!-- End of Testimonial-->

   <!--User Testimonial-->
   <blockquote class="testimonial text-right bigtest">
    <q>Kami mengutamakan kualitas dalam setiap tahap konstruksi, dari perencanaan hingga pelaksanaan, untuk memberikan hasil terbaik yang memenuhi standar dan kebutuhan pelanggan.</q>
    <footer>— Kualitas Terbaik</footer>
</blockquote>
<!-- End of Testimonial-->

<!--User Testimonial-->
<blockquote class="testimonial text-right bigtest">
    <q>Kami selalu siap memberikan pelayanan yang ramah, responsif, dan personal kepada setiap pelanggan, memastikan kepuasan dan kepercayaan pelanggan terjaga sepenuhnya.</q>
    <footer>— Pelayanan Prima</footer>
</blockquote>
<!-- End of Testimonial-->

<style>
    /* Style for testimonials */
    .testimonial {
        margin-bottom: 20px; /* Menambah jarak antar testimonial */
        margin: 5px;
        padding: 15px;
        background-color: #f4f4f4;
        border-left: 5px solid #d2b356;
        border-radius: 5px;
        font-style: italic;
        color: #555;
    }

    .testimonial q {
        display: block;
        font-size: 1.1em;
        line-height: 1.5;
    }

    .testimonial footer {
        margin-top: 10px;
        font-weight: bold;
        text-align: center;
        color: #333;
    }
</style>

</div>
<!--End Content Left Side-->

<!--Content of the Right Side-->
<div class="col-3">
   <div class="section-heading">
       <h3>BELIEVING</h3>
       <h2 class="section-title">Focusing On CV. Klasagun Papua Abadi</h2>
       <p class="section-subtitle">CV. Klasagun Papua Abadi adalah salah satu perusahaan lokal atau OAP (orang asli Papua) 
        yg bergerak di bidang jasa konstruksi yg saat ini berlokasi di Kota Sorong Prop. Papua Barat Daya.</p>
   </div>
   <p>Kami adalah mitra terpercaya Anda dalam bidang kontraktor dan pengadaan material. Berlokasi di Jln. Moyo Km. 13, Klasaman, 
    Distrik Klaurung, Kota Sorong, Papua Barat Daya, kami memiliki pengalaman yang luas dalam menyediakan layanan konstruksi berkualitas tinggi di Papua.
   </p>
   <p>
    Dengan komitmen kami untuk memberikan hasil terbaik, kami siap menjawab kebutuhan proyek konstruksi Anda dengan profesionalisme dan integritas yang tinggi. 
    Hubungi kami melalui nomor HP yang tertera untuk konsultasi dan informasi lebih lanjut. Mari bangun masa depan yang lebih baik bersama CV. KLASAGUN PAPUA ABADI.
   </p>
</div>
<!--End Content Right Side-->

<?php
// Mengimpor koneksi database
include('db_config.php');

// Query untuk mengambil data dari database
$result = $conn->query("SELECT * FROM staff");

// Menampilkan data dari database
while ($row = $result->fetch_assoc()) {
    echo '<div class="col-3">';
    echo '<img src="' . $row['image_path'] . '" alt="' . $row['title'] . '" style="border: 6px solid black;"/>';
    echo '<p style="text-align: center; margin-top: 5px; font-size: 18px; font-weight: bold; color: #333; background-color: #d2b356; margin-left: 125px; padding: 5px 10px; border-radius: 5px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); display: inline-block; text-transform: uppercase; letter-spacing: 1px;">' . $row['title'] . '</p>';
    echo '</div>';
}

// Menutup koneksi
$conn->close();
?>


</div>

</div>
<!--End of Content Section-->

        <!-- Testimonials -->
        <aside id="testimonials" class="scrollto text-center" data-enllax-ratio=".2">
            <div class="row clearfix">
                <div class="section-heading">
                    <h3>FEEDBACK</h3>
                    <h2 class="section-title">Apa yang dikatakan customer</h2>
                </div>
                <!-- User Testimonial 1 -->
                <blockquote class="col-3 testimoniall classic">
                    <div class="testimoniall-content">
                        <div class="short-text">Mantap 👍 Mudah2an ini perusahaan akan menjadi pionir...</div>
                        <div class="full-text" style="display: none;">Mantap 👍 Mudah2an ini perusahaan akan menjadi pionir dari Papua, semoga sukses selalu dan jaya selalu</div>
                        <button class="expand-btn2" onclick="toggleText(this)">Read More</button>
                    </div>
                    <footer>R4 - Happy Customer</footer>
                </blockquote>
                
                <!-- User Testimonial 2 -->
                <blockquote class="col-3 testimoniall classic">
                    <div class="testimoniall-content">
                        <div class="short-text">I am reaching out to explore potential collaborations where I can bring...</div>
                        <div class="full-text" style="display: none;">I am reaching out to explore potential collaborations where I can bring my proven track record in sales and marketing to your team. With a strong commitment to delivering measurable results, I guarantee improvements in your sales metrics.</div>
                        <button class="expand-btn2" onclick="toggleText(this)">Read More</button>
                    </div>
                    <footer>Daniel Sanderson - Happy Customer</footer>
                </blockquote>
                
                <!-- User Testimonial 3 -->
                <blockquote class="col-3 testimoniall classic">
                    <div class="testimoniall-content">
                        <div class="short-text">Perusahaan OAP yang dapat di di percaya...KPA Sukses selalu...</div>
                        <div class="full-text" style="display: none;">Perusahaan OAP yang dapat di di percaya…KPA Sukses selalu..</div>
                        <button class="expand-btn2" onclick="toggleText(this)">Read More</button>
                    </div>
                    <footer>KI - Happy Customer</footer>
                </blockquote>
            </div>
        </aside>

        <style>
            .testimoniall-content {
                position: relative;
                margin: 15px 0;
            }
        
            .expand-btn2 {
                background: #d2b356;
                color: rgb(0, 0, 0);
                border: none;
                padding: 5px 15px;
                border-radius: 15px;
                cursor: pointer;
                margin-top: 10px;
                font-size: 0.9em;
                transition: background-color 0.3s;
            }
        
            .expand-btn2:hover {
                background: #bfa045;
            }
        
            .short-text, .full-text {
                margin-bottom: 10px;
            }
        
            .testimoniall {
                transition: height 0.3s ease;
                margin-bottom: 30px; /* Adds spacing between testimonials */
                padding: 20px;
                border: 2px solid #000000;
                border-radius: 8px;
                width: 410px;
                margin: 2px;
                background-color: #ffffff;
            }

        </style>        

        <script>
        function toggleText(button) {
            const content = button.parentElement;
            const shortText = content.querySelector('.short-text');
            const fullText = content.querySelector('.full-text');
            
            if (fullText.style.display === 'none') {
                shortText.style.display = 'none';
                fullText.style.display = 'block';
                button.textContent = 'Read Less';
            } else {
                shortText.style.display = 'block';
                fullText.style.display = 'none';
                button.textContent = 'Read More';
            }
        }

        // Initialize on page load
        document.addEventListener("DOMContentLoaded", () => {
            const testimonials = document.querySelectorAll(".testimonial");
            testimonials.forEach(testimonial => {
                const fullText = testimonial.querySelector('.full-text');
                if (fullText) {
                    fullText.style.display = 'none';
                }
            });
        });
        </script>

<!--Clients-->
<section id="clients" class="scrollto clearfix">
<div class="row clearfix">

<div class="col-3">

   <div class="section-heading">
       <h3>TRUST</h3>
       <h2 class="section-title">Mengapa harus memilih kami?</h2>
       <p class="section-subtitle">"Selamat datang di CV. Klasagun Papua Abadi! Kami adalah mitra terpercaya Anda dalam 
        penyediaan material berkualitas dan layanan kontraktor terbaik di Papua. Dengan komitmen untuk kepuasan pelanggan, 
        kami menyediakan berbagai material bangunan berkualitas tinggi dan tenaga profesional untuk memastikan setiap proyek 
        Anda berjalan lancar, tepat waktu, dan sesuai anggaran. Dari kebutuhan konstruksi besar hingga renovasi kecil, 
        percayakan pada CV. Klasagun Papua Abadi untuk hasil yang unggul dan terpercaya. Hubungi kami sekarang dan wujudkan 
        proyek impian Anda bersama kami!"</p>
   </div>

</div>

<div class="col-2-3">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Video YouTube</title>
        <style>
    
            .video-container {
                max-width: 800px;
                width: 100%;
                margin: 0 auto;
                background-color: #fff;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                text-align: center;
                border: 5px solid black;
            }
    
            .video-title {
                font-size: 24px;
                font-weight: bold;
                margin-bottom: 10px;
            }
    
            .video-description {
                font-size: 16px;
                color: #555;
                margin-bottom: 20px;
            }
    
            iframe {
                width: 100%;
                height: 450px;
                border: none;
                border-radius: 8px;
            }
        </style>
    
    <div class="video-container">
        <div id="testimonial" class="scrollto clearfix"></div>
        <div class="video-title">Video Project Kami</div>
        <div class="video-description">Video Ini Menampilkan Tentang Project dan Layanan Kami.</div>
        <iframe 
            src="https://www.youtube.com/embed/UV4915BVBlY" 
            title="YouTube video player" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen>
        </iframe>
    </div>

</div>

</div>
</section>
<!--End of Clients-->

<!-- Pricing Tables -->
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

// Ambil data material
$stmt = $conn->prepare("SELECT * FROM materials");
$stmt->execute();
$materials = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!-- Pricing Tables -->
<section id="pricing" class="secondary-color text-center scrollto clearfix">
    <div class="row clearfix">
        <div class="section-heading">
            <h3>YOUR CHOICE</h3>
            <h2 class="section-title">Kami menyediakan material untuk anda</h2>
        </div>

        <?php foreach ($materials as $material): ?>
        <!-- Pricing Block -->
        <div class="pricing-block col-3 wow fadeInUp" data-wow-delay="0.4s">
            <div class="pricing-block-content">
                <img src="<?= $material['image'] ?>" alt="<?= $material['name'] ?>" class="pricing-image"/>
                <h3><?= htmlspecialchars($material['name']) ?></h3>
                <p class="pricing-sub">Kualitas Terjamin</p>
                <div class="pricing">
                    <div class="price"><span>Rp</span><?= number_format($material['price'], 0, ',', '.') ?></div>
                    <p>Anda bisa menggunakan metode pembayaran dibawah</p>
                </div>
                <ul>
                    <li>Pembayaran Tunai</li>
                    <li>Transfer Bank</li>
                    <li>Kartu Kredit dan Kartu Debit</li>
                    <li>Virtual Account</li>
                    <li>E-wallet</li>
                </ul>
                <a href="tel:+6281243172003" class="button">BUY TODAY</a>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>


</main>
<!--End Main Content Area-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <section id="contact" class="secondary-color text-center scrollto clearfix "></section>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rating Feature</title>
    <style>
        /* Container to position map and rating form side-by-side */
        .container {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin: 40px auto;
            max-width: 1300px;
            padding: 0 20px;
            gap: 20px;
        }

        /* Enhanced styling for the map container */
        .map-container {
            width: 45%;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 3px 4px 10px rgba(0, 0, 0, 0.15);
            transition: transform 0.3s, box-shadow 0.3s;
            border: 3px solid #000000;
            height: 565px;
        }

        .map-container:hover {
            transform: scale(1.02);
            box-shadow: 3px 6px 15px rgba(0, 0, 0, 0.2);
        }

        .map-container iframe,
        .map-container .map {
            width: 100%;
            height: 100%;
            border: 0;
        }


        /* Styling for the rating form */
        .rating-form {
            width: 45%;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            background: #fff;
            font-family: Arial, sans-serif;
        }

        /* Form title */
        .rating-form h2 {
            font-size: 22px;
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }

        /* Labels and inputs */
        .rating-form label {
            display: block;
            margin: 10px 0 5px;
            color: #555;
            font-weight: bold;
        }
        .rating-form input, .rating-form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 16px;
            color: #333;
        }
        .rating-form textarea {
            resize: vertical;
        }

        /* Star rating styling */
        .rating-form .star-rating {
            font-size: 24px;
            color: #FFD700; /* Gold color */
            display: flex;
            justify-content: center;
            margin-bottom: 15px;
            cursor: pointer;
        }
        .star-rating .star {
            font-size: 28px;
            transition: color 0.3s;
        }

        /* Submit button */
        .rating-form button {
            width: 100%;
            padding: 12px;
            background: #0ab331;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s;
        }
        .rating-form button:hover {
            background: #0ab331;
        }
    </style>
</head>
<body>

<div class="container">
    <!-- Map with enhanced styling, positioned on the left -->
    <div class="map-container">
        <iframe  
            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=CV. KLASAGUN PAPUA ABADI+Klasaman+Sorong+Indonesia"
            width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"> 
        </iframe> 
    </div>
    
    <!-- Rating form positioned on the right -->
    <div class="rating-form">
        <h2>Submit Your Feedback</h2>
        <form onsubmit="sendToWhatsApp(event)">
            <label for="name">Name:</label>
            <input type="text" id="name" required placeholder="Your Name">

            <label for="email">Email:</label>
            <input type="email" id="email" required placeholder="Your Email">

            <label for="message">Message:</label>
            <textarea id="message" rows="4" required placeholder="Your Message"></textarea>

            <button type="submit">Submit Rating</button>
        </form>
    </div>
</div>

<script>
    // JavaScript for WhatsApp Integration and Star Rating
    let selectedRating = 0;
    
    document.querySelectorAll('.star').forEach(star => {
        star.addEventListener('click', function() {
            selectedRating = this.getAttribute('data-value');
            highlightStars(selectedRating);
        });
    });

    function highlightStars(rating) {
        document.querySelectorAll('.star').forEach(star => {
            if (star.getAttribute('data-value') <= rating) {
                star.style.color = "#FFD700";
            } else {
                star.style.color = "#ccc";
            }
        });
    }

    function sendToWhatsApp(event) {
        event.preventDefault();

        // Get form values
        const name = document.getElementById("name").value;
        const email = document.getElementById("email").value;
        const message = document.getElementById("message").value;

        // Format the message for WhatsApp
        const whatsappMessage = `Hello!%0A%0A*New Rating Submission*%0A%0A*Name:* ${name}%0A*Email:* ${email}%0A*Rating:* ${selectedRating} Stars%0A*Message:* ${message}`;

        // WhatsApp number (replace with your actual phone number)
        const phoneNumber = "6285244542679"; // e.g., "6281234567890" for Indonesia

        // Open WhatsApp with pre-filled message
        window.open(`https://wa.me/${phoneNumber}?text=${whatsappMessage}`, "_blank");
    }
</script>

</body>
</html>


<!-- Footer -->
<?php
include 'db_config.php'; // Koneksi ke database

$sql = "SELECT * FROM footer WHERE id=1";
$result = $conn->query($sql);
$data = $result->fetch_assoc();
?>

<?php
include 'db_config.php'; // Koneksi ke database

$sql = "SELECT * FROM footer WHERE id=1";
$result = $conn->query($sql);
$data = $result->fetch_assoc();
?>

<footer style="
    background: url('<?= $data['background_image'] ?>') no-repeat center center;
    background-size: cover;
    color: #fff;
    padding: 40px 20px; /* Kurangi padding atas dan bawah */
    text-align: center;">
    <div style="
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px; /* Kurangi padding di dalam kotak */
        background-color: rgba(0, 0, 0, 0.6);
        border-radius: 8px;">

        <!-- Logo -->
        <div style="margin-bottom: 20px;"> <!-- Kurangi margin bawah -->
            <img src="<?= $data['logo'] ?>" 
                 alt="Logo Perusahaan" 
                 style="max-width: 150px; height: auto; margin-bottom: 10px;"> <!-- Kurangi ukuran logo -->
        </div>

        <!-- Address, Email, Contact Info -->
        <div style="
            display: flex;
            justify-content: center;
            gap: 20px; /* Kurangi jarak antar kolom */
            flex-wrap: wrap;
            margin-bottom: 20px; /* Kurangi margin bawah */
            font-size: 14px;"> <!-- Kurangi ukuran font -->
            <!-- Address -->
            <div style="flex: 1 1 200px; min-width: 200px;">
                <p><strong>Alamat:</strong></p>
                <p><?= $data['address'] ?></p>
            </div>

            <!-- Email -->
            <div style="flex: 1 1 200px; min-width: 200px;">
                <p><strong>Email:</strong></p>
                <p><?= $data['email'] ?></p>
            </div>

            <!-- Contact -->
            <div style="flex: 1 1 200px; min-width: 200px;">
                <p><strong>Kontak:</strong></p>
                <p><?= $data['contact'] ?></p>
            </div>
        </div>

        <!-- Company Name & Description -->
        <div>
            <p style="
                font-size: 18px; /* Kurangi ukuran font */
                font-weight: bold;
                margin-bottom: 5px;"> <!-- Kurangi margin bawah -->
                <?= $data['companyName'] ?>
            </p>
            <p style="
                font-size: 14px; /* Kurangi ukuran font */
                font-style: italic;">
                <?= $data['description'] ?>
            </p>
        </div>

        <!-- Footer Bottom (optional) -->
        <div style="
            margin-top: 20px; /* Kurangi margin atas */
            font-size: 12px; /* Kurangi ukuran font */
            color: #ddd;">
            <p>&copy; <?= date("Y") ?> <?= $data['companyName'] ?>. All rights reserved.</p>
        </div>
    </div>
</footer>

    
    
    <!-- Link to Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    

</div>

<!-- Include JavaScript resources -->
<script src="js/jquery.1.8.3.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/featherlight.min.js"></script>
<script src="js/featherlight.gallery.min.js"></script>
<script src="js/jquery.enllax.min.js"></script>
<script src="js/jquery.scrollUp.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/jquery.stickyNavbar.min.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/images-loaded.min.js"></script>
<script src="js/lightbox.min.js"></script>
<script src="js/site.js"></script>


</body>
</html>