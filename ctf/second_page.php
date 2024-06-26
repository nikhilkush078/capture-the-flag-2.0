<?php
// Start the session
session_start();

// Check if user is authenticated
if (!isset($_SESSION['username']) || $_SESSION['username'] !== 'nitrogen') {
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome to CTF</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      text-align: center;
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
  </style>
</head>
<body>
  <div class="container">
    <h2>Welcome to CTF</h2>
    <p>You have successfully logged in!</p>
    <p>Proceed to the next step:</p>
    <form action="login.php" method="post">
      <input type="text" name="username" placeholder="Username" required><br>
      <input type="password" name="password" placeholder="Password" required><br>
      <button type="submit">Login</button>
    </form>
  </div>
</body>
</html>
