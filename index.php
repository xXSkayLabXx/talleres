<?php
session_start();

require 'db.php';

if (isset($_SESSION['user_id'])) {
    $records = $conexion->prepare('SELECT id, email, password FROM users WHERE id =:id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
        $user = $results;
    }
}

?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido al Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <?php require 'partials/header.php' ?>
    <?php if (!empty($user)) : ?>
        <br>Bienvenido. <?= $user['email'] ?>
        <br>Ingresaste exitosamente
        <div class="buttons-container">
            <a href="cotecnova/index.php">
                <button class="button-arounder">Api</button>
            </a>
        </div>

        <a href="logout.php">Logout</a>
    <?php else : ?>
        <h1>Porfavor accede o registrate</h1>

        <div class="buttons-container">
            <a href="login.php"><button class="button-arounder">Acceder</button></a>
        </div>
        o

        <div class="btn" >
            <a href="registro.php">
                <button class="btn-s">
                    Registrarse
                    <span class="first"></span>
                    <span class="second"></span>
                    <span class="third"></span>
                    <span class="fourth"></span>
                </button>
            </a>
        </div>
    <?php endif; ?>
</body>

</html>