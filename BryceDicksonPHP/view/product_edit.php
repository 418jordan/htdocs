<?php include './view/nav/header.php'; ?>

<main>
	<h1>Edit Product</h1>
	
	<p style="color:red">
		<?php if (isset($error)) echo $error; ?>
	</p>
	
	<section>
		<form id="add_product_form" action="index.php" method="post">
			<input type="hidden" name="action" value="save_product_changes">
		
			<label>Category:</label>
			<select name="category_id">
			<?php foreach ( $categories as $category ) : ?>
				<option value="<?php echo $category['idCategory']; ?>" <?php if ($category_id  == $category['idCategory']) { echo 'selected'; } ?> >
					<?php echo $category['nameCategory']; ?>
				</option>
			<?php endforeach; ?>
			</select>
			<br>
			<label>Code:</label>
			<input type="text" name="code" value="<?php echo $code; ?>">
			<br>
			<label>Name:</label>
			<input type="text" name="name" value="<?php echo $name; ?>">
			<br>
			<label>List Price:</label>
			<input type="text" name="price" value="<?php echo $price; ?>">
			<br>
			<label>Discount:</label>
			<input type="text" name="discount" value="<?php echo $discount; ?>">
			<br>
			<input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
			<input type="submit" value="Save Changes">
			
		</form>
		<br>
		<p>
			<a href="index.php">View Product List</a>
		</p>
	</section>
</main>
<?php include './view/nav/footer.php'; ?>