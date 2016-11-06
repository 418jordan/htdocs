<!doctype html>
<html>

    <head>
        <meta charset="UTF-8">
        <title>Registration | The News - Everything local in news</title>
        <meta name="viewport" content="width=device-width">
        <link href="css/newspaper.css" type="text/css" rel="stylesheet" media="screen">
    </head>

    <body>
        <div id="wrapper">
            <header id="main-header">
                <h1>The News</h1>
                <p id="tagline">Everything local in news</p>
            </header>
            <nav id="main-nav">
                <ul>
                    <li><a href="/" title="Visit The News homepage">Home</a></li>
                </ul>
            </nav>


            <main>
                <h1>Registration</h1>
                <p>Please register prior to placing your advertisement. All form fields are required.</p>

                <!--                <form method="post" action="." id="regform">
                                    <fieldset>
                                        <label for="firstname" class="title">First name:</label>
                                        <input type="text" name="firstname" id="firstname">
                                        <label for="lastname" class="title">Last name:</label>
                                        <input type="text" name="lastname" id="lastname">
                                        <label for="email" class="title">Email:</label>
                                        <input type="email" name="email" id="email">
                                        <label for="phone" class="title">Phone:</label>
                                        <input type="tel" name="phone" id="phone">
                                        <input type="submit" name="registration" class="button" value="Register">
                                    </fieldset>
                                </form>-->

                <form method="post" action="." id="regform">
                    <fieldset>
                        <label for="firstname" class="title">First name:</label>
                        <input type="text" name="firstname" id="firstname" <?php if(isset($firstname)){ echo "value='$firstname'";}  ?>>
                        <label for="lastname" class="title">Last name:</label>
                        <input type="text" name="lastname" id="lastname" <?php if(isset($lastname)){ echo "value='$lastname'";} ?>>
                        <label for="email" class="title">Email:</label>
                        <input type="email" name="email" id="email" <?php if(isset($email)){ echo "value='$email'";}  ?>>
                        <label for="phone" class="title">Phone:</label>
                        <input type="tel" name="phone" id="phone" <?php if(isset($phone)){ echo "value='$phone'";} ?>>
                        <input type="submit" name="action" class="button" value="Register">
                    </fieldset>
                </form>
            </main>

            <footer id="main-footer">
                <small>&copy; 2016 - The News<br>
                    101 Main Street, Springfield, ID 83277<br>
                    Phone: (208) 555-5555</small>
            </footer>
        </div>


    </body>

</html>
