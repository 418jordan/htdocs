<?php
// Get your database connection
require_once 'database.php';

// Determine if the form on the update_process.php page has been 
// submitted
// If so, process the data
// If not, send the site visitor back to the index.php file

if (filter_input(INPUT_POST, 'submit') === 'Save Changes') {
	
// Capture and filter the inputs
$categoryid = filter_input(INPUT_POST, 'category');
$productname = filter_input(INPUT_POST, 'name');
$productcode = filter_input(INPUT_POST, 'code');
$listprice = filter_input(INPUT_POST, 'price');
$id = filter_input(INPUT_POST, 'id');

  
// Check the values, set an error if values are empty
//echo "$categoryID, $productCode, $productName, $listPrice";
//exit;
if ($categoryid == null || $categoryid == false || /* $categoryid >= 4  ||*/
        $productcode == null || $productname == null || $listprice == null || $listprice == false) {
    $error = "Invalid product data. Check all fields and try again.";
    include('error.php');
	exit;
}

// Check for errors, if found redirect to the 
// update_process.php page for repair and resubmission
/* if (!empty($error)) {
    include 'edit_product.php';
    exit;
} */

// Use a prepared statement to update the data to the visitors.registration table
$sql = 'UPDATE products 
	SET categoryID=:categoryid, productCode=:productcode, productName=:productname, listPrice=:listprice
	WHERE productID=:id';
$statement=$db->prepare($sql);
$statement->bindValue(':categoryid', $categoryid);
$statement->bindValue(':productcode', $productcode);
$statement->bindValue(':productname', $productname);
$statement->bindValue(':listprice', $listprice);
$statement->bindValue(':id', $id);
$statement->execute();
$updateResult = $statement->rowCount();
$statement->closeCursor();

// Test if the update worked, if yes display a confirmation, 
// if not set a failure message
// The message should be shown in the main element below
  if ($updateResult) {
    $message = 'The update worked.';
  } else {
    $message = 'The update failed.';
  }
} /* else {
  // Redirect to the index page if the form in the update_proccess.php
  // page was not submitted and the data sent to this page
  header('location: index.php');
  exit;
} */
?>
<!doctype html>
<html>

    <head>
		<title>My Guitar Shop</title>
		<link rel="stylesheet" type="text/css" href="main.css" />
	</head>

    <body>
        <header>
			<h1>Product Manager</h1>
		</header>
        <main>
            <?php
				echo '<p>' . $message . '</p>';
            ?>
            <p>
				<a href="index.php">View Product List</a>
			</p>
        </main>
        <footer>
            <p>&copy; <?php echo date("Y"); ?> My Guitar Shop, Inc.</p>
        </footer>
    </body>

</html>
