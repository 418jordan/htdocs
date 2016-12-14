	<?php
function get_artist() {
    global $db;
    $query = 'SELECT * FROM artist
              ORDER BY artistID';
    $statement = $db->prepare($query);
    $statement->execute();
    return $statement;    
}

function get_artist_name($artist_id) {
    global $db;
    $query = 'SELECT * FROM artist
              WHERE artistID = :artist_id';    
    $statement = $db->prepare($query);
    $statement->bindValue(':artist_id', $artist_id);
    $statement->execute();    
    $artist = $statement->fetch();
    $statement->closeCursor();    
    $artist_name = $artist['artistName'];
    return $artist_name;
}

function add_artist($name) {
    global $db;
    $query = 'INSERT INTO artist (artistName)
              VALUES (:name)';
    $statement = $db->prepare($query);
    $statement->bindValue(':name', $name);
    $statement->execute();
    $statement->closeCursor();    
}

function delete_artist($artist_id) {
    global $db;
    $query = 'DELETE FROM artist
              WHERE artistID = :artist_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':artist_id', $artist_id);
    $statement->execute();
    $statement->closeCursor();
}
?>