<?php

class Profesor extends Persona{
  
    ## Ejemplo, sobre escritura de métodos
    public function bienvenida(){
        return "Bienvenido profesor {$this->nombre}";
    }
}

?>