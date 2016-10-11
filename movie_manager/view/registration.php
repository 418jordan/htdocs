<?php session_start();
?>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="/movie_manager/main.css" type="text/css">
<title>My Movieator</title>
</head>
<body>

        <header>
            <div id="tools">
                <?php
          include 'meta.php';

                ?>          
            </div>
        </header>
        <main>
             <div class="container">
                <div class="row">
                <div class="col-md-12">
                    <h1>Registration</h1>
                  <?php   if (isset($error)) {
                echo "<p> $error </p>";
            }
            ?>
                 
                           <p>All fields are required.</p> 
                     </div>
                 </div>
                 
              
            <!--needs an action attribute which takes the info and passes it over to the form which is in a different location. The method tells how to get the information POST and GET.-->
            <form action="." method="post" >
                 <div class="form-group">
                    <label for="firstName" class="col-sm-2 control-label">First Name</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" name="firstName" id="firstName" <?php if (isset($first_name)) {
                echo "value='$first_name'";
            } ?>>
                    </div></div>
                <div class="form-group">                   
                    <label for="lastName" class="col-sm-2 control-label">Last Name</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" id="lastName" name="lastName"  <?php if (isset($last_name)) {
                echo "value='$last_name'";
            } ?>>
                </div></div>
                <div class="form-group">
                <label for="email" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-9">
                    <input type="email" class="form-control" id="email" name="email" placeholder="brownith@example.com"
                   <?php
                if (isset($email)) {
                    echo "value='$email'";
                }
                ?>>
                </div> </div>
            <div class="form-group">
                <label for="password" class="col-sm-2 control-label">Password</label>
                <div class="col-sm-9">
                    <input type="password" class="form-control" name="password" id="password" placeholder="alfj;dalksj789!">
                </div> </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-9">
                    <button type="submit" name="action" class="btn btn-primary btn-lg" value="Register">Register</button>
                </div>
            </div>
        </form>
             </div>
        </main>
        <footer>
            <p>&copy; <?php echo date("Y"); ?>My Movieator</p>
        </footer>
    </body>

</html>
