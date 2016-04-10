<?php

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
        <h3>With prices so low its NUTS!</h3>
        
        <form class="filterForm">
            
          Artist:
          <select name="artist" class="artistDrop">
              <option value="all"> All </option>
              <?php
                 $artists = getArtists();
                 foreach ($artists as $artist) {
                   echo "<option value='".$artist['artistName']."'>" . $artist['artistName'] . " </option>";
                 }
                
               ?>
              
          </select>
          
          Genre:
          <select name="genre" class="genreDrop">
              <option value="all"> All </option>
              <?php
                 $genres = getGenre();
                 foreach ($genres as $genre) {
                   echo "<option value='".$genre['genre']."'>" . $genre['genre'] . " </option>";
                 }
                
               ?>
              
          </select>
          
          Album:
          <select name="album" class="albumDrop">
              <option value="all"> All </option>
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
            
        </form>
        
        <div class='table'>
      <table border=1>
          
          <tr>
              <th> Artist Name </th>
              <th> Album Name </th>
              <th> Song Title </th>
              <th> Album Price </th>
          </tr>
          <?php
          
           $productList = getProductList();
            foreach($productList as $product)
            {
                echo "<tr>";
                echo "<td> <input type='checkbox' name= '" . "album". "' value= '" . $product['albulmName']  . "' id= '". $product['artistName'] . "'>" . $product['artistName']
                . "</td> ";
                echo "<td> '" . $product['albulmName'] . "' </td>";
                echo "<td> '" . $product['title'] . "' </td>";
                echo "<td> $" . $product['price'] . " </td>";
                echo "</tr>";
            }
          
          ?>
          
      </table>
        
        

    </body>
</html>