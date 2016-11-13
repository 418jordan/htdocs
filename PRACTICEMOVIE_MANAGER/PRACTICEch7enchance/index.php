<?php
	
	$action = filter_input(INPUT_POST, 'action');
	
	$investment = '10000';
    $interest_rate = '5';
    $years = '5';
	$monthly =isset($_POST['monthly']);
	
switch ($action) {
	case 'display_results';
	
		// get the data from the form
		$investment = filter_input(INPUT_POST, 'investment', 
				FILTER_VALIDATE_FLOAT);
		$interest_rate = filter_input(INPUT_POST, 'interest_rate', 
				FILTER_VALIDATE_FLOAT);
		$years = filter_input(INPUT_POST, 'years', 
				FILTER_VALIDATE_INT);

		// validate investment
		if ($investment === FALSE ) {
			$error_message = 'Investment must be a valid number.'; 
		} else if ( $investment <= 0 ) {
			$error_message = 'Investment must be greater than zero.'; 
		// validate interest rate
		} else if ( $interest_rate === FALSE )  {
			$error_message = 'Interest rate must be a valid number.'; 
		} else if ( $interest_rate <= 0 ) {
			$error_message = 'Interest rate must be greater than zero.'; 
		// validate years
		} else if ( $years === FALSE ) {
			$error_message = 'Years must be a valid whole number.';
		} else if ( $years <= 0 ) {
			$error_message = 'Years must be greater than zero.';
		} else if ( $years > 30 ) {
			$error_message = 'Years must be less than 31.';
		// set error message to empty string if no invalid entries
		} else {
			$error_message = ''; 
		}

		// if an error message exists, go to the index page
		if ($error_message != '') {
			include('./view/fv_form.php');
			exit();
		}
		
		if ($monthly === TRUE ) {
			$future_value = $investment;
			$monthly_confirm = 'Yes';
				//php don't use ^ for math you dork
				// entire thing could have been done with $future_value  = ($future_value * pow((1+($interest_rate * .01) / 12),(12*$years)); but loops are a thing...
			
				for ($i = 1; $i <= $years; $i++) {
					$future_value  = ($future_value * pow((1+($interest_rate * .01) / 12),12));
			}
		} else {
			$monthly_confirm = 'No';
			$future_value = $investment;
				for ($i = 1; $i <= $years; $i++) {
					$future_value = ($future_value + ($future_value * $interest_rate *.01));
			}
		}

		// calculate the future value
		/* $future_value = $investment;
		for ($i = 1; $i <= $years; $i++) {
			$future_value = ($future_value + ($future_value * $interest_rate *.01));
		} */

		// apply currency and percent formatting
		$investment_f = '$'.number_format($investment, 2);
		$yearly_rate_f = $interest_rate.'%';
		$future_value_f = '$'.number_format($future_value, 2);
		
		// var_dump(get_defined_vars());
		
		include('./view/display_results.php');
		
		break;
	case '';
	
		// var_dump(get_defined_vars());
	
		include('./view/fv_form.php');
		
		break;
}

?>