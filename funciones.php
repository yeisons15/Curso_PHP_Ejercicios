<?php

 function sumarNumeros($a, $b, $imprime = false){
    $suma = $a + $b;
    if ($imprime == true) {
        echo "La suma es ".$suma . "<br />";
    }else{
        return $suma;
    }
 }   

$numero1 = 30;
$//sumarNumeros($numero1;10;true);

## Funcion Anonima

$despedida = function(){
    echo "Última Clase de PHP";
};

## Para llamar la función es:
$despedida();


## Función Closure

function finalizaCurso(Closure $curso, $nombre){
    return $curso($nombre);
}   

$php = function($nombre){
    return "<p> Gracias" . $nombre . "Finaliza el curso";
};

$laravel = function($nombre){
    return "<p> ". $nombre . "Finaliza el curso";
}

echo finalizaCurso($php, 'Juan');
echo finalizaCurso($laravel, 'Juan');




?>