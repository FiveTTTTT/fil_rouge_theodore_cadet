<?php

$dbHost = 'localhost';
$dbName = 'classicmodels';
$dbUser = 'root';
$dbPassword = 'root';

$pdo = new PDO("mysql:dbname=". $dbName .";host=" . $dbHost, $dbUser, $dbPassword);
$pdo->exec('SET NAMES UTF8');

// $query = $pdo->query("SELECT  * FROM customers WHERE customerNumber = 103");
// $result = $query->fetchAll();

// var_dump($result[0]);

// foreach ($result as $line){
//     echo '<p>' . $line['customerNumber'] . '</p>';
// }

// $nom = $_POST["nom"];

// $statement = $pdo->prepare("INSERT INTO user (nom, prenom) VALUES ( :nom, :prenom)");
// $tatement->execute([":prenom" => $_POST["nom"], ":nom" => "John"]);

$totalHT = 0;

foreach ($variable as $key => $value) {
    $totalHT += $orderDetails["total"];
}

echo $totalHt;
// echo $toto = 24;
// echo '</br>';
// echo $tata = 232;
// echo '</br>';
// echo $total = $toto + $tata;

// echo $toto += $toto + $tata;