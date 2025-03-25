<?php
$servername = "localhost";
$dbname = "venteligne";
$username = "root";
$password = "";

try {
    $connection = new PDO("mysql: host= $servername; dbname = $dbname", $username, $password);
} catch (PDOException $e) {
    echo "Connection failed" . $e->getMessage();
}


?>