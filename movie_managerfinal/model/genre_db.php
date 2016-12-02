<?php
function get_genres() {
    global $db;
    $query = 'SELECT * FROM genre
              ORDER BY genreId';
    $statement = $db->prepare($query);
    $statement->execute();
    return $statement;    
}

function get_genre_name($genre_id) {
    global $db;
    $query = 'SELECT * FROM genre
              WHERE genreId = :genre_id';    
    $statement = $db->prepare($query);
    $statement->bindValue(':genre_id', $genre_id);
    $statement->execute();    
    $genre = $statement->fetch();
    $statement->closeCursor();    
    $genre_name = $genre['genreType'];
    return $genre_name;
}

function add_genre($name) {
    global $db;
    $query = 'INSERT INTO genre (genreType)
            VALUES (:name)';
    $statement = $db->prepare($query);
    $statement->bindValue(':name', $name);
    $statement->execute();
    $statement->closeCursor();
}

function delete_genre($genre_id) {
    global $db;
    $query = 'DELETE FROM genre 
            WHERE genreId = :genre_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':genre_id', $genre_id);
    $statement->execute();
    $statement->closeCursor();
    
}
?>