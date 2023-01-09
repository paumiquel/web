<?php

    session_start();
   
    require "database.php";

        if (isset($_SESSION['user_id'])) {
            $records = $connect->prepare('SELECT id, email, password FROM marta_database WHERE id = :id');
            $records->bindParam(':id', $_SESSION['user_id']);
            $records->execute();
            $results = $records->fetch(PDO::FETCH_ASSOC);
           
            $user = null;

            if (count($results) > 0) {
                $user= $results;
                
            } else {
                $message = "Sembla que aquestes dates no coincideixen";
    
            }
        }

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>Benvingut al teu portal</title>
        <link rel='stylesheet' href='stylesheet.css'>
    </head>
    <body>

        <header>
            <a href='index.php'>Inici</a>
        </header>
        
        <?php require 'partials/header.php' ?>

        <?php if (!empty($user)): ?>
            <br>Benvingut/da 
            <br>Has entrat amb èxit
            <a href='logout.php'>Logout</a>
            <br>
            <br>
            <?php
            require 'CV.html';
            ?>
            
        <?php else: ?>
            <h2>Siusplau, entra amb Login o registra't amb SignUp</h2>
            <br>

            <a href='login.php'>Login</a>
            <a href='signup.php'>SignUp</a>
        <?php endif; ?>
    </body>
</html>