<?php 

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

$host = "10.11.227.36";
$dbname = "maxmind_db";
$username = "maxmind_user";
$password = "M@xmind@2023.";

$pdo = new PDO("mysql:host=$host;port=3306;dbname=$dbname", $username, $password);

$stmt = $pdo->prepare("SELECT * FROM tblusers");
$stmt->execute();
$result = $stmt->fetchAll();
print_r($result);
