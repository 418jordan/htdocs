<?php

require('../model/database.php');
require('../model/recipe_db.php');
require('../model/type_db.php');


$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'list_recipes';
    }
}

if ($action == 'list_recipes') {
    $type_id = filter_input(INPUT_GET, 'type_id', FILTER_VALIDATE_INT);
    if ($type_id == NULL || $type_id == FALSE) {
        $type_id = 1;
    }
    $type_name = get_type_name($type_id);
    $types = get_types();
    $recipes = get_recipes_by_type($type_id);
    include('recipe_list.php');
    exit;
}
//     delete button validation
 
else if ($action == 'delete_recipe') {
    $recipe_id = filter_input(INPUT_POST, 'recipe_id', FILTER_VALIDATE_INT);
    $type_id = filter_input(INPUT_POST, 'type_id', FILTER_VALIDATE_INT);
    if ($type_id == NULL || $type_id == FALSE ||
            $recipe_id == NULL || $recipe_id == FALSE) {
        $error = "Missing or incorrect recipe id or type id.";
        include('../errors/error.php');
        exit;
    } else {
        delete_recipe($recipe_id);
        $message = 'The entry has been deleted.';
        header("Location: .?type_id=$type_id");
        exit;
    }
    // edit button validation

} else if ($action == 'show_edit_form') {
    // collect the data
    $types = get_types();
    $recipe_id = filter_input(INPUT_POST, 'recipe_id', FILTER_VALIDATE_INT);
    $type_id = filter_input(INPUT_POST, 'type_id', FILTER_VALIDATE_INT);
    $text = filter_input(INPUT_POST, 'text', FILTER_SANITIZE_STRING);
    $name = filter_input(INPUT_POST, 'name');
    
    $type_name = get_type_name($type_id);
    $recipes = get_recipes_by_type($type_id);
    
   // check for errors
    if ($type_id == NULL || $type_id == FALSE || $text == NULL ||
            $name == NULL || $recipe_id == null || $recipe_id == false) {
        $error = "Invalid recipe data. Check all fields and try again.";
        include('recipe_edit.php');
    } else {
        include('recipe_edit.php');
        exit;
    }
} else if ($action == 'Edit Recipe') {
    $recipe_id = filter_input(INPUT_POST, 'recipe_id', FILTER_VALIDATE_INT);
    $type_id = filter_input(INPUT_POST, 'type_id', FILTER_VALIDATE_INT);
    $text = filter_input(INPUT_POST, 'text', FILTER_SANITIZE_STRING);
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    
    if ($type_id == NULL || $type_id == FALSE || $text == NULL ||
            $name == NULL || $recipe_id == null || $recipe_id == false) {
        $error = "Invalid recipe data. Check all fields and try again.";
        include('../errors/error.php');
        exit;
    } else {
        edit_recipe($recipe_id, $name, $text, $type_id);
            $message = 'The entry has been updated.';
        header("Location: .?type_id=$type_id");
        exit;
    }
} else if ($action == 'list_types') {
    $types = get_types();
    include('type_list.php');
    exit;
// Add recipe button
} else if ($action == 'show_add_form') {
    $types = get_types();
    include('recipe_add.php');
    exit;
} else if ($action == 'Add Recipe') {
    $type_id = filter_input(INPUT_POST, 'type_id', FILTER_VALIDATE_INT);
    $text = filter_input(INPUT_POST, 'text', FILTER_SANITIZE_STRING);
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    
    if ($type_id == NULL || $type_id == FALSE || $text == NULL ||
            $name == NULL ) {
        $error = "Invalid recipe data. Check all fields and try again.";
        include('../errors/error.php');
    } else {
        add_recipe($type_id, $text, $name);
            $message = 'The entry has been added.';
        header("Location: .?type_id=$type_id");
        exit;
    }
    
} else if ($action == 'list_types') {
    $types = get_types();
    include('type_list.php');
    exit;
} else if ($action == 'add_type') {
    $name = filter_input(INPUT_POST, 'name');

    // Validate inputs
    if ($name == NULL) {
        $error = "Invalid type name. Check name and try again.";
        include('view/error.php');
        exit;
    } else {
        add_type($name);
        header('Location: .?action=list_types');  // display the type List page
    }
} else if ($action == 'delete_type') {
    $type_id = filter_input(INPUT_POST, 'type_id', FILTER_VALIDATE_INT);
    delete_type($type_id);
    header('Location: .?action=list_types');      // display the type List page
    exit;
}
?>
 