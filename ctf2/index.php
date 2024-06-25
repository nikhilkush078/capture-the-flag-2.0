<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('backgroundct'); /* Replace with your image file path */
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent white background */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .error-message {
            color: red;
            margin-top: 10px;
        }
        .success-message {
            color: green;
            margin-top: 10px;
        }
		 .white-text {
      color: white;
      text-align: center;
      margin-top: 20px; /* Adjust margin as needed */
    }
	.gray-text {
      color: #808080; /* Gray color */
      position: fixed; /* Fixed positioning */
      bottom: 20px; /* Distance from the bottom */
      right: 20px; /* Distance from the right */
    }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <?php
        // Define the correct username and password
        $correctUsername = 'uftrna';
        $correctPassword = 'ee5rntphtidn';

        // Initialize variables to store input values and error message
        $username = $password = $errorMessage = '';

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
                // Display error message
                $errorMessage = 'Invalid username or password. Please try again.';
            }
        }
        ?>
        <form id="login-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($username); ?>" required><br>
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" required><br><br>
            <input type="submit" value="Login">
        </form>
        <?php if (!empty($errorMessage)): ?>
            <p class="error-message"><?php echo $errorMessage; ?></p>
        <?php endif; ?>
    </div>
	 <div class="white-text">
    <p>uftrna<br>ee5rntphtidn</p>
  </div>
     <div class="gray-text">
    <p>danna sau biyu a kowane wuri a cikin allon</p>
	</div>
</body>
</html>
