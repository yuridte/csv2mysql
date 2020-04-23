<?php
require_once("config/databaseConfig.php");
$db_con = new PDO("mysql:host$dbHost;dbname=$dbName", $dbUser, $dbPassword);
?>