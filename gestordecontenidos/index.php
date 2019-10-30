<?php
session_start();
require_once('funciones/gestorfunciones.php');
if ($_SESSION["tipodeusuario"] != "administrador") {
  header("Location: ../index.php");
  exit;
}
 ?>
 <!DOCTYPE html>
 <html lang="es" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Alizon.com Gestor de contenidos</title>
     <meta name="content" content="Gestor de contenidos demo">
     <meta name="author" content="GrupoHouse">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="css/gestordecontenidos.css">
   </head>
   <body>
       <?php require_once('componentes/gestorheader.php'); ?>
     <div class="contenedor">
       <?php require_once('componentes/gestorcreartabla.php'); ?>
       <?php require_once('componentes/gestorfooter.php'); ?>
     </div>
     <script src="js/jquery-3.4.1.min.js" charset="utf-8"></script>
     <script src="js/all.min.js" charset="utf-8"></script>
   </body>
 </html>
