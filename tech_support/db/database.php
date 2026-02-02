<?php
$dsn = 'mysql:host=localhost;dbname=tech_support;charset=utf8mb4'; // connect to tech_support database
$username = 'jean';
$password = '1144176167';

try {
    $db = new PDO($dsn, $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Database error: " . $e->getMessage();
    exit;
}
