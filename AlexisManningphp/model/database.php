<?php
  $dsn = 'mysql:host=localhost;dbname=citalexi_recipe';
    $username = 'citalexi_iClient';
    $password = 'Lavendar941';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
?>