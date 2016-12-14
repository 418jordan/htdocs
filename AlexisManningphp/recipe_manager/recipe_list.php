<?php include '../view/header.php'; ?>

<link href="../main.css" rel="stylesheet" type="text/css">
<main>
    <h1>Recipe List</h1>
    <aside>
        <!-- display a list of types -->
        <h2>Types</h2>
        <nav>
        <ul>
        <?php foreach ($types as $type) : ?>
            <li>
            <a href="?type_id=<?php echo $type['typeID']; ?>">
                <?php echo $type['typeName']; ?>
            </a>
            </li>
        <?php endforeach; ?>
        </ul>
        </nav>
    </aside>

    <section>
        
<?php
            if (isset($message)) {
                echo "<p> $message </p>";
            }
            ?>

        <h2><?php echo $type_name; ?></h2>
            
            <?php foreach ($recipes as $recipe) : ?>
           
             <p style="font-weight: bold"><?php echo $recipe['recipeName']; ?><br></p>
                <?php echo $recipe['recipeText']; ?><br>
                <form action="." method="post">
                    <input type="hidden" name="action"
                           value="delete_recipe">
                    <input type="hidden" name="recipe_id"
                           value="<?php echo $recipe['recipeID']; ?>">
                    <input type="hidden" name="type_id"
                           value="<?php echo $recipe['typeID']; ?>">
                    <input class="btn-me" type="submit" value="Delete">
                </form>
<!--            The edit button form function-->
                <form action="." method="post">
             <input type="hidden" name="action"
                           value="show_edit_form">
             <input type="hidden" name="recipe_id"
                           value="<?php echo $recipe['recipeID']; ?>">
             <input type="hidden" name="type_id"
                           value="<?php echo $recipe['typeID']; ?>">
         <input value=" <?php echo $recipe['recipeText']; ?>" name="text" type="hidden">  
         <input value=" <?php echo $recipe['recipeName']; ?>" name="name" type="hidden">    
             <input class="btn-me" type="submit" value="Edit">
                </form>
            <?php endforeach; ?>
        <p><a href="?action=show_add_form">Add recipe</a></p>
      
        <p class="last_paragraph"><a href="?action=list_types">List types</a></p>        
    </section>
</main>
<?php include '../view/footer.php'; ?>