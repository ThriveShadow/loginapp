<?php
$host = "10.0.1.97";   // Private IP of your PostgreSQL EC2
$dbname = "myapp";
$user = "myuser";
$pass = "mypassword";

try {
    $conn = new PDO("pgsql:host=$host;dbname=$dbname", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>
