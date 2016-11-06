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


$action = filter_input(INPUT_POST, "action");

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

//handle the different values of $action