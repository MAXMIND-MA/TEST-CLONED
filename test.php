<?php 

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

$host = "51.68.174.244";
$dbname = "maxmind_remote_db";
$password = "6ALUIHShCzSx";
$username = "maxmind_remote_user";

$pdo = new PDO("mysql:host=$host;port=3306;dbname=$dbname", $username, $password);

$stmt = $pdo->prepare("SELECT * FROM tblusers");
$stmt->execute();
$result = $stmt->fetchAll();
print_r($result);
