<?php

$dsn = "mysql:host=localhost;port=3306;dbname=alizon";
$usuario = "root";
$contrasena = "";

try {

  $conexion = new PDO($dsn, $usuario, $contrasena);
  $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (\Exception $e) {

  echo "Se Produjo Un Error al Cargar la Pagina...";exit;

}

 ?>
