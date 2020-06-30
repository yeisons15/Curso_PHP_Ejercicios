<?php

function conecta(){
    try {
        $cadena = 'mysql:host=localhost; dbname=curso_php';
        $conesion = new PDO($cadena, 'root', '');
        return true;
    } catch (PDOException $e) {
        echo "ERROR: " . $e->getMessage();
    }
}

?>