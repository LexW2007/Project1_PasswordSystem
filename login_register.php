<?php

session_start();
require_once 'config.php';

if(isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $checkUsername = $conn->query("SELECT username FROM users WHERE username = '$username'");
    if($checkUsername->num_rows > 0) {
        $_SESSION['register_error'] = "Username already exists. Please choose a different username.";
        $_SESSION['active_form'] = 'register';
    } else {
        $conn->query("INSERT INTO users (username, password) VALUES ('$username', '$password')");
    }

    header("Location: index.php");
    exit();
}

if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = $conn->query("SELECT * FROM users WHERE username = '$username'");
    if($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if(password_verify($password, $user['password'])) {
            $_SESSION['username'] = $username;
            header("Location: user_page.php");
            exit();
        } else {
            $_SESSION['login_error'] = "Incorrect password. Please try again.";
            $_SESSION['active_form'] = 'login';
        }
    } else {
        $_SESSION['login_error'] = "Username not found. Please register first.";
        $_SESSION['active_form'] = 'login';
    }

    header("Location: index.php");
    exit();
}

?>