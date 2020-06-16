<?php

## Estructuras de control

## If, If Else, Else If

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

