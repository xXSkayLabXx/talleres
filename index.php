<?php
session_start();

require 'db.php';

if (isset($_SESSION['user_id'])){
    $records = $conexion->prepare('SELECT id, email, password FROM users WHERE id =:id');
    $records->bindParam(':id',$_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if(count($results)> 0 ){
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

<?php require 'partials/header.php'?>
<?php if(!empty($user)): ?>
    <br>Bienvenido. <?=$user['email']?>
    <br>Ingresaste exitosamente
    <a href="logout.php">Logout</a>
    <?php else: ?>
    <h1>Porfavor accede o resgitarte</h1>
    <a href="login.php">Acceder</a> o
    <a href="registro.php">Registrarse</a>
    <?php endif;?>
</body>

</html>