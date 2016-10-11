<?php
$dsn = 'mysql:localhost;dbname=movieato_movies';
    $username = 'movieato_test';
    $password = 'jarbin418$';
    
    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        exit();
    }