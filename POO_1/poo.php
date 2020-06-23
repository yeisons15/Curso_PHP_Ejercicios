<?php
## Ejemplo de una clase en PHP

class Curso{
    public $nombre;
    public $duracion;
    public $costo;
    public $moneda;
    public $profesor;
    public $disponible;

    public function imprimirInfo(){
        return "El nombre del curso es <Strong>" . $this->nombre . " </Strong>y quien imparte el curso es: " . $this->profesor . "<br />";
    }

}

## Creación de Objeto o instancia 1 
$php = new Curso();
$php->nombre = 'POO en PHP';
$php->duracion = '3 sesiones';
$php->costo = 10;
$php->moneda = 'USD';
$php->profesor = 'Yesi Days';
$php->disponible = true;


echo $php->imprimirInfo();

//var_dump($php);

## Creación de Objeto o instancia 2
$javascript = new Curso();
$javascript->nombre = 'JavaScript desde 0';
$javascript->duracion = '6 sesiones';
$javascript->costo = 0;
$javascript->moneda = 'USD';
$javascript->profesor = 'Álvaro Felipe';
$javascript->disponible = true;

echo $javascript->imprimirInfo();
//var_dump($javascript);



?>