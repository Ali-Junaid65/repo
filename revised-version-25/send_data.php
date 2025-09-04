<?php
// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get data from POST
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);

    // Check if data is valid
    if (!empty($name) && !empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Example: You could save this data to a database here
        $response = [
            'success' => true,
            'message' => "Thank you, $name! Your email ($email) has been submitted."
        ];
    } else {
        $response = [
            'success' => false,
            'message' => 'Invalid input. Please provide a valid name and email.'
        ];
    }

    // Return JSON response
    header('Content-Type: application/json');
    echo json_encode($response);
} else {
    // Handle invalid request method
    $response = [
        'success' => false,
        'message' => 'Invalid request method.'
    ];
    header('Content-Type: application/json');
    echo json_encode($response);
}
?>
