<?php
try {
    $pdo = new PDO('mysql:host=localhost:3306;dbname=classicmodels', "root", "WataAdmin");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec("SET NAMES UTF8");

    include "template.php";
    
    // include "saveInfos.php";
    // include "deleteInfo";


} catch(\PDOException $e){
   echo $e->getMessage();
}