<?php
session_start();
?>
<link rel="stylesheet" href="/movie_manager/main.css" type="text/css">
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
            <h1>Login</h1>
            <?php
            if (isset($message)) {
                echo "<p> $message </p>";
            }
            ?>
        </div>   </div>
      <div class="row">
                     <div class="col-md-12">
                           <p>All fields are required.</p> 
                     </div></div>

    <!--needs an action attribute which takes the info and passes it over to the form which is in a different location. The method tells how to get the information POST and GET.-->
    <form action="index.php" method="post">
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
                <input type="password" class="form-control" id="password" name="password" placeholder="alfj;dalksj789!">
            </div> </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" name="action" class="btn btn-primary btn-lg" value="Login">Login</button>
            </div>
        </div>
    </form>
</div>
</main>
<div class="row">
    <div class="col-md-12">
        <h3>Not a member? Join us <a href="/view/registration.php" class="right-align" title="Go to the registration page">Register</a></h3>
    </div></div>
</body>
</html>

