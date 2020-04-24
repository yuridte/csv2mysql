<?php
require_once("config/databaseConfig.php");
require_once("class/db-class.php");
$db = new DB($cfgHost, $cfgPort, $cfgDbName, $cfgUser, $cfgPassword);
$dbConn = $db->getConnection();
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSV to MySQL</title>
</head>
<body>