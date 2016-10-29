<?php
  $dsn = 'mysql:host=localhost;dbname=mysharmt_webme1a';
    $username = 'mysharmt_nowme';
    $password = ']2xkk.x+B,9i';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
?>