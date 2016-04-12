<?php
session_start();
include('functions.php');

?>

<!DOCTYPE html>
<html>
    <head>
        <title> CD STORE </title>
        <style>@import url('CD_store.css');</style>
    </head>
    <body>
        <h1>CD STORE</h1>
        <br />
        <h3 id ="slogan">With prices so low its NUTS!</h3>
        <br />
        
        <form class="filterForm">
         <div id= "orderbyBar">  
          Artist:
          <select name="artist" class="artistDrop">
              <option value=""> All </option>
              <?php
                 $artists = getArtists();
                 foreach ($artists as $artist) {
                   echo "<option value='".$artist['artistName']."'>" . $artist['artistName'] . " </option>";
                 }
                
               ?>
              
          </select>
          
          Genre:
          <select name="genre" class="genreDrop">
              <option value=""> All </option>
              <?php
                 $genres = getGenre();
                 foreach ($genres as $genre) {
                   echo "<option value='".$genre['genre']."'>" . $genre['genre'] . " </option>";
                 }
                
               ?>
              
          </select>
          
          Album:
          <select name="album" class="albumDrop">
              <option value=""> All </option>
              <?php
                 $albums = getAlbum();
                 foreach ($albums as $album) {
                   echo "<option value='".$album['albulmName']."'>" . $album['albulmName'] . " </option>";
                 }
                
               ?>
              
          </select>
          Max. Price:
          <input type="text" name="maxPrice" size=5> <br>
          
          Order results by: 
          <input type="radio" name="orderBy" value="artist" checked> Artist 
          <input type="radio" name="orderBy" value="album"> Album
          <input type="radio" name="orderBy" value="price" checked> Price
          <input type="radio" name="orderBy" value="title"> Title
          
          <input type="submit" value="Search Products" name="searchForm">
        </div>      
        </form>
        
       
      
      <form action="shoppingCart.php">
          <div id="content">
      <table border=1>
          
          <tr>
              <th> Artist Name </th>
              <th> Album Name </th>
              <th> Song Title </th>
              <th> Album Price </th>
          </tr>
          <?php
           //$_GET['album'] = $array();
           $productList = getProductList();
            foreach($productList as $product)
            {
                echo "<tr>";
                echo "<td> '" . $product['artistName'] . "' </td>";
                echo "<td> '" . $product['albulmName'] . "' </td>";
                echo "<td> <input type='checkbox' name= '" . "album[]". "' value= '" . $product['albulmName']  . "' id= '". "frame" . "'>" . "<a target='productInfoiFrame' href='getProductInfo.php?Id=" . $product['title'] . "'>" . $product['title'] . "</a>" 
                . "</td> ";
                echo "<td> $" . $product['price'] . " </td>";
                echo "</tr>";
            }
          
          ?>
          
      </table>
          <input type="submit" value="BUY NOW" name="buy">
      </form>
      <div id = "iframe">
          <table border = 1>
              <tr>
                  <th>Song Description</th>
              </tr>
              <tr>
              <td>
            <iframe name="productInfoiFrame" width="250" height="315" 
            src="getProductInfo.php" frameborder="0" style='float: right'></iframe>
            </td>
            </tr>
            </table>
      </div>
        
        <iframe name="productInfoiFrame" width="250" height="100" 
          src="getProductInfo.php" frameborder="0" style='float: right'>
        </iframe>
              </td>
              </tr>
          </table>
        </div>
>>>>>>> a45e480d85919835551e7bf55b5ff6deb274f3d9

    </body>
</html>