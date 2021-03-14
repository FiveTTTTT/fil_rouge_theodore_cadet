<?php
namespace App\Animaux;

use App\Animaux\Mammifere;

class Chien extends Mammifere{
    protected $cri = "ouaf";


    public function getCri(){
        return "Le chien aboie";
    }
}
