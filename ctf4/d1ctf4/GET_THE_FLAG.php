<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            text-align: center;
        }
        .login-box {
            width: 300px;
            margin: 200px auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        input[type="text"], input[type="password"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            border: none;
            color: white;
            font-weight: bold;
            cursor: pointer;
            border-radius: 3px;
        }
        .message {
            margin-top: 20px;
            font-size: 24px;
            color: #4CAF50;
        }
    </style>
</head>
<body>
    <div class="login-box">
        <h2>Login</h2>
        <?php
        // Define correct username and password
        $correct_username = 'kakashi';
        $correct_password = 'naruto';

        // Check if form is submitted
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Retrieve username and password from form submission
            $username = $_POST['username'];
            $password = $_POST['password'];

            // Validate username and password
            if ($username === $correct_username && $password === $correct_password) {
                // Authentication successful
                echo '<div class="message">YOUR FLAG IS: ANIME</div>';
            } else {
                // Authentication failed
                echo '<div class="message">Login failed. Please try again.</div>';
            }
        }
        ?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <input type="text" name="username" placeholder="Username" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>
