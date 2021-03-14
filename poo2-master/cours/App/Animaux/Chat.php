<?php
namespace App\Animaux;

use App\Animaux\Mammifere;

class Chat extends Mammifere{

   protected $cri = "miaou";

   public function getCri(){
      return "Le chat miaule";
   }
}