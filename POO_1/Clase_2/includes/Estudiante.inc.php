<?php

class Estudiante extends Persona{

    public function __construct($nombre, $apellido, $email){
        parent::__construct($nombre, $apellido, $email);
    }
}

?>