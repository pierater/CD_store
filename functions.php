<?php

include('../../includes/database.php');

$dbConnection = getDatabaseConnection('cd_store');

function getByArtist() {
    global $dbConnection;
    
    $sql = "SELECT *
            FROM songs NATURAL JOIN artist NATURAL JOIN albulm
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
            FROM songs NATURAL JOIN artist NATURAL JOIN albulm
            WHERE albulm = :album";
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
            FROM songs NATURAL JOIN artist NATURAL JOIN albulm
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
    
    $sql = "SELECT artistName from artist";
    $namedStuff = array();
    $statement = $dbConnection->prepare($sql);
    $statement->execute();
    $records = $statement->fetchAll(PDO::FETCH_ASSOC);
    
    return $records;
    
}

function getGenre() {
    global $dbConnection;
    
    $sql = "SELECT genre from albulm";
    $namedStuff = array();
    $statement = $dbConnection->prepare($sql);
    $statement->execute();
    $records = $statement->fetchAll(PDO::FETCH_ASSOC);
    
    return $records;
    
}

function getAlbum() {
    global $dbConnection;
    
    $sql = "SELECT albulmName from albulm";
    $namedStuff = array();
    $statement = $dbConnection->prepare($sql);
    $statement->execute();
    $records = $statement->fetchAll(PDO::FETCH_ASSOC);
    
    return $records;
    
}

function getProductList()
{

global $dbConnection;
    $sql = "SELECT artistName,
            albulmName, title, price
            FROM songs NATURAL JOIN
            artist NATURAL JOIN
            albulm WHERE 1";
            
    if (isset($_GET['searchForm'])) { //checks whether the search form was submitted
        
        $namedParameters = array();
        
        if (!empty($_GET['artist'])) {
            
            //Following line DOESN'T prevent SQL INJECTION
            //$sql .= " AND productTypeId = " . $_GET['productType'];
            
            $sql .= " AND artistName = :artistName"; //Using Named Parameters to prevent SQL Injection
            $namedParameters[":artistName"] =  $_GET['artist'];
        }
        if (!empty($_GET['genre'])) {
            
            //Following line DOESN'T prevent SQL INJECTION
            //$sql .= " AND productTypeId = " . $_GET['productType'];
            
            $sql .= " AND genre = :genre"; //Using Named Parameters to prevent SQL Injection
            $namedParameters[":genre"] =  $_GET['genre'];
        }
        
        if (!empty($_GET['album'])) {
            
            //Following line DOESN'T prevent SQL INJECTION
            //$sql .= " AND productTypeId = " . $_GET['productType'];
            
            $sql .= " AND albulmName = :albumName"; //Using Named Parameters to prevent SQL Injection
            $namedParameters[":albumName"] =  $_GET['album'];
        }
        
        if (!empty($_GET['maxPrice'])) {
            
            //$sql .= " AND price <= " . $_GET['maxPrice'];
            
            $sql .= " AND price <= :maxPrice ";
            $namedParameters[":maxPrice"] =  $_GET['maxPrice'];
            
        }
        

        if (!isset($_GET['orderBy'])) {
            
            $sql .= " ORDER BY " . $_GET['orderBy'] ;
            
        }

    }    
          
    // echo $sql;            
    $statement = $dbConnection->prepare($sql);
    $statement->execute($namedParameters);
    $records = $statement->fetchAll(PDO::FETCH_ASSOC);
    
    //print_r($records);
    
    return $records;    
}




?>