<?php
    $server = 'mysql-martabentue.alwaysdata.net';
    $username = '286484_marta';
    $password = 'patatabullida02';
    $database = 'martabentue_database';


    try {
        $connect = new PDO("mysql:host=$server;dbname=$database;",$username, $password);
    } catch (PDOException $e) {
        die('Connected failed: '.$e->getMessage());

    }
?>