<?php
  $dsn = 'mysql:host=localhost;dbname=movieato_movies';
    $username = 'movieato_jbisho';
    $password = 'jarbin418$';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
?>