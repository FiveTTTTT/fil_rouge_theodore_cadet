<?php
namespace App\Controller;

use App\Model\orderModel;

class OrderController{

    public function __construct()
    {
        $this->model = new orderModel();
    }

    public function renderIndex(){
        $orders = $this->model->getOrders();
        require ROOT."/App/View/orderIndexView.php";
    }
}