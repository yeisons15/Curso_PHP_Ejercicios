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
//$numeros = [];
//$numeros = array();

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
/*var_dump(empty($arreglo));
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
*/

## Ordenar arreglo alfabeticamente || Algo a considerar es que el arreglo pierde su indice al hacerlo de esta forma
//sort($videojuevos);
//var_dump($videojuevos);
//echo "<br>";

## Ordenar arreglo de manera inversa sin perder el indice
//asort($videojuevos);
//var_dump($videojuevos);

## Ordernar de manera inversa (mayor a menor, o Z-A) || Algo a considerar es que el arreglo pierde su indice al hacerlo de esta forma
//rsort($videojuevos);
//var_dump($videojuevos);

## Ordenar arreglo de manera inversa sin perder el indice
//arsort($videojuevos);
//var_dump($videojuevos);

## Sumar valores del arreglo
//$numeros = [1, 2, 10, 20];
//$suma_arreglo = array_sum($numeros);
//echo "La suma del arreglo es: ".$suma_arreglo;

## Encontrar diferencias entre arreglos
//$claseA=['a1'=>'Yeison', 'a2'=>'Juan','a3'=>'Amanda'];
//$claseB=['a1'=>'Yeison', 'a2'=>'Juan','a3'=>'Amanda','a4'=>'Mariana','a5'=>'Salomon'];
//$diferencia = array_diff($claseB, $claseA);
//var_dump($diferencia);


## Dividir un arreglo
$videojuevos = ['FIFA','Fortnite','Red Deal', 'Call Of Duty', 'Battelfield','Pokemon', 'GTA','The Sims'];

$dividir = array_chunk($videojuevos,2);
//var_dump($dividir);

## Dividir un arreglo y eliminar lo anterior
//var_dump(array_slice($videojuevos,2));

## Unir arreglos
$frutas =['Fresa', 'Uva', 'Mora'];
$verduras =['zanahoria', 'lechuga', 'coliflor'];

$unir = array_merge($frutas,$verduras);
//var_dump($unir);


## Eliminar último elemento de un arreglo
array_pop($videojuevos);
var_dump($videojuevos);

## Agregar un elemento al final del arreglo
array_push($videojuevos,'Mario Bros');
var_dump($videojuevos);


## Buscar un elemento en un arreglo || Regresa la posición del primer valor encontrado
$calAlumnos = array(10, 1, 3,3, 4);
$buscar = array_search(3,$calAlumnos);
var_dump($buscar);







?>