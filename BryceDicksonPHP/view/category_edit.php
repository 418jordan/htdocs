<?php include './view/nav/header.php'; ?>
<main>
	<h1>
		Edit Category
	</h1>
	
	<p style="color:red">
		<?php if (isset($error)) echo $error; ?>
	</p>
	
	<section>
	
		<form id="add_product_form" action="index.php" method="post">
			<input type="hidden" name="action" value="save_category_changes">
			
			<label>Name:</label>
			<input type="text" name="category_name" id="category_name" value="<?php echo $category_name; ?>">
			<br>
			<input type="hidden" name="category_id" value="<?php echo $category_id; ?>">
			<input type="submit" value="Save Changes">
		</form>
		<br>
		<p>
			<a href="?action=list_categories">View Category List</a>
		</p>
	</section>
</main>
<?php include './view/nav/footer.php'; ?>