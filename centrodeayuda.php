<?php
session_start();
require_once('funciones/funciones.php');
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Alizon.com Centro de Atención al Cliente</title>
    <meta name="content" content="Centro de Atención al Cliente Encontrá Los Mejores Productos De Las Mejores Marcas Solo En Alizon.Com. Envíos a Todo el Pais...">
    <meta name="author" content="GrupoHouse">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/estilos.css">
  </head>
  <body>
    <?=$traer?>
    <?php require_once('componentes/header.php'); ?>
    <?php require_once('componentes/sesion.php'); ?>
    <?php require_once('componentes/registro.php'); ?>
    <div class="contenedor">
    <?php require_once('componentes/seccionayuda.php'); ?>
    <?php require_once('componentes/footer.php'); ?>


    </div>
    <script src="js/jquery-3.4.1.min.js" charset="utf-8"></script>
    <script src="js/javascript.js" charset="utf-8"></script>
    <script src="js/all.min.js" charset="utf-8"></script>
  </body>
</html>
