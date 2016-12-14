<?php
function get_products_by_category($category_id) {
    global $db;
    $query = 'SELECT * FROM products
              WHERE products.Categories_idCategory = :category_id
              ORDER BY idProduct';
    $statement = $db->prepare($query);
    $statement->bindValue(":category_id", $category_id);
    $statement->execute();
    $products = $statement->fetchAll();
    $statement->closeCursor();
    return $products;
}

function get_product($product_id) {
    global $db;
    $query = 'SELECT * FROM products
              WHERE idProduct = :product_id';
    $statement = $db->prepare($query);
    $statement->bindValue(":product_id", $product_id);
    $statement->execute();
    $product = $statement->fetch();
    $statement->closeCursor();
    return $product;
}

function delete_product($product_id) {
    global $db;
    $query = 'DELETE FROM products
              WHERE idProduct = :product_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':product_id', $product_id);
    $statement->execute();
    $statement->closeCursor();
}

function add_product($category_id, $code, $name, $price, $discount) {
    global $db;
    $query = 'INSERT INTO products
                 (Categories_idCategory, codeProduct, nameProduct, priceProduct, discountProduct)
              VALUES
                 (:category_id, :code, :name, :price, :discount)';
    $statement = $db->prepare($query);
    $statement->bindValue(':category_id', $category_id);
    $statement->bindValue(':code', $code);
    $statement->bindValue(':name', $name);
    $statement->bindValue(':price', $price);
	$statement->bindValue(':discount', $discount);
    $statement->execute();
    $statement->closeCursor();
}

function save_product_changes($product_id, $category_id, $code, $name, $price, $discount) {
	global $db;
	$query = 'UPDATE products 
                SET Categories_idCategory = :category_id, codeProduct = :code, nameProduct = :name, priceProduct = :price, discountProduct = :discount
                WHERE idProduct = :id';
	$statement = $db->prepare($query);
	$statement->bindValue(':category_id', $category_id);
	$statement->bindValue(':code', $code);
	$statement->bindValue(':name', $name);
	$statement->bindValue(':price', $price);
	$statement->bindValue(':discount', $discount);
	$statement->bindValue(':id', $product_id);
	$statement->execute();
//	$updateResult = $statement->rowCount();
	$statement->closeCursor();
}
?>