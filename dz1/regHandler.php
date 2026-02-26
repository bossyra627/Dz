<?php

ini_set('display_errors', 1);

require_once __DIR__ . '/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST["name"];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $errors = false;

    $hashed_password = password_hash($pass, PASSWORD_DEFAULT);


    if (empty($name) || strlen($name) > 50) {
        $errors = true;
    }
    if (empty($lastname) || strlen($lastname) > 100) {
        $errors = true;
    }
    if (empty($email)) {
        $errors = true;
    }
    if (empty($pass) || strlen($pass) <= 8) {
        $errors = true;
    }


    if($errors == true){
        header("Location: errors.php");
        exit();
    }


    $sql = "INSERT INTO users (name, lastname, email, password) 
            VALUES (:name, :lastname, :email, :password)";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        'name' => $name,
        'lastname' => $lastname,
        'email' => $email,
        'password' => $hashed_password
    ]);

    header("Location: welcome.php");
    exit();
}

