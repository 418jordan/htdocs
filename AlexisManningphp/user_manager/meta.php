<?php
                $loggedin = $_SESSION['loggedin'];
                $firstName = $_SESSION['firstname'];
                $userType = $_SESSION['usertype'];
                if ($loggedin && ($userType = 'admin')) {
                    echo '<span>Welcome oh friendly ' . $firstName . '</span> |
               <a href="../recipe_manager/" title="Go to admin page"> Admin</a> |
                <a href=".?action=Logout" title="Log out of the site">Logout</a>';
                }

     elseif ($loggedin && ($userType = 'user')) {
                    echo '<span>Welcome '.$firstName.'</span> |
               <a href=".?action=Login" title="Go to login page">User</a> |
                <a href=".?action=Logout" title="Log out of the site">Logout</a>';
                }
                else {
                    echo '<a href= "." title= "Go to the registration page">Register</a> | <a href=".?action=signin" title="Login to the site">Login</a>';
                }

                ?>          
