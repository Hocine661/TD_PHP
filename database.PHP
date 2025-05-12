<?php
$hostname="localhost";
$dbname = "tp1";
$user = "root";
$password = "";

try {
    $connection = new PDO("mysql:host=$hostname;dbname=$dbname", $dbuser, $dbpassword);
    $connection->setAttribute(PDO::ATTR_ERRMODE, POD::ERRMODE_EXCEPTION);
} catch (\throwable $th) {
    die("BASE de donnée indisponible");
}
?>
