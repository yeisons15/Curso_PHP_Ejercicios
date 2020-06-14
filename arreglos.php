<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php

#Arreglos

// Los arreglos se declaran de las siguientes 2 formas
$numeros = [];
$numeros = array();

// Para imprimir los arreglos usamos la siguente instrucción.

//var_dump($numeros);
//print_r($numeros);


$dias = ['Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes'];

//var_dump($dias);
//print_r("_____");
//print_r($dias);


## Imprimir ubicación especifica del arreglo

//echo $dias[2];

## Agregar un nuevo valor a un arreglo
 //$dias []= 'Sábado';

 //var_dump($dias);

 ## Agregar un valor en posición determinada

 $dias [8]= 'Sábado';
 $dias [10]= 'Domingo';

//var_dump($dias);
//echo("<br/>");
//print_r($dias);


$usuario = array('nombre'=>'Yeison', 'edad'=>30, 'lenguaje'=>'PHP');
var_dump($usuario);


## Ejemplo con la impresión de texto con un dato del arreglo
echo "<br />"."Mi nombre es ".$usuario['nombre']."<br />";

?>