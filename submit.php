<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "info@Baiq.com";
    $subject = "Pesan dari $name";
    $body = "Nama: $name\nEmail: $email\n\nPesan:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Pesan berhasil dikirim.";
    } else {
        echo "Pesan gagal dikirim.";
    }
} else {
    echo "Metode pengiriman tidak didukung.";
}
?>
