<?php
require_once("init.php");

try {
    $dbConn->beginTransaction();
    $sql = 'SELECT * FROM teste;';
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    while($row = $stmt->fetch(PDO::FETCH_OBJ)){
        echo $row->id . " - ";
        echo $row->nome . "<br />";
    }
    
    $dbConn->commit();
} catch (Exception $e) {
    //Roll back and show error
    echo "Error: " . $e->getMessage();
    $dbConn->rollBack();
}
require_once("ending.php");
?>