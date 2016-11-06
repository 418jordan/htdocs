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

function get_course($course_id){
    global $db;
    $sql = 'SELECT * FROM courses WHERE CourseId = :course_id';
    $statement = $db->prepare($sql);
    $statement->bindValue(':course_id', $course_id);
    $statement->execute();
    $course = $statement->fetch();
    $statement->closeCursor();
    return $course;
}

// 1. Add new course to the database
function add_course($courseNumber, $credits, $name, $prefix) {
    global $db;
    $query = "INSERT INTO courses (CourseNumber, Credits, Name, Prefix) VALUES (:courseNumber, :credits, :name, :prefix)";

    $statement = $db->prepare($query);
    $statement->bindValue(':courseNumber', $courseNumber);
    $statement->bindValue(':credits', $credits);
    $statement->bindValue(':name', $name);
    $statement->bindValue(':prefix', $prefix);
    $statement->execute();
}

// 2. Delete course from the database
function delete_course($course_id) {
    global $db;

    $query = "DELETE FROM courses WHERE CourseId = :course_id";

    $statement = $db->prepare($query);
    $statement->bindValue(':course_id', $course_id);
    $statement->execute();
}

// 3. Update course from the database
function update_course($course_id, $courseNumber, $credits, $name, $prefix) {
    global $db;
    $query = "UPDATE courses SET CourseNumber = :courseNumber, Credits = :credits, Name = :name, Prefix = :prefix WHERE CourseId = :course_id";

    $statement = $db->prepare($query);
    $statement->bindValue(':courseNumber', $courseNumber);
    $statement->bindValue(':credits', $credits);
    $statement->bindValue(':name', $name);
    $statement->bindValue(':prefix', $prefix);
    $statement->bindValue(':course_id', $course_id);
    var_dump($statement);
    $statement->execute();
}