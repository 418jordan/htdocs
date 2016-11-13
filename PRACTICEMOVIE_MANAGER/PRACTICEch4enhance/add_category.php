<?php 
// Get category data
$name = filter_input(INPUT_POST, 'name');

// Validate
if ($name == null) {
	$error = "Invalid category data. Check all fields and try again.";
	include('error.php');
} else {
	require_once('database.php');
	
	// Add to database
	$query = 'INSERT INTO categories (categoryName)
			  VALUES (:category_name)';
	$statment = $db->prepare ($query);
	$statment->bindValue(':category_name', $name);
	$statment->execute();
	$statment->closeCursor();
	
	// Display Category List
	include('category_list.php');
}
?>