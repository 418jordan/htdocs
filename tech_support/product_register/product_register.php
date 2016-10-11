
<main>

    <h2>Register Product</h2>
    <?php if (isset($message)) : ?>
        <p><?php echo $message; ?></p>
    <?php
    else:
        // Build the product registration form
        ?>


<?php endif; ?>
<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>SportsPro Technical Support</title>
    <link rel="stylesheet" type="text/css"
          href="/tech_support/main.css">
</head>

<!-- the body section -->
<body>
<header>
    <h1>SportsPro Technical Support</h1>
    <p>Sports management software for the sports enthusiast</p>
    <nav>
        <ul>
            <li><a href="/tech_support/index.php">Home</a></li>
        </ul>
    </nav>
</header>


    <h2>Customer Login</h2>
    <p>You must login before you can register a product.</p>
        
    <form action="index.php" method="post">        
        <label>Email:</label>
        <input type="text" name="email">
        <input type="hidden" name="action" value="login_submit">
        <input type="submit" name="login" value="Login">
    </form>
    <br/>
</main>
<?php include '../view/footer.php'; ?>

