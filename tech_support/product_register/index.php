<?php
// Get your db connection file, be sure it has a new connection to the
// tech support database
require('../model/database.php');

// Get the models needed - work will need to be done in both
require('../model/customer_db.php');
require('../model/registration_db.php');
require('../model/product_db.php');

$error = '';

$action = filter_input(INPUT_POST, 'action');

if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action') ;
    if ($action == NULL) {
        $action = '$email';
    }
    
}
if ($action == '$email') {
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    if ($email == NULL || $email == FALSE){
        $error = "Enter a valid email address.  Make sure to include a @ in your entry.";
        include 'customer_login.php';
    }
    else {
        $customer_first = get_cutomer_by_firstname($email);
        $customer_last = get_cutomer_by_lastname($email);
        $products = get_product();
        $customer_id = get_customerid($email);
        include ('product_register.php');
    }
}
        
 if ($action == 'confirm') {
     $name = filter_input(INPUT_POST, 'product');
     $cutomer_id = filter_input(INPUT_POST, 'customer_id');
     $product_code = get_productID ($name);
     
 if ($customer_id == NULL){
     $error = "You did not enter a valid email. You are not a valid user.  And are therefore unable to register.  Contact the website manager to be added to our database.";
     include 'customer_login.php';
 }
 else (add_registration($customer_id, $product_code);
 include 'confirm_register.php';
 }
        
        
<main>
        <form action="index.php" method="post">
            <label>Name: </label>
            <br>
            <label>Products:</label>
            <select name="product_id">
                <option value="DRAFT10">Draft Manager 1.0</option>
                <option value="DRAFT20">Draft Manager 2.0</option>
                <option value="LEAG10">League Scheduler 1.0</option>
                <option value="LEAGD10">League Scheduler Deluxe 1.0</option>
                <option value="TEAM10">Team Manager Version 1.0</option>
                <option value="TRNY10">Tournament Master Version 1.0</option>
                <option value="TRNY20">Tournament Master Version 2.0</option>
            </select>
            <br>
            <br>
            <input type="submit" name="submit" value="Register Product">
            <input type="hidden" name="customer_id" value="1002">
            <input type="hidden" name="action" value="register_product">
        </form>
</main>
 <?php include '../view/footer.php'; ?>