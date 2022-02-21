<?php
    $dsn = 'mysql:host=localhost;dbname=wiki';
    $username = 'root';
    //$password = '1234';

    try {
        $db = new PDO($dsn, $username);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>