<?php include './view/nav/header.php'; ?>

<main>

	<h1>Product List</h1>
	
    <aside>
        <!-- display a list of categories -->
        <h2>Categories</h2>
        <nav>
        <ul>
        <?php foreach ($categories as $category) : ?>
            <li>
            <a href="?category_id=<?php echo $category['idCategory']; ?>">
                <?php echo $category['nameCategory']; ?>
            </a>
            </li>
        <?php endforeach; ?>
        </ul>
        </nav>
    </aside>

    <section>
        <!-- display a table of products -->
        <h2><?php echo $category_name; ?></h2>
        <table>
            <tr>
                <th>
					Code
				</th>
                <th>
					Name
				</th>
                <th class="right">
					Price
				</th>
				<th>
					Discount
				</th>
                <th>&nbsp;
               		                		
				</th>
           		<th>&nbsp;
               		                		
				</th>
            </tr>
            <?php foreach ($products as $product) : ?>
            <tr>
                <td>
					<?php echo $product['codeProduct']; ?>
				</td>
                <td>
					<?php echo $product['nameProduct']; ?>
				</td>
                <td class="right">
					$<?php echo $product['priceProduct']; ?>
				</td>
				<td>
					<?php echo $product['discountProduct']; ?>%
				</td>
                <td>
					<form action="." method="post">
						<input type="hidden" name="action" 
							value="edit_product">
						<input type="hidden" name="product_id"
							value="<?php echo $product['idProduct']; ?>">	
						<input type="submit" value="Edit">
					</form>
				</td>
				<td>
					<form action="." method="post">
						<input type="hidden" name="action"
							   value="delete_product">
						<input type="hidden" name="product_id"
							   value="<?php echo $product['idProduct']; ?>">
						<input type="hidden" name="category_id"
							   value="<?php echo $product['Categories_idCategory']; ?>">
						<input type="submit" value="Delete">
					</form>					
				</td>
           		<td>
					<form action="." method="post">
						<input type="hidden" name="action"
							   value="add">
						<input type="hidden" name="product_id"
							   value="<?php echo $product['idProduct']; ?>">
						<input type="submit" value="Add to Cart">
					</form>					
				</td>
            </tr>
            <?php endforeach; ?>
        </table>
        <p>
			<a href="?action=show_add_form">Add Product</a>
		</p>
        <p class="last_paragraph">
			<a href="?action=list_categories">List Categories</a>
		</p>        
	</section>
</main>

<?php include './view/nav/footer.php'; ?>