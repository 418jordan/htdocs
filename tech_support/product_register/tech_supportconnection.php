<?php

function techsupportdb() {
$server = 'localhost';
$dbname= 'movieato_tech_support';
$username = 'movieato_jbisho';
$password = 'jarbin418$';
$dsn = 'mysql:host='.$server.';dbname='.$dbname;
$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

// Now create the actual connection object and assign it to a variable
try {
   $gldb = new PDO($dsn, $username, $password, $options);
//echo 'Connection successful!';}
return $gldb;}
 catch (PDOException $exc) {
   //echo $exc->getTraceAsString();
     echo 'Connection failed';
}

}

