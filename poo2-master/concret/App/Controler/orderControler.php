<?php
namespace App\Controler;

use App\Model\orderModel;

class OrderControler
{

    public function __construct()
    {
        $this->model = new orderModel();

    }
    public function renderIndex(){
        $orders = $this->model->get
    }




}





