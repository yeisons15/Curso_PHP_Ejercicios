
<?php
## Desactivar toda notificación de error
error_reporting('E_ERROR');
$nombre = 'Hola';

echo $nombre;
echo $nombres;

## E_NOTICE informa de variabl



## Guardar errores en un log
ini_set("log_errores", 1);
ini_set("error_log", "/tmp/php-error.log");
error_log("Hay un error");


?>