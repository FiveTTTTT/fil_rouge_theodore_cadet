<?php

try{
$nom = "Doe";
$prenom= "Janee";
$email = "janee@doe.fr";
$password = "password";

// ici il va y avoir 3 methodes pour les tester il faut supprimer de la BDD "janee" et commenter 
// les 2 autres methodes

// Requête d'insertion de données où toutes les informations sont dans la requête de base.
$statement = "INSERT INTO user (prenom, nom, email, password) VALUES ('$prenom', '$nom', '$email', '$password')";
$prepare = $pdo->prepare($statement);
$prepare->execute();

// Méthode d'enregistrement qui va matcher les données dans le tableau avec les ?. 
// Cette requête est plus courte à écrire et n'a pas besoin de clés dans le tableau.
// Cependant il faut faire attention à l'ordre des données pour éviter de mélanger les valeurs dans les champs
$post = ["Doe", "Janee", "janee@doe.fr", "password"];
$statement = "INSERT INTO user (nom, prenom, email, password) VALUES (?,?,?,?)";
$prepare = $pdo->prepare($statement);
$prepare->execute($post);


// Méthode d'enregistrement qui prend en compte les bindValues. 
// La requête match les paramètres avec les clés dans le tableau de données à enregistrer.
// ça évite ainsi l'enregistrement de données dans le mauvais champs.
$post = ["nom" => "Doe", "prenom"=>"Janee", "email"=>"janee@doe.fr", "password"=> "password"];
$statement = "INSERT INTO user (prenom, nom, email, password) VALUES (:prenom, :nom, :email, :password)";
$prepare = $pdo->prepare($statement);
$prepare->execute($post);
} catch(\PDOException $e){
    echo $e->getMessage();
}