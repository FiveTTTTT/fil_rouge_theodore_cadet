<?php 

try {
    $query = $pdo->query("SELECT customerName, contactLastName, contactFirstName , addressLine1 , city
    FROM `orders` 
    INNER JOIN customers ON orders.customerNumber = customers.customerNumber
    WHERE orders.orderNumber = $wichNum");
    $result = $query->fetch(PDO::FETCH_ASSOC);

    $queryS = $pdo->query("SELECT productName, priceEach, quantityOrdered, ROUND(SUM(priceEach*quantityOrdered),2) AS priceTot
    FROM `orders` 
    JOIN orderdetails ON orders.orderNumber = orderdetails.orderNumber
    JOIN products ON orderdetails.productCode = products.productCode
    WHERE orderdetails.`orderNumber`=10100
    GROUP BY products.productCode
    ORDER BY priceEach");
    $resultS = $queryS->fetchAll(PDO::FETCH_ASSOC);


    
    ?>
    <h2> <?php echo $result["customerName"] ?> </h2>
    <h3> <?php echo $result["contactFirstName"]." ".$result["contactLastName"] ?> </h3>
    <p> <?php echo $result["addressLine1"] ?> </p>
    <p> <?php echo $result["city"] ?> </p>
    <br>
    <hr>
    <tr>
    <?php foreach ($resultS as $key => $value) {
        # code...
    } ?>


    </tr>


    <?php

} catch (\Throwable $th) {
    //throw $th;
}