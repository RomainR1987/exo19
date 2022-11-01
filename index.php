<?php
$sdn='mysql:host=localhost;dbname=boutique';
$user='root';
$pass='';
$pdo=new \PDO($sdn, $user,$pass);


function getProducts($product_id,$pdo)
{
    $sql = "SELECT * FROM products";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $products= $stmt->fetchAll(PDO::FETCH_ASSOC);


    return $products;
}

$tableau=getProducts($product_id,$pdo);

echo "<br";
    for($i=0;$i< count($tableau);$i++){
        echo "<td>".implode($tableau[$i])."<br>"."</td>";
    }

?>
