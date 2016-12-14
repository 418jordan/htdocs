<?php
require_once('../model/database.php');
require_once('../model/art_work_db.php');
require_once('../model/artist_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'list_art';
    }
}

if ($action == 'list_art') {
    $artist_id = filter_input(INPUT_GET, 'artist_id', 
            FILTER_VALIDATE_INT);
    if ($artist_id == NULL || $artist_id == FALSE) {
        $artist_id = 1;
    }
    $artist_name = get_artist_name($artist_id);
    $artists = get_artist();
    $artWork = get_artwork_by_artist($artist_id);
    include('art_list.php');
	
} else if ($action == 'show_add_form') {
    $artists = get_artist();
	$artWork = get_artwork_by_artist($artist_id);
    include('add_artwork.php');  
	
} else if ($action == 'add_product') {
    $artist_id = filter_input(INPUT_POST, 'artist_id', 
            FILTER_VALIDATE_INT);
    $code = filter_input(INPUT_POST, 'code', FILTER_SANITIZE_STRING);
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $price = filter_input(INPUT_POST, 'price', FILTER_VALIDATE_FLOAT);
    $size = filter_input(INPUT_POST, 'size', FILTER_SANITIZE_STRING);
    $media = filter_input(INPUT_POST, 'media', FILTER_SANITIZE_STRING);
	//echo $artist_id; echo $code; echo $name; echo $price; echo $size; echo $media; exit;
    if ($artist_id == NULL || $artist_id == FALSE || $code == NULL || $name == NULL || $price == NULL || $price == FALSE || $size == NULL || $media == NULL || $media == FALSE ) {
        $error = "Invalid artist data. Check all fields and try again.";
        include('../errors/error.php');
    } else { 
        $newArt = add_artwork($artist_id, $code, $name, $price, $size, $media);
        header("Location: .?artist_id=$artist_id");
    }
} else if ($action == 'delete_artwork') {
    $art_id = filter_input(INPUT_POST, 'art_id', FILTER_VALIDATE_INT);
    $artist_id = filter_input(INPUT_POST, 'artist_id', FILTER_VALIDATE_INT);
    if ($artist_id == NULL || $artist_id == FALSE ||
            $art_id == NULL || $art_id == FALSE) {
        $error = "Missing or incorrect art id or artist id.";
        include('../errors/error.php');
    } else { 
        delete_artwork($art_id);
        header("Location: .?artist_id=$artist_id");
    }
	
//created an edit_art_form.php page which the form action sends you to this section of the index page
} else if ($action == 'edit_art_form') {
    $artists = get_artist(); //access artist table drop down list of artists
	$artist_id = filter_input(INPUT_POST, 'artist_id', 
            FILTER_VALIDATE_INT);
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
	$size = filter_input(INPUT_POST, 'size', FILTER_SANITIZE_STRING);
    $price = filter_input(INPUT_POST, 'price', FILTER_VALIDATE_FLOAT);
	$code = filter_input(INPUT_POST, 'code', FILTER_SANITIZE_STRING);
     $media = filter_input(INPUT_POST, 'media', FILTER_SANITIZE_STRING);
	$art_id = filter_input(INPUT_POST, 'art_id', FILTER_VALIDATE_INT);
	include('/edit_art_form.php'); 
	//exit;

	//you get here from clicking the edit button on the edit_art_form.php; input action
} else if ($action == 'save_art') {
    $artist_id = filter_input(INPUT_POST, 'artist_id', FILTER_VALIDATE_INT);
    $code = filter_input(INPUT_POST, 'code', FILTER_SANITIZE_STRING);
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $price = filter_input(INPUT_POST, 'price', FILTER_VALIDATE_FLOAT);
    $size = filter_input(INPUT_POST, 'size', FILTER_SANITIZE_STRING);
    $media = filter_input(INPUT_POST, 'media', FILTER_SANITIZE_STRING);
	$art_id = filter_input(INPUT_POST, 'art_id', FILTER_VALIDATE_INT);	
    if ($artist_id == NULL || $artist_id == FALSE || $code == NULL || 
            $name == NULL || $price == NULL || $price == FALSE || 
			$size == NULL || $size == FALSE || $media == NULL || $media == FALSE) {
        $error = "Invalid art data. Check all fields and try again.";
        include('../errors/error.php');
    } else { 
        edit_art_form ($artist_id, $name, $size, $price, $art_id, $code,  $media);
        header("Location: .?artist_id=$artist_id");
    }
}

?>