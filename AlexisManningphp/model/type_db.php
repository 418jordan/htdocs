<?php
function get_types() {
    global $db;
    $query = 'SELECT * FROM types
              ORDER BY typeID';
    $statement = $db->prepare($query);
    $statement->execute();
    return $statement;    
}

function get_type_name($type_id) {
    global $db;
    $query = 'SELECT * FROM types
              WHERE typeID = :type_id';    
    $statement = $db->prepare($query);
    $statement->bindValue(':type_id', $type_id);
    $statement->execute();    
    $type = $statement->fetch();
    $statement->closeCursor();    
    $type_name = $type['typeName'];
    return $type_name;
}

function add_type($name) {
    global $db;
    $query = 'INSERT INTO types(typeName)
            VALUES (:name)';
    $statement = $db->prepare($query);
    $statement->bindValue(':name', $name);
    $statement->execute();
    $statement->closeCursor();
}

function delete_type($type_id) {
    global $db;
    $query = 'DELETE FROM types 
            WHERE typeID = :type_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':type_id', $type_id);
    $statement->execute();
    $statement->closeCursor();
    
}
?>f