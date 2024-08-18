<?php
require_once '../config/database.php';

// Registration form processing logic goes here
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <!-- Added some water.css styles to the webpage -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <!-- Added some random favicon -->
    <link rel="icon" type="image/png" href="https://www.paypalobjects.com/webstatic/icon/pp32.png">
</head>
<body>
    <form action="" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
        <button type="submit">Register</button>
    </form>
</body>
</html>
