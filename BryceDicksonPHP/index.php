<?php

$lifetime = 60 * 60 * 24 * 14;  //2 weeks in seconds
session_set_cookie_params($lifetime, './');
session_start();

require_once('./model/database.php');
require_once('./model/product_db.php');
require_once('./model/category_db.php');
require_once('./model/cart.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'list_products';
    }
}

if (empty($_SESSION['dpcart'])) {
    $cart = array();
} else {
    $cart = $_SESSION['dpcart'];
}

switch ($action) {
		
	case 'list_products':
		
		$category_id = filter_input(INPUT_GET, 'category_id', FILTER_VALIDATE_INT);
		
		if ($category_id == NULL || $category_id == FALSE) {
			$category_id = 1;
		}
		
		$category_name = get_category_name($category_id);
		$categories = get_categories();
		$products = get_products_by_category($category_id);
		
		include('./view/product_list.php');
		
		break; 
		
	case 'show_add_form':
		
		$categories = get_categories();
		
		include('./view/product_add.php');
		
		break;
		
	case 'add_product':
		
		$category_id = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);
		$code = filter_input(INPUT_POST, 'code');
		$name = filter_input(INPUT_POST, 'name');
		$price = filter_input(INPUT_POST, 'price');
		$discount = filter_input(INPUT_POST, 'discount');
		
		if ($category_id == NULL || $category_id == FALSE || $code == NULL || 
				$name == NULL || $price == NULL || $price == FALSE || $discount == NULL || $discount == FALSE) {
			$error = "Invalid product data. Check all fields and try again.";
			$categories = get_categories();
			include('./view/product_add.php');
		} else { 
			add_product($category_id, $code, $name, $price, $discount);
			header("Location: .?category_id=$category_id");
		}
		
		break;
		
	case 'edit_product':
		
		$product_id = filter_input(INPUT_POST, 'product_id', FILTER_VALIDATE_INT);
		$product = get_product($product_id);
		$category_id = $product["Categories_idCategory"];
		$code = $product["codeProduct"];
		$name = $product["nameProduct"];
		$price = $product["priceProduct"];
		$discount = $product["discountProduct"];
		
		$categories = get_categories();
		
		include('./view/product_edit.php');
		
		break;
		
	case 'save_product_changes':
		
		$category_id = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);
		$code = filter_input(INPUT_POST, 'code');
		$name = filter_input(INPUT_POST, 'name');
		$price = filter_input(INPUT_POST, 'price');
		$discount  = filter_input(INPUT_POST, 'discount');
		$product_id = filter_input(INPUT_POST, 'product_id', FILTER_VALIDATE_INT);
		

		if ($category_id == NULL || $category_id == FALSE || $code == NULL || 
			$name == NULL || $price == NULL || $price == FALSE || $discount == NULL || $discount == FALSE) {
			$error = "Invalid product data. Check all fields and try again.";
			include('./view/product_edit.php');
		} else { 
			save_product_changes($product_id, $category_id, $code, $name, $price, $discount);
			header("Location: .?category_id=$category_id");
		}
		
		break;
		
	case 'delete_product':
		
		$product_id = filter_input(INPUT_POST, 'product_id', FILTER_VALIDATE_INT);
		$category_id = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);
		
		if ($category_id == NULL || $category_id == FALSE ||
				$product_id == NULL || $product_id == FALSE) {
			$error = "Missing or incorrect product id or category id.";
			include('./view/product_list.php');
		} else { 
			delete_product($product_id);
			header("Location: .?category_id=$category_id");
		}
		
		break;
		
// Category Actions		
	
	case 'list_categories':
		
		$categories = get_categories();
		
		include('./view/category_list.php');
		
		break;
		
	case 'add_category':
		
		$category_name = filter_input(INPUT_POST, 'category_name');
		
		if ($category_name == NULL) {
			$error = "Invalid category name. Check name and try again.";
			$categories = get_categories();
			include('./view/category_list.php');
		} else {
			add_category($category_name);
			header('Location: .?action=list_categories');
		}
		
		break;
		
	case 'edit_category':
		
		$category_id = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);				
		$category = get_category($category_id);
		$category_name = $category['nameCategory'];
			
		include("./view/category_edit.php");
		
		break;
		
	case 'save_category_changes':
		
		$category_id = filter_input(INPUT_POST, 'category_id');
		$category_name = filter_input(INPUT_POST, 'category_name');
		
		if ($category_name == NULL) {
			$error = "Invalid category name. Check name and try again.";
			$categories = get_categories();
			include('./view/category_list.php');
		} else {
			save_category_changes($category_id, $category_name);
			header('Location: .?action=list_categories');
		}
		
		break;

	case 'delete_category':
		
		$category_id = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);
		
		delete_category($category_id);
		header('Location: .?action=list_categories');
		
		break;
	
//Cart actions
	
    case 'add':
	
        $key = filter_input(INPUT_POST, 'product_id');
		
        add_item($cart, $key);
        $_SESSION['dpcart'] = $cart;
        
		include('./view/cart_view.php');
       
		break;
		
    case 'update':
	
        $new_qty_list = filter_input(INPUT_POST, 'newqty', 
                FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);
        foreach($new_qty_list as $key => $qty) {
            if ($cart[$key]['qty'] != $qty) {
                update_item($cart, $key, $qty);
            }
        }
        $_SESSION['dpcart'] = $cart;
       
		include('./view/cart_view.php');
        
		break;
		
    case 'show_cart':
       
		include('./view/cart_view.php');
       
		break;
		
    case 'show_add_item':
	
		header("Location: .?category_id=$category_id");
        
		break;
		
    case 'empty_cart':
	
        $cart = array();
        $_SESSION['dpcart'] = $cart;
		
		include('./view/cart_view.php');
		
		break;
		
}

?>