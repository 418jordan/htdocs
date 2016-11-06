<?php
// Use a database connection object
require_once 'database.php';

/**
 * Select courses from database
 * @return array of courses that have a prefix, course number, title & credit count
 */
function courses(){
    global $db;
    $sql = 'SELECT * FROM courses';
    $statement = $db->prepare($sql);
    $statement->execute();
    $courses = $statement->fetchAll();
    $statement->closeCursor();
    return $courses;
}

/*
 * Add three additional functions to this model, 
 * use PDO prepared statements for each
 */


// 1. Add new course to the database
 
// 2. Delete course from the database

// 3. Update course from the database