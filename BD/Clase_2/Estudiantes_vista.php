<?php
	require_once 'Estudiantes_modelo.php';
	$estudiante = new Estudiantes_modelo();
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
</head>
<body>

	<h1>CRUD de Estudiantes</h1>

	<?php  #var_dump(PDO::getAvailableDrivers()); ?>

	<h3>C: Insertar</h3>
	<?php

		/* $alumno = [
			'nombre'  => 'Gaby',
			'paterno' => 'R.A',
			'materno' => 'M',
			'email'   => 'rb@gmail.com'
		]; 
		
		$respuesta = $estudiante->insertar($alumno);
		if ($respuesta == true) {
			//echo "Se ha insertado, esto en vista".'<br />';
			//var_dump($alumno).'<br />';
			
		} else {
			echo "Hay un error";
		}*/

	?>

	<h3>R: Leer/Consultar</h3>
	<?php
		/* $resultados = $estudiante->consultar();
		foreach ($resultados as $estudiante) {
			echo $estudiante['nombre']." ".$estudiante['paterno']."<br />";
		} */
	?>

	<h3>U: Actualizar</h3>

	<?php

		/* $alumno = [
			'id' => 17,
			'nombre' => 'Jose',
			'paterno' => 'E',
			'materno' => 'A',
			'email' => 'JEA@gmail.com'
		];
		var_dump ($alumno) . "Datos de Vista <br/>";
		$estudiante->actualizar($alumno);
		
		$resultados = $estudiante->consultar();
		foreach ($resultados as $estudiante) {
			echo $estudiante['nombre']." ".$estudiante['paterno']."<br />";
		}
 */
	?>

	<h3>D: Eliminar</h3>

	<?php

		$alumno = ['email' => 'dog@gmail.com'];
		$estudiante->eliminar('todos', $alumno);

	?>




</body>
</html>