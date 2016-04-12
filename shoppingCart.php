<?php
session_start();
include('functions.php');
//include('../../includes/database.php');
function getProducts()
{
    $productsToBuy = array_unique($_GET['album']);
    $total = 0;
    echo "<div id='content2'>";
    echo "<table border=1>";
    echo "<tr>";
    echo "<th> Album Name </th>";
    echo "<th> Price </th>";
    echo "</tr>";
    
    
    foreach($productsToBuy as $product){
            echo "<tr>";
            echo "<td> " . $product . "</td>"  . "<td> $". getPrice($product)[0]['price'] . "</td>"; 
            echo "</tr>";
            $total+=getPrice($product)[0]['price'];
            //echo "<br />";
            
        }
        echo "<td colspan='2'>";
        echo "Total $". $total ;
        echo "</td>";
        echo "</table>";
        echo "</div>";
   // echo "Total $". $total ;
}
function getPrice($album)
{
    global $dbConnection;
    
    $sql = "SELECT price from albulm WHERE albulmName = '" . $album . "'";
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
        <div id = "thankyou" >
       <h3 id="slogan"> You ordered the following products:</h3>
        </div>
        <br />
        
        <?=getProducts()?>

    </body>
</html>