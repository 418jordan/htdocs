<?php
/* 
 * Model for the newspaper exam application
 */

// Use a database connection object
require_once 'database.php';

/**
 * Select advertisement types from database
 * @return array of advertisement types by id and name
 */
function adTypes(){
    global $db;
    $sql = 'SELECT adTypesId, adType FROM adTypes';
    $statement = $db->prepare($sql);
    $statement->execute();
    $adTypes = $statement->fetchAll();
    $statement->closeCursor();
    return $adTypes;
}

/*
 * Add four additional functions to this model, 
 * use PDO prepared statements for each
 */


// 1. Add new advertiser information to the database and return the primary key from the insert
 
// 2. Read advertiser data from the database

// 3. Add new advertisement information to the database and return the primary key from the insert

// 4. Read advertisement information from the database
