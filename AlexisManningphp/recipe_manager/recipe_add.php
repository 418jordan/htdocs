<?php include '../view/header.php'; ?>
<link href="../main.css" rel="stylesheet" type="text/css">
<main>
    <form action="index.php" method="post" id="add_product_form">


        <h1>Add Recipe</h1>

        <label for="type_id">Type:</label>
        <select name="type_id">
                <?php foreach ($types as $type) : ?>
                <option value="<?php echo $type['typeID']; ?>">
                <?php echo $type['typeName']; ?>
                </option>
<?php endforeach; ?>
        </select>
        <br>

        <label for="name">Recipe Name</label>
        <input type="text" name="name" />
        <br>

        <label for="text">Ingredients needed:</label>
        <textarea name="text"> <?php if (isset($text)) {
    echo $text;
} ?></textarea>
        <br>
        <label>&nbsp;</label>
        <input type="submit" name="action" value="Add Recipe" />
        <br>
    </form>
    <p class="last_paragraph">
        <a href="index.php?action=list_recipes">View My Recipes</a>
    </p>

</main>
<?php include '../view/footer.php'; ?>
