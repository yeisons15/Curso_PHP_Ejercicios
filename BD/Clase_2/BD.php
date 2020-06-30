<?php
	const DB = 'mysql';
   	const DB_SERVIDOR = 'localhost';
   	const DB_CHARSET = 'utf8';

	abstract class BD {
		private static $db_usuario = 'root';
		private static $db_pass = '';
		private static $db_servidor = DB_SERVIDOR;
		private static $db_nombre = 'curso_php';
		private static $db_charset = DB_CHARSET;
		private $conexion; #Conectar con la BD

		# Conexión con BD
		public function conectar() {
			try {
				$dsn = "mysql:host=".self::$db_servidor.";dbname=".self::$db_nombre;
				$pdo = new PDO($dsn, self::$db_usuario, self::$db_pass);
				$pdo->exec("SET CHARACTER SET ".self::$db_charset);
				$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
				return $pdo;
			} catch (PDOException $e) {
				exit("ERROR: ".$e->getMessage());
			}
		}
		private function desconectar() {
			$this->conexion = null;
		}

		# C R U D
		abstract protected function insertar($registro); //Crear
		abstract protected function consultar(); //Read
		abstract protected function actualizar($registro); //Update
		abstract protected function eliminar($accion, $eliminar); //Delete



	}


?>