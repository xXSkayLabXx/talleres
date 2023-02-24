<?php
//se inicia la sesion
session_start();


//en caso de que ya este logueado lo redirecciona a la pagina principal
if (isset($_SESSION['user_id'])) {
    header('Location: cotecnova/index.php');
}


//se conecta la db
require 'db.php';

//se verifica que los valores no esten vacios
if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $records = $conexion->prepare('SELECT id, email, password FROM users WHERE email= :email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';
    //verifica si es correcto el usuario 
    if (is_countable($results) > 0 && password_verify($_POST['password'],$results['password'])) {
        //si es correcto lo alamcena en una vairbale de sesion
        $_SESSION['user_id'] = $results['id'];
        header('Location: /login/cotecnova/index.php');
    } else {
        $message = 'Lo siento, las credenciales no coinciden';
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

    <?php require 'partials/header.php' ?>

    <h1>Login</h1>
    <span> o <a href="registro.php">Registrate</a></span>

    <?php if (!empty($message)) :   ?>
        <p><?= $message ?></p>
    <?php endif; ?>

    <form action="login.php" method="post">

        <input type="text" name="email" placeholder="Ingrese su correo">
        <input type="password" name="password" placeholder="Ingrese su contraseña">
        <input type="submit" value="Send">

    </form>
</body>

</html>