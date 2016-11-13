
<!DOCTYPE html>
<html>
<head>
    <title>Future Value Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css"/>
</head>

<body>
    <main>
    <h1>Future Value Calculator</h1>
	
	<p style="color:red"><?php if (isset($error_message)) echo $error_message; ?></p>
    
    <form action="." method="post">
	<input type="hidden" name="action" value="display_results">

        <div id="data">
            <label>Investment Amount:</label>
            <select name="investment">
			<?php for($v = 10000; $v <= 50000; $v += 5000) : ?>
				<option value="<?php echo $v; ?>" >
					<?php echo $v; ?>
				</option>
			<?php endfor; ?>
			</select>
			
			<br>

            <label>Yearly Interest Rate:</label>
            <select name="interest_rate">
			<?php for ($v = 4; $v <= 12; $v += .5) : ?>
				<option value="<?php echo $v; ?>">
					<?php echo $v; ?>
				</option>
			<?php endfor; ?>
			</select>	   
		   <br>

            <label>Number of Years:</label>
            <input type="text" name="years"
                   value="<?php echo $years; ?>"/><br>
			
			<label>&nbsp;</label>
			<input type="checkbox" name="monthly">Compound Interest Monthly
			
			<br>
		
		</div>

        <div id="buttons">
            <label>&nbsp;</label>
            <input type="submit" value="Calculate"/><br>
        </div>

    </form>
    </main>
</body>
</html>