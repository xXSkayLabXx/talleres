<?php
//se conecta la sesion
require 'db.php';

$message = '';
//se verifica que los valores no esten vacios
if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
    $stmt = $conexion->prepare($sql);
    $stmt->bindParam(':email', $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);


    if ($stmt->execute()) {
        $message = 'Ha sido creado un usuario satisfactoriamente';
    } else {
        $message = 'Lo siento, ha ocurrido un error creando su contraseña';
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrate</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <?php require 'partials/header.php' ?>
    <?php if (!empty($message)) : ?>
        <p><?= $message ?></p>
    <?php endif; ?>

    <h1>Registrate</h1>
    <span> o 
    <div class="buttons-container">
            
                <a href="login.php"><button class="button-arounder">Inicia Sesion</button></a>
        </div>
    
    
    </span>
    <form action="registro.php" method="post">
        <input type="text" name="email" placeholder="Ingrese su correo">
        <input type="password" name="password" placeholder="Ingrese su contraseña">
        <input type="password" name="confirmpassword" placeholder="Confirme su contraseña">
        <input type="submit" value="Send">
    </form>

</body>

</html>