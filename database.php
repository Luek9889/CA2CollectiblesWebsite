<?php
    $dsn = 'mysql:host=localhost;dbname=wiki';
    $username = 'LukeP';
    $password = '12345';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>