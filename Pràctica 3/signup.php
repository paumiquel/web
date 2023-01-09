<?php
    require "database.php";

    $message = '';

    if (!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['name']) && !empty($_POST['surname']) && !empty($_POST['usuari'])) {
        $sql ="INSERT INTO marta_database (email, password, name, surname, usuari) VALUES(:email, :password, :name, :surname, :usuari)";
        $stmt = $connect->prepare($sql);
        $stmt ->bindParam(':name', $name);
        $stmt ->bindParam(':surname', $surname);
        $stmt ->bindParam(':email', $_POST['email']);
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $stmt ->bindParam(':password', $password);
        $stmt ->bindParam(':usuari', $usuari);


        if ($stmt ->execute()){
            $message = "L'usuari s'ha creat correctament";
        } else {
            $message = "Sembla que ha fallat alguna cosa";

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

        <h2>SignUp</h2>
        <span> o <a href='login.php'>Login</a>
        <br>

        <?php if (!empty($message)): ?>
            <p><?= $message ?></p>
        <?php endif; ?>
        <br>

        <form action='signup.php' method='post'>
            <input type='text' name='name' class='name' placeholder='Introdueix el teu nom'> 
            <input type='text' name='surname' class='name' placeholder='Introdueix el teu cognom'>
            <input type='text' name='usuari' class='name' placeholder="Introdueix el teu nom d'usuari"> 
            <input type='text' name='email' class='name' placeholder='Introdueix el teu correu'>
            <input type='password' name='password' placeholder='Introdueix la teva contrasenya'>
            <input type='password' name='confirm_password' placeholder='Confirma la teva contrasenya'>
            <input type='submit' class='submit' value='Enviar'>
        </form>
    </body>
</html>