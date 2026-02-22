<!--Das Skript stellt eine Verbindung zur Datenbank her-->
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$server = "localhost"; //Verbindet sich mit localhost; Später würde hier eine IP Adresse stehen
$username = "legal_owner";    //Username for phpMyAdmin
$password = "nAsPh3PjvMFbNt58";    //Password for phpMyAdmin
$dbname = "forum";     // Der Name der Datenbank, die geöffnet werden soll

//kreiert eine Datenbank Verbindungsinstanz
$conn = new mysqli($server, $username, $password, $dbname); //Verbindet sich mit der Datenbank mit den Variablen von oben
?>


