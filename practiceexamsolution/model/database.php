<?php
    $dsn = 'mysql:host=localhost;dbname=courses';
    $username = 'movieato_jbisho';
    $password = 'jarbin418$';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        //include('database_error.php');
        echo "Error: $error_message";
        exit();
    }
?>