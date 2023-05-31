<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["message"])) {
    $to = "mosesgrey20@gmail.com";
    $subject = "Contact Form";
    $message = $_POST["message"];
    $headers = "From: " . $_POST["email"] . "\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Email sending failed.";
    }
}
?>
