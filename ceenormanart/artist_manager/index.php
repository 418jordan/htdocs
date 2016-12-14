<?php
require_once('../model/database.php');
require_once('../model/art_work_db.php');
require_once ('../model/artist_db.php');

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
    $artists = get_artist();
    $artist_name = get_artist_name($artist_id);
    $artWork = get_artwork_by_artist($artist_id);
    include('product_list.php');
	exit;
	
} else if ($action == 'view_art') {
    $art_id = filter_input(INPUT_GET, 'art_id', 
            FILTER_VALIDATE_INT);   
    if ($art_id == NULL || $art_id == FALSE) {
        $error = 'Missing or incorrect art id.';
        include('../errors/error.php');
    } else {
        $artists = get_artist();
        $art = get_artwork($art_id);

        // Get art data
        $code = $art['artCode'];
        $name = $art['artName'];
        $list_price = $art['artPrice'];

        // Calculate discounts
        $discount_percent = 10;  // 10% off for all web orders
        $discount_amount = round($list_price * ($discount_percent/100.0), 2);
        $unit_price = $list_price - $discount_amount;

        // Format the calculations
        $discount_amount_f = number_format($discount_amount, 2);
        $unit_price_f = number_format($unit_price, 2);

        // Get image URL and alternate text
        $image_filename = '../images/' . $code . '.jpg';
        $image_alt = 'Image: ' . $code . '.jpg';

        include('art_view.php');
		exit;
    }
}
?>