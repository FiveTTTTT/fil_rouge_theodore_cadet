<?php

namespace App\Model;

use Core\Database;

class orderModel{
    
    public function getOrder()
    {
        $query = $this->pdo->query("SELECT * FROM orders");
        return $query->fetchAll();
    }
    
};