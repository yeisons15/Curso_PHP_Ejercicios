<?php

class Curso{

    public $publico = 'Público: POO Avanzado';
    private $privado = 'Público: POO Avanzado';
    protected $protegido = 'Público: POO Avanzado';


    ## Para acceder a una variable de tipo private usamos un método.
    function obtenerMensajePrivado () {
        return $this->privado;
    }
}

$prueba = new Curso ();

echo "<p>" .  $prueba->publico . "</p>";


?>