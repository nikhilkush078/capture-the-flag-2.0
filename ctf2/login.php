<?php
// Define the correct username and password
$correctUsername = 'uftrna';
$correctPassword = 'ee5rntphtidn';

// Initialize variables to store input values and error message
$username = $password = '';
$errorMessage = '';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve username and password from POST data
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Validate username and password
    if ($username === $correctUsername && $password === $correctPassword) {
        // Redirect to secret directory upon successful login
        header('Location: secret/');
        exit;
    } else {
        // Redirect back to index.html with error message
        $errorMessage = 'Invalid username or password. Please try again.';
        header('Location: index.html?error=' . urlencode($errorMessage));
        exit;
    }
}
?>
