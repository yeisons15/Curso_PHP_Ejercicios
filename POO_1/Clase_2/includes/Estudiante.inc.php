<?php

class Estudiante extends Persona{

    public function __construct($nombre, $apellido, $email){
        parent::__construct($nombre, $apellido, $email);
    }

    ## Sobre escritura del método
    public function bienvenida(){
        return "Bienvenido {$this->nombre}, tenemos nuevos cursos par ti";
    }

}

?>