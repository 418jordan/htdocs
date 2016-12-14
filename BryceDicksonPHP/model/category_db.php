<?php
function get_categories() {
    global $db;
    $query = 'SELECT * FROM categories
              ORDER BY idCategory';
    $statement = $db->prepare($query);
    $statement->execute();
    return $statement;    
}

function get_category($category_id) {
	global $db;
	$query = 'SELECT * FROM categories
			  WHERE idCategory = :category_id';
	$statement = $db->prepare($query);
    $statement->bindValue(':category_id', $category_id);
    $statement->execute();    
    $category = $statement->fetch();
    $statement->closeCursor();
	return $category;
	
}

function get_category_name($category_id) {
    global $db;
    $query = 'SELECT * FROM categories
              WHERE idCategory = :category_id';    
    $statement = $db->prepare($query);
    $statement->bindValue(':category_id', $category_id);
    $statement->execute();    
    $category = $statement->fetch();
    $statement->closeCursor();    
    $category_name = $category['nameCategory'];
    return $category_name;
}

function add_category($category_name) {
    global $db;
    $query = 'INSERT INTO categories (nameCategory)
              VALUES (:name)';
    $statement = $db->prepare($query);
    $statement->bindValue(':name', $category_name);
    $statement->execute();
    $statement->closeCursor();
}

function save_category_changes($category_id, $category_name) {
	global $db;
	$query = 'UPDATE categories
              SET nameCategory = :category_name
              WHERE idCategory = :category_id';
	$statement = $db->prepare($query);
	$statement->bindValue(':category_name', $category_name);
	$statement->bindValue(':category_id', $category_id);
	$statement->execute();
	$statement->closeCursor();
}

function delete_category($category_id) {
    global $db;
    $query = 'DELETE FROM categories
              WHERE idCategory = :category_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':category_id', $category_id);
    $statement->execute();
    $statement->closeCursor();
}
?>