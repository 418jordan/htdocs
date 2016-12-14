<?php
// This is the data base where the prepared statements for actions/ buttons are retrieved
function get_recipes_by_type($type_id) {
    global $db;
    $query = 'SELECT * FROM recipe
              WHERE recipe.typeID = :type_id
              ORDER BY recipeID';
    $statement = $db->prepare($query);
    $statement->bindValue(":type_id", $type_id);
    $statement->execute();
    $recipe = $statement->fetchAll();
    $statement->closeCursor();
    return $recipe;
}

function get_recipe($recipe_id) {
    global $db;
    $query = 'SELECT * FROM recipe
              WHERE recipeID = :recipe_id';
    $statement = $db->prepare($query);
    $statement->bindValue(":recipe_id", $recipe_id);
    $statement->execute();
    $recipe = $statement->fetch();
    $statement->closeCursor();
    return $recipe;
}

function delete_recipe($recipe_id) {
    global $db;
    $query = 'DELETE FROM recipe
              WHERE recipeID = :recipe_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':recipe_id', $recipe_id);
    $statement->execute();
    $statement->closeCursor();
}

// function to edit recipe
function edit_recipe($recipe_id, $name, $text, $type_id) {
    global $db;
    $query = 'UPDATE recipe
              SET 
              typeID = :type_id,
              recipetext = :text,
              recipeName = :name
              
              WHERE 
              recipeID = :recipe_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':type_id', $type_id);
    $statement->bindValue(':text', $text);
    $statement->bindValue(':name', $name);
    $statement->bindValue(':recipe_id', $recipe_id);
    $statement->execute();
    $statement->closeCursor();
    
}

function add_recipe($type_id, $text, $name) {
    global $db;
    $query = 'INSERT INTO recipe
                 (typeID, recipetext, recipeName)
              VALUES
                 (:type_id, :text, :name)';
    $statement = $db->prepare($query);
    $statement->bindValue(':type_id', $type_id);
    $statement->bindValue(':text', $text);
    $statement->bindValue(':name', $name);
    $statement->execute();
    $statement->closeCursor();
}
?>