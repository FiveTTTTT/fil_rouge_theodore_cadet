<?php

try {
    // ->query nous permet de récupérer les informations contenues dans la BDD.
    // On le couple avec fetch() ou fetchAll().
    // fetchAll() permet de récupérer l'ensemble des informations dans un tableau de données.
    // Si vous n'avez qu'une ligne dans la BDD, vous aurez un tableau ayant une entrée.
    $query = $pdo->query("SELECT * FROM user");
    // l'option PDO::FETCH_ASSOC précise que nous souhaitons récupérer les informations sous forme de tableau associatif
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    // var_dump($result);
    

    foreach ($result as $line) {
        echo $line["nom"].$line["prenom"];

        echo "<br>";
    }

    //fetch() est utilisé pour récupérer une seule ligne dans notre BDD. 
    // Elle retourne directement la ligne avec ses valeurs.
    // Si on utilise fetch() avec une requête qui retourne plusieurs lignes, 
    // seule la première ligne matchant avec notre requête sera retournée.
    $result = $query->fetch(PDO::FETCH_ASSOC);
    var_dump($result);
} catch (\PDOException $e) {
    echo $e->getMessage();
}
