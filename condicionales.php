<?php

## Estructuras de control

## If, If Else, Else If

/*
$numero =2;

if ($numero==1) {
    echo "El número es igual a 1<br />";
} else if($numero==2){
    echo "El número es igual a 2<br />";
} else if($numero==3){
    echo "El número es igual a 3<br />";
}else{
    echo "Es otro número<br />";
}

## Switch Case

switch ($numero) {
    case 1:
        echo "El número es igual a 1<br />";
        break;
    case 2:
        echo "El número es igual a 2<br />";
        break;
    case 3:
        echo "El número es igual a 3<br />";
        break;
    case 4:
        echo "El número es igual a 4<br />";
        break;
    default:
        echo "Es otro número<br />";
        break;
}


## Practica operadores condicionales

// Operador and (&&) se indica cuando se quiere que ambas condiciones se cumplan.
// Operador or (||) se indica cuando se quiere que al menos una de las condiciones se cumplan.

## Ejercicio 1

$calificacion = 73;
if ($calificacion > 92) {
    $nota = "A";
    $mensaje = "Exelente";
}elseif ($calificacion <= 92 and $calificacion > 83) {
    $nota = "B";
    $mensaje = "Bien";
}elseif ($calificacion <= 83 and $calificacion > 74) {
    $nota = "C";
    $mensaje = "Regular";
}elseif ($calificacion <= 74 and $calificacion > 62) {
    $nota = "D";
    $mensaje = "Mal";
}else{
    $nota = "F";
    $mensaje = "Reprobado";
};

echo "Hola, el resultado fue ".$mensaje." con la nota ".$nota."<br />";

## Ejercicio 2

$arreglo = [1,2,3,5];
if (empty($arreglo)) {
    echo "Vacio";
}else{
    echo "Tiene datos";
}


## Operador de igualdad

## Así == compara el valor
$numero = 100;

if ($numero==100) {
    echo "Es igual";
}


## Así == compara el valor y el tipo de dato
$numero2 = 100;

if ($numero===100) {
    echo "Es igual";
}
*/

## Ciclos o Loops

## While (Mientras)

/*while(condición){
    
    Bloque de código

    Condición para deternerse

}


## Ejercicio 1
$i=1;
while ($i <= 10) {
    echo "El valor de la variable es ".$i."<br />";
    $i++;
}


## Ejercicio 2 (Con arreglo)
$frutas = ['naranja', 'pera', 'manzana', 'piña'];

$salir=0;
$i=0;

while ($salir != 1) {
    
    if ($frutas[$i]=="piña") {
        echo "<p>Encontre la piña</p>";
        $salir = 1;
    } else{
        echo "<p>La fruta encontrada es ".$frutas[$i]."</p>";
        $i++;
    }
}



## Do While (Hacer Mientras)
## Ejercicio 1

$i=1;

do {
    echo "El número acumulado es: ".$i."<br />";
    $i++;
} while ($i<=5);


*/

## For (Para)

/*
Estructura

Expresión1 = Inicialización de variables
Expresión2 = Evaluación lógica | Conclusión o limite del ciclo
Expresión3 = iteración, aumento o decremento de la variable contador

for(Expresión1;Expresión2;Expresión3){ 
    Bloque de código 
}



## Ejercicio 1
for($i=0;$i<=5;$i++){ 
    echo "El número acumulado es: ".$i."<br />";
}

*/

## Ejercicio 2 (Fibonacci)

$imprimir =0;
$control=0;
$anterior=1;


for($i=0 ; $i < 10; $i++) { 
    $control=$i+$anterior;
    1
    
    $imprimir=$control;

    echo "";
    


}

## i         0 1 2 3   
## anterior  1 1 1 1 
## Resultado 0, 1, 1, 2, 3, 4  