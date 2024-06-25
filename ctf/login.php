<?php
// Start the session
session_start();

// Hardcoded username and password (in a real application, use a database)
$users = [
    'nitrogen' => 'oxygen',
    'carbon16' => 'hydrogen1'
];

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve username and password from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate username and password
    if (isset($users[$username]) && $users[$username] === $password) {
        // Authentication successful, store username in session
        $_SESSION['username'] = $username;
        // Redirect to appropriate page
        if ($username === 'nitrogen') {
            header('Location: second_page.php');
            exit;
        } elseif ($username === 'carbon16') {
            header('Location: flag.php');
            exit;
        }
    } else {
        // Authentication failed, redirect back to login page with error message
        header('Location: index.php?error=1');
        exit;
    }
} else {
    // Redirect to login page if accessed directly without POST request
    header('Location: index.php');
    exit;
}
?>
