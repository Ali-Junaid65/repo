<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);

    $tocc = "4dxdigitalconsulting@gmail.com";
    $to = "info@hifsakhansalon.com";
    $subject = "New Subscriber";
    $body = "
        Name: $name\n
       Email: $email\n
    ";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        mail($tocc, $subject, $body, $headers);
        header("Location:index.php?email_submitted");
    } else {
        echo "Sorry, there was an error sending your email.";
    }
} else {
    echo "Invalid request.";
}
?>
