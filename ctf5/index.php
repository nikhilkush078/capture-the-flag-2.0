<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            background-image: url('backgroundctf5.avif'); /* Replace 'path/to/your/background-image.jpg' with your actual image path */
            background-size: cover; /* Cover the entire viewport */
            background-position: center; /* Center the background image */
            background-repeat: no-repeat; /* Do not repeat the background image */
            font-family: Arial, sans-serif; /* Optional: Set a different font for the entire page */
            margin: 0; /* Remove default margin */
            padding: 0; /* Remove default padding */
            position: relative; /* Ensure position relative for absolute positioning */
        }
        .container {
            text-align: center;
            margin-top: 100px;
            position: relative; /* Ensure position relative for absolute positioning */
            z-index: 1; /* Ensure content stays above other elements */
        }
        .container h2 {
            color: white; /* Example: Make the heading text white */
        }
        .container form {
            background-color: rgba(255, 255, 255, 0.8); /* Example: Semi-transparent white background for the form */
            padding: 20px;
            border-radius: 10px;
        }
        .container form label {
            display: block;
            margin-bottom: 10px;
        }
        .container form input[type="text"],
        .container form input[type="password"] {
            padding: 10px;
            margin-bottom: 15px;
            width: 200px;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        .container form input[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }
        .container form input[type="submit"]:hover {
            background-color: #45a049;
        }
        .download-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
            padding: 5px 10px;
            background-color: red; /* Change button color to red */
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            z-index: 2; /* Ensure button is above other content */
        }
        .download-button:hover {
            opacity: 0.8; /* Reduce opacity on hover for visual feedback */
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <?php
        // Define correct username and password
        $correct_username = 'einokgojk65hk';
        $correct_password = 'ith198';

        // Function to encode credentials
        function encode_credentials($username, $password) {
            $encoded_username = base64_encode($username);
            $encoded_password = base64_encode($password);
            return "Encoded username: " . $encoded_username . "\nEncoded password: " . $encoded_password;
        }

        // Check if form is submitted
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Retrieve user input from the form
            $username = $_POST['username'];
            $password = $_POST['password'];

            // Validate username and password
            if ($username === $correct_username && $password === $correct_password) {
                // Redirect to flag.html upon successful authentication
                header('Location: flag.html');
                exit; // Ensure that script stops executing after redirection
            } else {
                // Authentication failed, display an error message
                echo '<p style="color: red;">Invalid username or password.</p>';
            }
        }
        ?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username" required><br><br>
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" required><br><br>
            <input type="submit" value="Login">
        </form>
    </div>
    <button class="download-button" onclick="openTextFile()">Download Text File</button>

    <script>
        function openTextFile() {
            // JavaScript to open a text file with encoded credentials
            window.open('encoded_credentials.txt', '_blank');
        }
    </script>
</body>
</html>
