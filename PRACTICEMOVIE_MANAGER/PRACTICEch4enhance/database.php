<?php
    $dsn = 'mysql:host=localhost;dbname=lavaeigf_guitar1';
    $username = 'lavaeigf_school';
    $password = 'Gn?Gphu6w.R?';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>