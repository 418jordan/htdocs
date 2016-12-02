
<?php session_start(); 
?>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="/movie_manager/main.css" type="text/css">
<title>My Movieator</title>
</head>
<body>
<main>
<header>
		<h1><a href="/movie_manager/movie_me/">Welcome | Movieator</a></h1>
		
                <?php
          include 'meta.php';
                ?>  
	</header>
                
                <?php
                if($usertype == 'user') {
                   echo "<p>Hi $firstname. </p>";
                    }
                    else {
                        echo '<p>Welcome ' .$firstname.', you are now the boss.</p>'.'<p>Check your email messages for any requests and update accordingly.</p>'.'<a href="/movie_manager/movie_me/" title="Go to admin page">Update Content</a>' ;
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
		  <p>&copy; <?php echo date("Y"); ?> My Movieator</p>
	</footer>
</body>

</html>

