<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "autofinity";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connexion échouée : " . $conn->connect_error);
}
?>