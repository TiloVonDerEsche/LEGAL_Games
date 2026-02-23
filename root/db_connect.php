<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$server = "localhost";
$username = "legal_owner";
$password = "nAsPh3PjvMFbNt58";
$dbname = "forum";

$conn = new mysqli($server, $username, $password, $dbname);
?>
