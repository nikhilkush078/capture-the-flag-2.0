<?php
session_start();

// Check if user is authenticated
if (!isset($_SESSION['username']) || $_SESSION['username'] !== 'carbon16') {
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Flag Page</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      text-align: center;
    }
    .container {
      margin-top: 100px;
    }
    .flag {
      font-size: 24px;
      font-weight: bold;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Congratulations!</h2>
    <p>You have unlocked the flag:</p>
    <p class="flag">pikachu</p>
  </div>
</body>
</html>
