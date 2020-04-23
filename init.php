<?php
require_once("config/databaseConfig.php");

try {
    $db_con = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPassword);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSV to MySQL</title>
</head>
<body>
