<?php
session_start();
include('functions.php');

?>

<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>

        <?php
        
        $productInfo = getProductInfo();
        echo $productInfo['description'];
        
        
        ?>

    </body>
</html>