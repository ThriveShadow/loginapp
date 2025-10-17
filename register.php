<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
    $stmt->execute(['username' => $username, 'password' => $password]);

    echo "✅ Registration successful! <a href='index.html'>Login here</a>";
}
?>
