<?php
$servername = "localhost";
$database = "FOREIGNCONSULT";
$username = "root";
$password = "";


$conectar = mysqli_connect($servername, $username, $password, $database);

try {
  $conn = new PDO("mysql:host=$servername;database=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

?>