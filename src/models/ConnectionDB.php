<?php
function connect() {
    $user = 'root';
    $pass = 'eC#Q5X&vyaXH';
    $server = 'localhost:3306';
    $db = 'articulos_de_limpieza';

    $conn = new mysqli($server, $user, $pass, $db);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}