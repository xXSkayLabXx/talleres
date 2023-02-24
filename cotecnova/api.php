
    <?php

    //$archivoActual = $_SERVER['PHP_SELF'];
    //header("refresh:5;url=".$archivoActual);


    //manera que hago obtengo un api por get/////<meta http-equiv="Refresh" content="5;url=index.php">
    //echo file_get_contents('https://api.covidtracking.com/v1/us/current.json').PHP_EOL;
    //forma que la estructuro para obtener un adto exacto
    //$json = file_get_contents('https://api.covidtracking.com/v1/us/current.json');
    $json = file_get_contents('../assets/colores.json');
    //echo file_get_contents('../assets/colores.json').PHP_EOL;

 //$data1 = json_decode($json, true
    $data = json_decode($json); 
       /*
//leo el json y accedo al dato  sin conocer la clave
foreach ($data1  as $key => $value){
    $fecha = $data1[$key]["nombreColor"];
    $muertosProbables = $data1[$key]["valorHexadec"];

    echo $fecha." muertos probables ".$muertosProbables;
}
//echo $data['date'].PHP_EOL;*/


    ?>

  
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
           <?php   foreach ($data->arrayColores as $datos) {
            ?> 
            
        <p> El color es: <?=$datos->nombreColor ?>  y su valor hexadecimal es: <?=$datos->valorHexadec; ?>    <div class="square blue" style="  height: 10px;
  width: 10px;
  display: flex;
  align-items: center;
  justify-content: center;
  background-color:<?=$datos->valorHexadec;?>"></div><?php } ?>

        </p>
    
    </body>
    </html>

    
     
    

    
    





