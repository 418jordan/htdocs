<?php include '../view/header.php'; ?>
    <main>
        <h1>Edit Artwork</h1>
		<!-- this action sends you to the edit_art_form section of the index page -->
        <form action="index.php" method="post" id="edit_art_form">
			<!-- this action sends you to the save product section of the index page -->
			<input type="hidden" name="action" value="save_art"> 
            <label>Artist</label>
			<!--dropdown-->
            <select name="artist_id">
            <?php foreach ($artists as $artist) : ?>
                <option value="<?php echo $artist['artistID']; ?>">
                    <?php echo $artist['artistName']; ?>
                </option>
            <?php endforeach; ?>
            </select><br>
           
				<label>Code:</label>
                <input type="text" name="code" value="<?php echo $code; ?>"><br>
				<label>Name:</label>
				<input type="text" name="name" value=" <?php echo $name; ?>"><br> 
				<label>Size</label>
                <input type="text" name="size" value="<?php echo $size; ?>"><br>
				<label>Media:</label>
                <input type="text" name="media" value=" <?php echo $media; ?>"><br> 
               	<label>List Price:</label>
                <input type="text" name="price" value=" <?php echo $price; ?>"><br> 
				<input type="hidden" name="art_id" value="<?php echo $art_id; ?>"><br> 
				 
                <!-- submit the action to the form, basically the button will take you to the form you created.-->
				<label>&nbsp;</label>
                <input class="button" type="submit" value="Edit">
        </form>
		<p class="last_paragraph">
        <a href="index.php?action=list_art">View Artwork</a>
    </p>
    </main>
    <?php include '../view/footer.php'; ?>
</body>
</html>