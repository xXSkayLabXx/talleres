<?php
error_reporting(E_ALL & ~E_DEPRECATED & ~E_STRICT & ~E_WARNING & ~E_NOTICE);
require './resul_suma1.php';
require './resul_sum2.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>suma</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <main>
        <form id="formulario" name="sumar" method="POST">
            <label for="">Numero uno:
                <input type="text" id="n1" name="n1">
            </label> <br>
            <label for="">Numero dos:
                <input type="text" id="n2" name="n2">
            </label>
            <br>
            <input id="btn-sumar" type="submit" name="sumar" value="Sumar">
        </form>

        <span>El resultado de la suma es: <?= $res?> </span> <br>
        <a href="../login.php">
                <button class="button-arounder">atras</button>
        </a>
    </main>





    <script >
        let formulario = document.getElementById('formulario');
        formulario.addEventListener('submit', e=>{
            e.preventDefault();

            let datos = new FormData(formulario);
            peticion = {
                method:'POST',
                body:datos,
            }
            fetch('./resul_suma1.php',peticion)
            .then(respuesta => respuesta.json())
            .then(respuesta =>{

            }).catch(error =>console.log('error', error) ) 
        })
    </script>
        <script >
        let formulario2 = document.getElementById('formulario');
        formulario.addEventListener('submit', e=>{
            e.preventDefault();

            let datos = new FormData(formulario2);
            peticion = {
                method:'POST',
                body:datos,
            }
            fetch('./resul_sum2.php',peticion)
            .then(respuesta => respuesta.json())
            .then(respuesta =>{

            }).catch(error =>console.log('error', error) ) 
        })
    </script>
</body>
</html>