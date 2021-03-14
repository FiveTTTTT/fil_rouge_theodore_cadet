<?php

use App\Animaux\Chien;
use App\Animaux\Chat;

require "../Autoloader.php";
$autoloader = new Autoloader();
$autoloader->register();



$chien = new Chien("Rex", "Lévrier", "Gris");
$chien2 = new Chien("Medor", "Chihuahua", "Marron");
$chat = new Chat("Caramel", "Siamois", "Blanc et Noir");


var_dump($chien);
echo "</br>";
echo $chien->getCri();
echo "</br>";
echo $chien->getNom();
echo "</br>";
echo $chien2->getNom(); 
echo "</br>";
echo $chat->getNom();
echo "</br>";
