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
                 $genres = getGenere();
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
                   echo "<option value='".$album['title']."'>" . $album['title'] . " </option>";
                 }
                
               ?>
              
          </select>
            
        </form>

    </body>
</html>