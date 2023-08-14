<?php
session_start(); // Start session to store user data

require 'db_connection.php'; // Include your database connection code

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username_email = mysqli_real_escape_string($conn, $_POST['username']);
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email = '$username_email'";
    $result = $conn->query($sql);

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_role'] = $user['role'];
            if ($user['role'] === 'user') {
                header('Location: Home.php'); // Redirect to the home page for users
            } elseif ($user['role'] === 'admin') {
                header('Location: ../admin/main.php');

            }
            exit();
        } else {
            echo "Incorrect password";
        }
    } else {
        echo "User not found";
    }
}
?>
<!-- Rest of your HTML code -->



<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Log In</title>
    <link rel="stylesheet" type="text/css" media="all" href="LoginStyles.css">
    <link rel="stylesheet" type="text/css" media="all" href="HeaderStyles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div>
        <form action="login.php" method="post" id="main">
            <h2>Login to your account</h2>

            <div class="input-parent">
                <label for="username">Username or Email</label>
                <input type="text" id="username" name="username"> <!-- Added name attribute -->
            </div>

            <div class="input-parent">
                <label for="password">Password</label>
                <input type="password" id="password" name="password"> <!-- Added name attribute -->
            </div>

            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
