
    <?php

//$archivoActual = $_SERVER['PHP_SELF'];
//header("refresh:5;url=".$archivoActual);

    
//manera que hago obtengo un api por get/////<meta http-equiv="Refresh" content="5;url=index.php">
//echo file_get_contents('https://api.covidtracking.com/v1/us/current.json').PHP_EOL;
//forma que la estructuro para obtener un adto exacto
//$json = file_get_contents('https://api.covidtracking.com/v1/us/current.json');
$json = file_get_contents('../assets/colores.json');
//echo file_get_contents('../assets/colores.json').PHP_EOL;


$data = json_decode($json);
$data1 = json_decode($json,true);

foreach($data->arrayColores as $datos){
 echo " el color es : ".$datos->nombreColor." y su valor hexadecimal es: ".$datos->valorHexadec."<br>";
}
echo "<br>";

/*
//leo el json y accedo al dato  sin conocer la clave
foreach ($data1  as $key => $value){
    $fecha = $data1[$key]["nombreColor"];
    $muertosProbables = $data1[$key]["valorHexadec"];

    echo $fecha." muertos probables ".$muertosProbables;
}
//echo $data['date'].PHP_EOL;*/


?>



