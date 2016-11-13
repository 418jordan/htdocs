<?php
// Get ID
$category_id = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);

// Validate
if ($category_id == null || $category_id == false) {
	$error = "Invalid category ID.";
	include('error.php');
} else {
	require_once('database.php');
	
	// Delete from database
	$query = 'DELETE FROM categories
			  WHERE categoryID = :category_id';
	$statement = $db->prepare($query);
    $statement->bindValue(':category_id', $category_id);
    $statement->execute();
    $statement->closeCursor();
	
	// Display Category List
	include('category_list.php');
}
?>