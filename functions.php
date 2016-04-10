<?php

include('../../includes/database.php');

$dbConnection = getDatabaseConnection('cd_store');

function getByArtist() {
    global $dbConnection;
    
    $sql = "SELECT *
            FROM songs NATURAL JOIN artist NATURAL JOIN album
            WHERE artist = :artist";
    $namedStuff = array();
    $namedStuff[':artist'] = $_POST['artist'];
    $statement = $dbConnection->prepare($sql);
    $statement->execute($namedStuff);
    $records = $statement->fetchAll(PDO::FETCH_ASSOC);
    
    return $records;
    
}

function getByAlbum() {
    global $dbConnection;
    
    $sql = "SELECT *
            FROM songs NATURAL JOIN artist NATURAL JOIN album
            WHERE album = :album";
    $namedStuff = array();
    $namedStuff[':album'] = $_POST['album'];
    $statement = $dbConnection->prepare($sql);
    $statement->execute($namedStuff);
    $records = $statement->fetchAll(PDO::FETCH_ASSOC);
    
    return $records;
    
}

function getByGenre() {
    global $dbConnection;
    
    $sql = "SELECT *
            FROM songs NATURAL JOIN artist NATURAL JOIN album
            WHERE genre = :genre";
    $namedStuff = array();
    $namedStuff[':genre'] = $_POST['genre'];
    $statement = $dbConnection->prepare($sql);
    $statement->execute($namedStuff);
    $records = $statement->fetchAll(PDO::FETCH_ASSOC);
    
    return $records;
    
}

function getArtists() {
    global $dbConnection;
    
    $sql = "SELECT artistName fom artist";
    $namedStuff = array();
    $statement = $dbConnection->prepare($sql);
    $statement->execute();
    $records = $statement->fetchAll(PDO::FETCH_ASSOC);
    
    return $records;
    
}

function getGenre() {
    global $dbConnection;
    
    $sql = "SELECT genre fom album";
    $namedStuff = array();
    $statement = $dbConnection->prepare($sql);
    $statement->execute();
    $records = $statement->fetchAll(PDO::FETCH_ASSOC);
    
    return $records;
    
}

function getAlbum() {
    global $dbConnection;
    
    $sql = "SELECT title fom album";
    $namedStuff = array();
    $statement = $dbConnection->prepare($sql);
    $statement->execute();
    $records = $statement->fetchAll(PDO::FETCH_ASSOC);
    
    return $records;
    
}






?>