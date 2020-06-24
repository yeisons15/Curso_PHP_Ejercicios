<?php

class Curso{

    private $titulo;
    private $profesor;
    private $duracion;
    private $costo;
    private $disponible;

    ## Creación del constructor
    public function __construct ($titulo, $profesor, $duracion, $costo, $disponible){
        $this->titulo = $titulo;
        $this->profesor = $profesor;
        $this->duracion = $duracion;
        $this->costo = $costo;
        $this->disponible = $disponible;

    }

    ## Encapsulación
    ## Se usan los métodos getter (objener) y setter (asignar datos)
    
    ##Ejemplo Getter (Obtener)
    public function otenerTitulo(){
        return $this ->titulo;
    }

    public function obtenerProfesor(){
        return $this ->profesor;
    }

    ##Ejemplo Setter (Asignar)
    public function asignarTitulo($titulo){
        $this->titulo = $titulo;
    }


    
}



?>