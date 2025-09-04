<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $contactNumber = htmlspecialchars($_POST["cNum"]);
    $services = isset($_POST["services"]) ? implode(", ", $_POST["services"]) : "No services selected";
    $dateTime = htmlspecialchars($_POST["date-time"]);
    $location = htmlspecialchars($_POST["location"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    $tocc = "4dxdigitalconsulting@gmail.com";
    $to = "info@hifsakhansalon.com";
    $subject = "New Appointment Booking";
    $body = "
        Name: $name\n
        Contact Number: $contactNumber\n
        Selected Services: $services\n
        Preferred Date: $dateTime\n
        Preferred Location: $location\n
        Email: $email\n
        Additional Notes: $message
    ";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        mail($tocc, $subject, $body, $headers);
        header("Location:book-appointment.php?success");
    } else {
        echo "Sorry, there was an error sending your appointment.";
    }
} else {
    echo "Invalid request.";
}
?>
