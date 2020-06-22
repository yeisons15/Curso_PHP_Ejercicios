<?php
## Ejemplo de una clase en PHP

class Curso{
    public $nombre;
    public $duracion;
    public $costo;
    public $moneda;
    public $profesor;
    public $disponible;
}

$php = new Curso();
$php->nombre = 'POO en PHP';
$php->duracion = '3 sesiones';
$php->costo = 10;
$php->moneda = 'USD';
$php->profesor = 'Yesi Days';
$php->disponible = true;

var_dump($php);


?>