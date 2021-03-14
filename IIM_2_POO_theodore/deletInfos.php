<?php
try{
$prepare = $pdo->prepare("DELETE FROM user WHERE prenom = " . $post["prenom"]);
$prepare->execute();

$prepare = $pdo->prepare("DELETE FROM user WHERE prenom = :prenom");
$prepare->execute(["prenom" => "Janee"]);

} catch(\PDOException $e){
    echo $e->getMessage();
}