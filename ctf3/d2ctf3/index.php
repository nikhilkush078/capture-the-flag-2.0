<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            background-image: url('backgroundctf3.jpg'); /* Replace 'background.jpg' with your background image file */
            background-size: cover;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            text-align: center;
        }

        form {
            display: inline-block;
            text-align: left;
        }

        button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        button:hover {
            background-color: #45a049;
        }

        input[type=text], input[type=password] {
            width: 100%;
            padding: 8px 10px;
            margin: 5px 0 15px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
            border-radius: 5px;
        }

        h2 {
            color: #333;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form id="loginForm" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username" required><br><br>
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" required><br><br>
            <button type="submit">Login</button>
        </form>
    </div>

    <?php
    // Define the correct username and password
    $correct_username = 'ebeionm';
    $correct_password = 'lobkenop';

    // Check if the form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Retrieve user inputs
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Validate username and password
        if ($username === $correct_username && $password === $correct_password) {
            // Authentication successful, redirect to secretctf3
            header('Location: secretctf3/');
            exit;
        } else {
            // Authentication failed, display an alert
            echo '<script>alert("Invalid username or password. Please try again.");</script>';
        }
    }
    ?>
	<div style="position: absolute; bottom: 10px; right: 10px; color: white; font-size: 12px; text-align: right;">
    Hint: ctf3/dctf3/command_prompt.html <br>
	FIRST FLAG : SHIN CHAIN
      </div>
</body>
</html>
