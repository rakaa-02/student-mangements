<?php

$host = 'localhost';
$db   = 'student_management';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';


try {
    $database = new PDO("mysql:host=$host;dbname=$db;charset=$charset", $user, $pass);
    $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Database connection failed: ' . $e->getMessage());
}
