<?php
session_start();
include('functions.php');
include('../../includes/database.php');
function getProducts()
{
    $productsToBuy = $_GET['album'];
   //$productList = getProductList();
    $total = 0;
    
    foreach($productsToBuy as $product){
            echo $product . "   "  . "$". getPrice($product); 
            $total+=getPrice($product);
            echo "<br />";
            
        }
    echo "Total $". $total ;
}
function getPrice($album)
{
    global $dbConnection;
    
    $sql = "SELECT price from albulm WHERE albulmName = " . $album . ";";
    $statement = $dbConnection->prepare($sql);
    $statement->execute();
    $records = $statement->fetchAll(PDO::FETCH_ASSOC);
    
    return $records;
}



?>



<!DOCTYPE html>
<html>
    <head>
        <title> </title>
        <style>@import url('CD_store.css');</style>
    </head>
    <body>
        <h1>Thank you for shopping at CD STORE</h1>
        <br />
        You ordered the following products:
        

    </body>
</html>