<?php include '../view/header.php'; ?>

<main>

    <h2>Customer Login</h2>
    <p>You must login before you can register a product.</p>
    <!-- Build a login form similar to the one shown in the exam directions -->
     <form action="index.php" method="post">        
        <label>Email:</label>
        <input type="text" name="email">
        <input type="hidden" name="action" value="login_submit">
        <input type="submit" name="login" value="Login">
    </form>
    <br/>

</main>
<?php include '../view/footer.php'; ?>

//attempt to pass control from this page to the product_register.php page's
<?php if ($email) {
        include ('http://movieators.com/tech_support/product_register/product_register.php');
}
else {exit('unable to connect.');}
