# exoSQL

-- 1/ La liste des bureaux (adresse et ville) triés par pays décroissant puis par état
    SELECT addressLine1, addressLine2, city, country, state
    FROM `offices` 
    ORDER BY country DESC, state;
-- 2/ La liste des avions (code et nom) triés par vendeur et par quantité en stock décroissants
    SELECT productName, productCode 
    FROM `products`
    ORDER BY productVendor, quantityInStock DESC;
-- 3/ La liste des produits (nom, vendeur et prix de vente) qui sont vendus au moins 132$ triés par nom du produit
    SELECT productName, productVendor, buyPrice, MSRP
    FROM `products`
    WHERE MSRP >= 132
    ORDER BY productName
-- 4/ La liste des produits (code, nom, échelle et quantité) qui ont une échelle soit de 1:10, soit de 1:18 triés par quantité en stock décroissante
    SELECT productCode, productName, productScale, quantityInStock
    FROM `products`
    WHERE productScale IN ('1:10', '1:18')
    ORDER BY quantityInStock DESC
-- 5/ La liste des produits (code, nom et prix d'achat) des produits achetés au moins 60$ au plus 90$ triés par prix d'achat
    SELECT productCode, productName, buyPrice
    FROM `products`
    WHERE MSRP BETWEEN 60 AND 90
    ORDER BY buyPrice
-- 6/ La liste des motos (nom, vendeur, quantité et marge) triés par marge décroissante
    SELECT productName, productVendor, quantityInStock, ROUND((MSRP - buyPrice), 2) AS marge
    FROM `products` 
    WHERE productLine = 'Motorcycles'
    ORDER BY marge DESC
-- 7/ La liste des commandes (numéro, date de commande, date d'expédition, écart en jours entre les deux dates et statut) qui sont en cours de traitement ou qui ont été expédiées et ont un écart de plus de 10j triés par écart décroissant puis par date de commande
    SELECT orderNumber, orderDate, shippedDate, DATEDIFF(shippedDate, orderDate) AS ecart, status
    FROM `orders`
    WHERE status = 'In Process' AND DATEDIFF(shippedDate, orderDate) > 10
    ORDER BY ecart DESC, orderDate
    SELECT orderNumber, orderDate, shippedDate, DATEDIFF(shippedDate - orderDate) AS 'diff', status 


-- 8.1/ La liste des produits (nom et valeur du stock à la vente) des années 1960
    SELECT `productName`, `quantityInStock`,ROUND((MSRP*quantityInStock),2)
    FROM `products` 
    WHERE `productName` LIKE '196%'

-- 8.2/ La liste des produits (nom et valeur du stock à la vente) des années 1960
    SELECT productName, ROUND((MSRP*quantityInStock),2)
    FROM products
    WHERE productName BETWEEN 1960 AND 1969

-- 9/ Le prix moyen d'un produit vendu par chaque vendeur triés par prix moyen décroissant
    SELECT ROUND(AVG(MSRP),2) AS avgPrice,`productVendor`
    FROM `products` 
    WHERE 1
    GROUP BY `productVendor`
    ORDER BY avgPrice DESC
-- 10/ Le nombre de produits pour chaque ligne de produit
    SELECT `productLine`, COUNT( `productLine`)
    FROM `products` 
    WHERE 1
    GROUP BY `productLine`
-- 11/ Le total du stock et le total de la valeur du stock à la vente de chaque ligne de produit pour les produits vendus plus de 100$ trié par total de la valeur du stock à la vente
    SELECT `productLine`, ROUND(SUM(`quantityInStock`),2) AS stockTot,  
    ROUND(SUM(`quantityInStock*MSRP`),2) AS valueTot
    FROM `products` 
    WHERE `MSRP`>100
    GROUP BY `productLine`
    ORDER BY stockTot

-- 12/ La quantité du produit le plus en stock de chaque vendeur trié par vendeur
    SELECT  `productVendor`, MAX(`quantityInStock`) AS maxStock
    FROM `products` 
    WHERE 1
    GROUP BY `productVendor`
    ORDER BY maxStock

-- 13/ Le prix de l'avion qui coûte le moins cher à l'achat
    SELECT MIN(`buyPrice`) AS cheapPLane
    FROM `products` 
    WHERE `productLine` = "Planes"

-- 14/ La liste des employés (nom, prénom et fonction) et des bureaux (adresse et ville) dans lequel ils travaillent
    SELECT `lastName`,`firstName`,`jobTitle`,addressLine1,city
    FROM `employees` 
    INNER JOIN offices ON employees.`officeCode` = offices.`officeCode`

-- 15/ Le montant des clients qui ont payé plus de 20000$ durant l'année 2004 trié par 
-- crédit décroissant
    SELECT customers.customerNumber, customerName, amount, paymentDate
    FROM payments
    INNER JOIN customers ON payments.customerNumber = customers.customerNumber
    WHERE amount > 20000 AND paymentDate LIKE "2004%"
    ORDER BY amount



-- 16/ La liste des clients français ou américains (nom du client, nom et prénom du 
-- contact, pays) et de leur commercial dédié (nom et prénom) triés par nom et prénom 
-- du contact
    SELECT customerName, contactLastName, contactFirstName, country, firstName, lastName
    FROM customers
    INNER JOIN employees ON customers.salesRepEmployeeNumber = employees.employeeNumber
    WHERE country IN ("France", "USA")
    ORDER BY contactLastName, contactFirstName
    
-- 17/ La liste des lignes de commande (numéro de commande, code, nom et ligne de 
-- produit) et la remise appliquée aux voitures ou motos commandées triées par numéro 
-- de commande puis par remise décroissante
    SELECT orderNumber,orderdetails.productCode , productName, productLine, ROUND((MSRP-priceEach)*quantityOrdered, 2) as remise
    FROM orderdetails
    INNER JOIN products ON orderdetails.productCode = products.productCode
    WHERE productLine = "Motorcycles" OR productLine LIKE "%Cars"
    ORDER BY orderdetails.orderLineNumber, remise DESC


-- 18/ Le total des paiements effectués de chaque client (numéro, nom et pays) 
-- américain, allemand ou français de plus de 50000$ trié par pays puis par total des 
-- paiements décroissant
    SELECT customers.customerNumber, customerName, country, ROUND(SUM(amount),2) as total
    FROM payments
    INNER JOIN customers
    ON payments.customerNumber = customers.customerNumber
    WHERE country IN ("USA", "France", "Germany")
    GROUP BY customers.customerNumber
    HAVING total > 50000
    ORDER BY country, total DESC


-- 19/ Le montant total de chaque commande (numéro et date) des clients New-Yorkais 
-- (nom) trié par nom du client puis par date de commande
    SELECT customers.customerNumber, customerName, orderDate, 
        ROUND(SUM(priceEach*quantityOrdered),2) as total
    FROM orderdetails
    INNER JOIN orders ON orderdetails.orderNumber = orders.orderNumber
    INNER JOIN customers ON orders.customerNumber = customers.customerNumber
    WHERE city = "NYC"
    GROUP BY orderdetails.orderNumber
    ORDER BY customerName, orderDate
