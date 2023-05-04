<?php 

$host = "51.195.41.55";
$dbname = "macturama_stable";
$password = "StableM@ctura332";
$username = "macturama_stable";

$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

$stmt = $pdo->prepare("SELECT * FROM tblclients");
$stmt->execute();
$result = $stmt->fetchAll();
print_r($result);
