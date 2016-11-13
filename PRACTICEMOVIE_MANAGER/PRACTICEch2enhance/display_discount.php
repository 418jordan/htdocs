<?php
    $product_description = filter_input(INPUT_POST, 'product_description');
    $list_price = filter_input(INPUT_POST, 'list_price', FILTER_VALIDATE_FLOAT);
    $discount_percent = filter_input(INPUT_POST, 'discount_percent', FILTER_VALIDATE_FLOAT);

        $discount = $list_price * $discount_percent * .01;
        $discount_price = $list_price - $discount;

        $list_price_f = "$".number_format($list_price, 2);
        $discount_percent_f = $discount_percent."%";
        $discount_f = "$".number_format($discount,2);
        $discount_price_f = "$".number_format($discount_price, 2);
		
        //enhancement validation part
        
		if ($product_description == "") {
        $error_message = 'Product description cannot be empty.'; 
		
	  // validate list-price
        
		} else if ( $list_price === FALSE )  {
            $error_message = 'List price must be a valid number.'; 
        } else if ( $list_price <= 0) {
            $error_message = 'List price must be greater than zero .';
        // validate discount
        } else if ( $discount_percent === FALSE ) {
            $error_message = 'Discount percent must be a valid number.';
        } else if ( $discount_percent <= 0 ) {
            $error_message = 'Discount percent must be greater than zero.';
        } else if ( $discount_percent >= 101 ) {
            $error_message = 'Discount percent must be less than 100.';
        // set error message to empty string if no invalid entries
        } else {
            $error_message = ''; }

    // if an error message exists, go to the index page
    if ($error_message != '') {
        include('index.php');
        exit();
    }
        /*
        //Product validation
        
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			if (empty($_POST["name"])) {
				$nameErr = "Name is required";
			} else {
				$name = test_input($_POST["name"]);
				// check if name only contains letters and whitespace
					if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
						$nameErr = "Only letters and white space allowed";
					}
		}
		*/
		
        //error message
	/*	if ($error_message != '') {
			include('index.php');
			exit();
			}
	*/	
		//enhancement tax part
		$tax_rate = .08;
		$tax_amount = $discount_price * $tax_rate;
		
		$tax_amount_f = "$".number_format($tax_amount, 2);
		
	?>
<!DOCTYPE html>
<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <main>
        <h1>Product Discount Calculator</h1>

        <label>Product Description:</label>
        <span><?php echo htmlspecialchars($product_description); ?></span><br>

        <label>List Price:</label>
        <span><?php echo htmlspecialchars($list_price_f); ?></span><br>

        <label>Standard Discount:</label>
        <span><?php echo htmlspecialchars($discount_percent_f); ?></span><br>

        <label>Discount Amount:</label>
        <span><?php echo $discount_f; ?></span><br>

        <label>Discount Price:</label>
        <span><?php echo $discount_price_f; ?></span><br>
		
        <br>
		
        <label>Sales Tax Rate:</label>
        <span><?php echo $tax_rate * 100 ."%";  ?></span><br>
		
        <label>Sales Tax Amount</label>
        <span><?php echo $tax_amount_f; ?><span><br>
		
    </main>
</body>
</html>