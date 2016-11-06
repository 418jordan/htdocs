<?php
/* Controller

/*
 * Remember these concepts:
 * 1. You must have something before you can use it
 * 2. Filter incoming values
 * 3. Store values in variables
 * 3. Validate variable data
 * 4. Control structures detemine what is going to happen
 * 5. All data interactions happen in the model
 * 6. All application logic happens in the controller
 * 7. Check that things are working often, don't wait until the end
 * 8. Views are for reporting status to humans
 */
require_once "model/model.php";

$action = filter_input(INPUT_POST, "action");
var_dump($_POST);
var_dump($action);
//action has not been posted
if ($action == null)
{
	//get action from query string
    $action = filter_input(INPUT_GET, "action");

    //no action in query string, default to "list"
	if ($action == null)
    {
    	$action = "list";
    }
}
var_dump($action);

if ($action == "list")
{
	$courses = courses();

    include("views/course_list.php");
} else if ($action == "edit") {
    var_dump($action);
    $course_id = filter_input(INPUT_POST, "course_id");
    $course = get_course($course_id);

    $prefix = $course["Prefix"];
    $courseNumber = $course["CourseNumber"];
    $name = $course["Name"];
    $credits = $course["Credits"];

    include("views/edit_course_form.php");
} else if ($action == "delete")
{
    $course_id = filter_input(INPUT_POST, "course_id");

    delete_course($course_id);
    header("index.php");

} else if ($action == "update") {
    global $db;
    $calories = 150;
    $colour = 'red';
    $sth = $db->prepare('SELECT name, colour, calories
    FROM fruit
    WHERE calories < :calories AND colour = :colour');
    $sth->bindValue(':calories', $calories, PDO::PARAM_INT);
    $sth->bindValue(':colour', $colour, PDO::PARAM_STR);
    var_dump($sth);

    //get posted data
    var_dump("here");
    $course_id = filter_input(INPUT_POST, "course_id");
    $prefix = filter_input(INPUT_POST, "prefix");
    $courseNumber = filter_input(INPUT_POST, "course_number");
    $name = filter_input(INPUT_POST, "name");
    $credits = filter_input(INPUT_POST, "credits");

    //validate
    if ($prefix == null || $courseNumber == null)
    {
    	//validation fails
        $error = "Required fields missing. Add failed. Recheck form for errors";
        include("views/edit_course_form.php");
    }

    update_course($course_id, $courseNumber, $credits, $name, $prefix);
    header("Location: index.php");
}
else if ($action == "addform") {
    $prefix = filter_input(INPUT_POST, "prefix");
    $courseNumber = filter_input(INPUT_POST, "course_number");
    $credits = filter_input(INPUT_POST, "credits");
    $name = filter_input(INPUT_POST, "name");

    include("views/add_course_form.php");
}
else if ($action == "add") {

    $prefix = filter_input(INPUT_POST, "prefix");
    $courseNumber = filter_input(INPUT_POST, "course_number");
    $credits = filter_input(INPUT_POST, "credits");
    $name = filter_input(INPUT_POST, "name");

    //validation

    if ($prefix == null || $courseNumber == null || $credits == null || $name == null)
    {
    	//validation fails
        $error = "Required fields missing. Add failed. Recheck form for errors.";
        include("views/add_course_form.php");

    } else {

        add_course($courseNumber, $credits, $name, $prefix);
        header("Location: index.php");
    }
}


//handle the different values of $action