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
//var_dump($usuario);


## Ejemplo con la impresión de texto con un dato del arreglo
//echo "<br />"."Mi nombre es ".$usuario['nombre']."<br />";

## Creación de arreglo multidimensional indexado

## Forma 1
/*$alumnos = array(
        array('Juan', 20, 'Mexico'),
        array('Yeison', 30, 'Colombía'),
        array('Amanda', 39, 'Colombía')

);*/

## Forma 2

$alumnos=[
    ['Juan', 20, 'Mexico'],
    ['Yeison', 30, 'Colombía'],
    ['Amanda', 39, 'Colombía']
];

//var_dump($alumnos);

## Impresión de un valor especifico.
//echo $alumnos[1][0];


## Creación de arreglo multidimensional asociativo

$alumnosB = array(
    array('nombre'=>'Yeison', 'edad'=>30, 'pais'=>'Colombia'),
    array('nombre'=>'Alvaro', 'edad'=>40, 'pais'=>'Peru'),
    array('nombre'=> 'Alexys', 'edad'=>38, 'pais'=>'Colombia')
);

//var_dump($alumnosB)."<br />";

## Imprimir valor en ubicación especifica

//echo "<br>".$alumnosB[2]['edad'];


## Agregar una nueva llave o nombre a un arreglo
$alumnosB[1]['Calificación']=9.5;

//var_dump($alumnosB)."<br>";

## Arreglos y sus funciones nativas

$cadena = '';
$arreglo = [];
$videojuevos = ['FIFA','Fortnite','Red Deal', 'Call Of Duty', 'Battelfield','Pokemon', 'GTA','The Sims'];

# saber si un arraglo está vacío - empty
var_dump(empty($arreglo));
echo "<br>";
var_dump(empty($videojuevos));
echo "<br>";

# Saber si un elemento en un arreglo existe
var_dump(isset($videojuevos[50]));
echo "<br>";
var_dump(isset($videojuevos[5]));

# Contar elementos de un arreglo
echo count($videojuevos);

# Antepenultimo elemento
$posicion = count($videojuevos) - 2;
echo $videojuevos[$posicion]." - ";




?>