<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      text-align: center;
      background-image: url('backgroundctf.jpg'); /* Replace with your image file path */
      background-size: cover;
      background-position: center;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      position: relative; /* Ensure position relative for absolute positioning */
    }
    .container {
      margin-top: 100px;
    }
    input[type="text"], input[type="password"] {
      padding: 10px;
      margin: 10px;
      width: 200px;
      font-size: 16px;
    }
    button {
      padding: 10px 20px;
      font-size: 16px;
      cursor: pointer;
    }
    .text-file-button {
      position: fixed;
      bottom: 20px;
      right: 20px;
      padding: 10px 20px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Login Page</h2>
    <?php
    // Start session to store authentication status
    session_start();

    // Define correct username and password
    $correct_username = 'einokgojk65hk';
    $correct_password = 'ith198';

    // Function to encode credentials (for demonstration)
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
            // Authentication successful, create encoded credentials string
            $encoded_credentials = encode_credentials($username, $password);

            // Write credentials to a text file (for demonstration)
            $file = fopen('flag.txt', 'w');
            fwrite($file, $encoded_credentials);
            fclose($file);

            // Redirect to flag.html or perform other actions upon successful login
            header('Location: flag.html');
            exit;
        } else {
            // Authentication failed, redirect back to login page with error flag
            header('Location: index.php?error=1');
            exit;
        }
    }

    // Check if action is to download the text file
    if (isset($_GET['action']) && $_GET['action'] === 'download') {
        // Ensure the text file exists
        if (file_exists('flag.txt')) {
            // Set appropriate headers for file download
            header('Content-Type: text/plain');
            header('Content-Disposition: attachment; filename="flag.txt"');
            header('Content-Length: ' . filesize('flag.txt'));
            readfile('flag.txt');
            exit;
        } else {
            // Redirect back to login page if file does not exist
            header('Location: index.php');
            exit;
        }
    }
    ?>
    <?php if (isset($_GET['error']) && $_GET['error'] == 1): ?>
      <p style="color: red;">Incorrect username or password. Please try again.</p>
    <?php endif; ?>
    <form action="index.php" method="post">
      <input type="text" name="username" placeholder="Username" required><br>
      <input type="password" name="password" placeholder="Password" required><br>
      <button type="submit">Login</button>
    </form>
  </div>

  <!-- Text File Button -->
  <a href="index.php?action=download" class="text-file-button">Text File</a>
</body>
</html>
