<?php

## Declaración de interfaces

interface Requerimiento {
    public function asignarRequerimiento($listado);
    public function obtenerRequerimiento();
}

interface Conocimiento{
    public function asignarConocimiento($listado);
    public function obtenerConocimiento();
}

class Curso implements Requerimiento, Conocimiento{

    private $titulo;
    private $profesor;
    private $duracion;
    private $costo;
    private $disponible;
    private $listado;

    ## Atributo estatico
    public static $moneda; 
    
    

    ## Creación del constructor
    public function __construct ($titulo, $profesor, $duracion, $costo, $disponible){
        $this->titulo = $titulo;
        $this->profesor = $profesor;
        $this->duracion = $duracion;
        $this->costo = $costo;
        $this->disponible = $disponible;

    }

    ## Destructor

    ## Es util para liberar espacio en memoria luego de correr la aplicación
    public function __destruct(){
        echo "Destruyendo " . $this->titulo."<br />";
    }



    ## Encapsulación
    ## Se usan los métodos getter (objener) y setter (asignar datos)
    
    ##Ejemplo Getter (Obtener)
    public function obtenerTitulo(){
        return $this->titulo;
    }

    public function obtenerProfesor(){
        return $this->profesor;
    }

    ##Ejemplo Setter (Asignar)
    public function asignarTitulo($titulo){
        $this->titulo = $titulo;
    }

    ## Implementación las funciones de las interfaces.
    public function asignarRequerimiento($listado){
        $this->listado = $listado;
    }

    public function obtenerRequerimiento(){
        if (!empty($this->listado)) {
            foreach ($this->listado as $lista) {
                echo "<p>" . $lista . "</p>";
            }
        }
    }

    public function asignarConocimiento($listado){
        $this->listado = $listado;
    }

    public function obtenerConocimiento(){
        if (!empty($this->listado)) {
            foreach($this->listado as $lista){
                echo "<p>" . $lista . "</p>";
            }
        }
    }

    static function obtenerDenominacion (){
        return self::$moneda;
    }

    
    
}



?>