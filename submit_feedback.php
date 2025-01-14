<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mendapatkan data dari form
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $name = htmlspecialchars($_POST['name']);
    $message = htmlspecialchars($_POST['message']);

    // Alamat email tujuan
    $to = "anangalfikran2@gmail,com";  // Ganti dengan email tujuan
    $subject = "Feedback dari " . $name;
    $body = "Anda telah menerima feedback baru.\n\n" .
            "Nama: $name\n" .
            "Email: $email\n" .
            "Pesan:\n$message";
    $headers = "From: $email\r\n" .
               "Reply-To: $email\r\n" .
               "Content-Type: text/plain; charset=UTF-8";

    // Mengirim email
    if (mail($to, $subject, $body, $headers)) {
        echo "Feedback berhasil dikirim. Terima kasih atas feedback Anda!";
    } else {
        echo "Maaf, terjadi kesalahan. Feedback gagal dikirim.";
    }
} else {
    echo "Permintaan tidak valid.";
}
?>
