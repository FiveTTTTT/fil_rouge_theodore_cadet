<?php

try {
    $query = $pdo->query("SELECT  `orderNumber`,`orderDate`,`shippedDate`,`status`
    FROM `orders` 
    WHERE 1
    ORDER BY `orderNumber`");
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    $listeType = 0;


    foreach ($result as $line) { 
        $listeType=$listeType+1 ;
        if ($listeType%2==0) { ?>
            <div  class="ligneListe1">
        <?php }
        else{ ?>
            <div  class="ligneListe2">
        <?php } ?>
        
         
            <a href="bonComm.php?numero=<?php echo $line["orderNumber"]; ?>"> <?php echo $line["orderNumber"] ?></a>
            <div> <?php echo $line["orderDate"] ?></div>
            <div> <?php echo $line["shippedDate"] ?></div>
            <div> <?php echo $line["status"] ?></div> 

        </div>
        
    <?php } ?> 

    
<?php
} catch (\PDOException $e) {
    echo $e->getMessage();
}