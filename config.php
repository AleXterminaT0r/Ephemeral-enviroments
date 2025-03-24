<?php
$host = 'sql312.infinityfree.com';
$user = 'if0_37818929';
$password = 'IqPK13h0LCJUO';
$database = 'if0_37818929_MiSitioWeb';

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}
?>