<?php
require_once('database.php');

// Get IDs
$product_id = filter_input(INPUT_POST, 'product_id', FILTER_VALIDATE_INT);
// $category_id = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);

// access category database
/* $queryCategory = 'SELECT *
          FROM categories
          WHERE categoryID = :category_id';
$statement = $db->prepare($queryCategory);
$statement->bindvalue(':category_id',$category_id);
$statement->execute();
$categories = $statement->fetch();
$statement->closeCursor(); */

// Pull product from database
$queryProduct = 'SELECT *
	FROM products
	WHERE productID = :product_id';
$statement2 = $db->prepare($queryProduct);
$statement2->bindvalue(':product_id',$product_id);
$statement2->execute();
$products = $statement2->fetch();
$statement2->closeCursor();

// Double check this video
/* echo "$productID, $productName, $productCode, $id";
exit; */
?>
<!DOCTYPE html>
<html>
	<head>
		<title>My Guitar Shop</title>
		<link rel="stylesheet" type="text/css" href="main.css" />
	</head>
	<body>
		<header>
			<h1>Product Manager</h1>
		</header>
	<main>
		<h1>Edit Product</h1>
	<section>
		<form id="add_product_form" action="edit_confirm.php" method="post">
			<label>Category ID:</label>
                        <input type="text" name="category" id="category" value="<?php echo "{$products['categoryID']}"; ?>">
<!--
			<select name="category_id">
            <?php /* foreach ($categories as $category) {
				if($categories == $category) {
					$optlist .= "<option selected value=echo $category'[categoryID]'>$category</option>";
				} else {
					$optlist .= "<option value='$category'>$category</option>";
				}
			}
                        echo $optlist; */
			?>
                <option value="<?php // echo $category['categoryID']; ?>">
                    <?php // echo $category['categoryName']; ?>
                </option> 
            <?php // endforeach; ?>
			</select>
-->
                        <br>
			
			<label>Code:</label>
			<input type="text" name="code" id="code" value="<?php echo "{$products['productCode']}"; ?>">

			<br>
			
			<label>Name:</label>
			<input type="text" name="name" id="name" value="<?php echo "{$products['productName']}"; ?>">
			
			<br>
			
			<label>List Price:</label>
			<input type="text" name="price" id="price" value="<?php echo "{$products['listPrice']}"; ?>">
			
			<br>
			
			<label>&nbsp;</label>
            <input type="submit" name="submit" value="Save Changes">
			<input type="hidden" name="id" id="id" value="<?php echo "{$products['productID']}"; ?>">
<!--
			<input type="hidden" name="id" id="id" value="<?php //echo "{$products['categoryID']}"; ?>">
-->
			
			<br>
			
			<p>
				<a href="index.php">View Product List</a>
			</p>
		</form>
	</section>
</main>
<footer>
    <p>&copy; <?php echo date("Y"); ?> My Guitar Shop, Inc.</p>
</footer>
</body>
</html>