<?php include '../view/header.php'; ?>
<main>
    <h1>Add Artwork</h1>
    <form action="index.php" method="post" id="add_product_form">
        <input type="hidden" name="action" value="add_product">

        <label>Artist:</label>
        <select name="artist_id">
        <?php foreach ( $artists as $artist ) : ?>
            <option value="<?php echo $artist['artistID']; ?>">
                <?php echo $artist['artistName']; ?>
            </option>
        <?php endforeach; ?>
        </select>
        <br>

        <label>Code:</label>
        <input type="text" name="code" />
        <br>

        <label>Name:</label>
        <input type="text" name="name" />
        <br>

        <label>List Price:</label>
        <input type="text" name="price" />
        <br>
		
		<label>Size:</label>
        <input type="text" name="size" />
        <br>

        <label>Media:</label>
        <input type="text" name="media" />
        <br>

        <label>&nbsp;</label>
        <input class="button" type="submit" value="Add Product" />
        <br>
    </form>
    <p class="last_paragraph">
        <a href="index.php?action=list_art">View Artwork List</a>
    </p>

</main>
<?php include '../view/footer.php'; ?>