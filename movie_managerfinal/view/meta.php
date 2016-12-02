<?php
                $loggedin = $_SESSION['loggedin'];
                $firstname = $_SESSION['firstname'];
                $usertype = $_SESSION['usertype'];
                if ($loggedin && ($usertype == 'admin')) {
                    echo '<span>Welcome back boss ' . $firstname . '</span> |
                <a href="/view/logout.php" title="Log out of the site">Logout</a>';
                }

     elseif ($loggedin && ($usertype == 'user')) {
                    echo '<span>Welcome '.$firstname.'</span> |
               <a href=".?action=Login" title="Go to login page">User</a> |
                <a href="/view/logout.php" title="Log out of the site">Logout</a>';
                }
                else {
                    echo '<a href= "/view/registration.php" title= "Go to the registration page">Register</a> | <a href=".?action=signin" title="Login to the site">Login</a>';
                }

                ?>          
