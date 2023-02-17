

<?php
//manera que hago obtengo un api por get
echo file_get_contents('https://api.covidtracking.com/v1/us/current.json').PHP_EOL;
//forma que la estructuro para obtener un adto exacto
$json = file_get_contents('https://api.covidtracking.com/v1/us/current.json');

$data = json_decode($json,true);
$data1 = json_decode($json,true);


foreach($data as $datos){
    $positivo = $datos['positive'];
    $estado = $datos['states'];
    echo $positivo." estado ".$estado;
}
echo "<br>";


//leo el json y accedo al dato  sin conocer la clave
foreach ($data1  as $key => $value){
    $fecha = $data1[$key]["date"];
    $muertosProbables = $data1[$key]["positiveIncrease"];

    echo $fecha." muertos probables ".$muertosProbables;
}
//echo $data['date'].PHP_EOL;