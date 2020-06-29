<?php

trait Compra{
    private $compra;
    function validarCompra(){
        return "Compra exitosa";
    }
}

class Persona {

    use Compra; #Se agregan más trait separandolos por comas

    const MONEDA = 'USD';

    public $nombre;
    public $apellido;
    public $email;



    public function __construct($nombre, $apellido, $email){
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->email=$email;
    }

    public function bienvenida (){
        return "Bienvenido {$this->nombre} a EdTeam";
    }


    ## Con la palabra reservada "final" no se puede sobre escribir el método
    final public function despedida (){
        return "Hasta Pronto {$this->nombre}";
    }
}

?>