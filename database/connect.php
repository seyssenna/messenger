<?php
$user = "root";
$pass = "root";
$host = "localhost";

try {
    $db = new PDO("mysql:host=$host;dbname=messenger", $user, $pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo $e->getMessage();
}