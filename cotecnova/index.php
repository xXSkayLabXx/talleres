

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<?php
require '../partials/header.php';

?>

<body>


    <h1>Valor de la Conexion con la API</h1>

    <iframe src="api.php" id="reloadIframe" style="border: none; width: auto; height: 800px;"></iframe>


    <script>
        //proceso para que el iframe se recargue cada 5 segundos
        const iframe = document.getElementById("reloadIframe")
        setInterval(() => {
            iframe.src = "api.php";
        }, 5000)
    </script>
</body>

</html>