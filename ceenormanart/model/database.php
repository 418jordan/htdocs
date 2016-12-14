<?php
    $dsn = 'mysql:host=localhost;dbname=ceenorma_artwork';
    $username = 'ceenorma_root';
    $password = 'pa55word';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>