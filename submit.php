<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = json_decode(file_get_contents('php://input'), true);

    if (isset($input['name']) && isset($input['email']) && isset($input['message'])) {
        $name = $input['name'];
        $email = $input['email'];
        $message = $input['message'];

        // Write data to a text file (for simplicity)
        $file = fopen("contact-result.txt", "a");
        fwrite($file, "Name: " . $name . "\n");
        fwrite($file, "Email: " . $email . "\n");
        fwrite($file, "Message: " . $message . "\n");
        fwrite($file, "\n"); // Add a line break
        fclose($file);

        // Return JSON response indicating success
        echo json_encode(['success' => true]);
    } else {
        // Return JSON response indicating failure
        echo json_encode(['success' => false]);
    }
} else {
    // Return JSON response indicating failure
    echo json_encode(['success' => false]);
}
?>
