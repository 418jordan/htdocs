<?php session_start(); 
$loggedin = $_SESSION['loggedin'];
$firstname = $_SESSION['firstname'];
$usertype = $_SESSION['usertype'];
?>
<!doctype html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Welcome User</title>
        <link href="../main.css" rel="stylesheet" type="text/css">
</head>

<body>
	<header>
            Recipe Express Choo
		
	</header>
    <div id="tools">
                <?php
          include 'meta.php';
                ?>  
                </div>
	<main>
		<h1>Welcome</h1>
                
                <?php
                if($usertype == 'user') {
                   echo "<p>Hi $firstname. </p>";
                    }
                    else if($usertype == 'admin'){
                        echo '<p>Oh mighty ' .$firstname.', I await your command!</p>'.'<p>Check your email messages for any requests and update accordingly.</p>'.'<span style="margin-left: 20px;"><a href="../recipe_manager/?action=admin" title="Go to admin page">Update Content</a></span>' ;
                    }
                    else {
                        echo '<p>Please register as a user '.$firstname.', </p>'.'<a href="register.php>Register</a>';
                    }
                ?>
<!--		<p>All fields are required.</p>-->
                <!--needs an action attribute which takes the info and passes it over to the form which is in a different location. The method tells how to get the information POST and GET.-->
<!--                <form action="index.php" method="post">
                    <fieldset>
				<label for="email">Email</label>
                                <input type="email" name="email" id="email" >
                                <label>Password</label>
                                <input type="password" name="password" id="password">
                               
				<label>&nbsp;</label>
				<input type="submit" name="action" value="Login">
			</fieldset>
		</form>-->
	</main>
	<footer>
		<small>For review only</small>
	</footer>
</body>

</html>

