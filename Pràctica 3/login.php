<?php

    session_start();

    if (isset($_SESSION['user_id'])) {
        header('Location: /login_signup');
    }

    require "database.php";

    $message = '';

    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $records = $connect->prepare('SELECT id, email, password FROM marta_database WHERE email=:email');
        $records->bindParam(':email', $_POST['email']);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);

        $message = '';

        if (count($results)> 0 && password_verify($_POST['password'], $results['password'])){
            $_SESSION['user_id'] = $results['id'];
            header('Location: /login_signup');
        } else {
            $message = "Sembla que les dades no coincideixen";

        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>Login</title>
        <link rel='stylesheet' href='stylesheet.css'>
    </head>
    <body>

        <header>
            <a href='index.php'>Inici</a>
        </header>

        <h2>Login</h2>
        <span> o <a href='signup.php'>SignUp</a>
        <br>

        <?php if (!empty($message)): ?>
            <p><?= $message ?></p>
        <?php endif; ?>
        
        <br>

        <form action='login.php' method='post'>
            <input type='text' name='email' class='name' placeholder='Introdueix el teu correu'>
            <input type='password' name='password' placeholder='Introdueix la teva contrasenya'>
            <button type='submit' class='submit' href='CV.html'> Enviar </button>
        </form>
    </body>
</html>