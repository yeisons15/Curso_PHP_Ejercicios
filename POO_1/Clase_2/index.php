<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO Avanzado I</title>
</head>
<body>
    
    <h1>POO Avanzado I</h1>
<?php
    define ('INC', '/includes/');
    require_once __DIR__ . INC . 'Curso.inc.php';
    require_once __DIR__ . INC . 'Estudiante.inc.php';

    $curso1 = new Curso('POO en PHP', 'Yesy Days', '3 Sesiones', 10, true);
    $curso2 = new Curso('JavaScript', 'Álvaro Felipe', '6 Sesiones', 12, true);
    $curso3 = new Curso('BD Desde Cero', 'Alexys Lozada', '5 Sesiones', 12, true);

?>

</body>
</html>