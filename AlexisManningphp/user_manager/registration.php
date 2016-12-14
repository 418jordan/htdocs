<?php session_start(); ?>
<?php require_once ('index.php');
 include ('../view/header.php'); ?>
<title>Registration</title>
<link href="../main.css" rel="stylesheet" type="text/css">

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
            <?php
            if (isset($error)) {
                echo "<p> $error </p>";
            }
            ?>
            </div></div>
            <div class="row">
                <div class="col-md-12">
                    <p>All fields are required.</p>
                </div>
            </div>
            <!--needs an action attribute which takes the info and passes it over to the form which is in a different location. The method tells how to get the information POST and GET.-->
            
            <form action="index.php" method="post" id="add_product_form">
                <fieldset>
                    <label for="firstName">First Name</label>
                    <input type="text" name="firstName" id="firstName" <?php if (isset($first_name)) {
                echo "value='$first_name'";
                } ?>><br>
                    <label for="lastName">Last Name</label>
                    <input type="text" name="lastName" id="lastName" <?php if (isset($last_name)) {
                echo "value='$last_name'";
                } ?>><br>
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" <?php if (isset($email)) {
                echo "value='$email'";
                } ?>><br>
                    <label>Password</label>
                    <input type="password" name="password" id="password"><br>

                    <label>&nbsp;</label>
                    <input type="submit" name="action" value="Register">
                </fieldset>
            </form>
            </div>
        </main>
        <footer>
            <small>For review only</small>
        </footer>
    </body>

</html>
