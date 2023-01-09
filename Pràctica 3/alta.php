<?php

    session_start();

    if (isset($_SESSION['user_id'])) {
        header('Location: /login_signup');
    }

    require "database.php";
        if(isset(~$_POST['name'])){
            $name = $_POST['name'];
            $password = $_POST['password'];
            $email = $_POST['email'];

            $field = array();

            if($name == ""){
                array_push($field, "El camp Nom no pot estar buit");

            if($password == "") || strlen($password) <6{
                array_push($field, "El camp Password no pot estar buit ni tenir menys de 6 caràcters");
            
            if($email == "") || strpos($email, "@") === false{
                array_push($field, "Siusplau, introdueix un Email vàlid");

            
            }
        }
    ?>
