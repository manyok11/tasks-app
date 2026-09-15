<?php
$host = "localhost";
$db_user = "manyok.deng";
$db_pass = "Manyok2026!";
$db_name = "ecommerce_2026A_manyok_deng";

$conn = new mysqli($host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
