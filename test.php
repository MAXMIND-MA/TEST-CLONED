<?php 

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

$host = "localhost";
$dbname = "maxmind_db";
$password = "Maxmind@123";
$username = "maxmind_user";

$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

$stmt = $pdo->prepare("SELECT * FROM users");
$stmt->execute();
$result = $stmt->fetchAll();
print_r($result);
