<?php
$dsn = 'mysql:localhost;dbname=movieato_text_support';
    $username = 'movieato_jbisho';
    $password = 'jarbin418$';
    
    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        exit();
    }