<?php

// try catch permet de capturer les erreurs s'il y en a dans notre code. 
// Dès qu'une erreur survient, le navigateur sort du try et execute le code présent dans le catch
try {
    // Connexion à la BDD grâce à la class PDO
    $pdo = new PDO('mysql:host=localhost:3306;dbname=firstDb', "root", "WataAdmin");
    // setAttribute permet de configurer certains points de nos requêtes comme l'affichage des erreurs
    // avec PDO::ATTR_ERRMODE
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Exec permet d'envoyer des requêtes. On l'utilise généralement pour de la configuration
    $pdo->exec("SET NAMES UTF8");

    include "getInfos.php";
    include "saveInfos.php";
    // include "deleteInfo";

    // On précise qu'on veut utiliser les erreurs de PDO.
} catch(\PDOException $e){
   echo $e->getMessage();
}

// include "template.php";











