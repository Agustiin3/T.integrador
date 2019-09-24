<?php
session_start();
require_once('funciones/funciones.php');
$traer = "";
if (recordardatos("nombre") || recordardatos("apellido") || recordardatos("email") || recordardatos("contraseña") || recordardatos("contraseña2")) {

  validarregistro($_POST);
  $traer = "<style>.registro{top: 12%;}</style>";


  if (imprimirerrores("nombre") == null && imprimirerrores("apellido") == null && imprimirerrores("email") == null && imprimirerrores("contraseña") == null && imprimirerrores("contraseña2") == null && imprimirerrores("foto") == null) {
    $foto = armarimagen($_FILES);
    $usuario = armarusuario($_POST, $foto);
    guardarusuario($usuario);
    header("Location: index.php");
    exit;
  }

}

if (recordardatos("emaillogin") || recordardatos("contrasenalogin")) {
  validarlogin($_POST);
  $traer = "<style>.sesion{top: 12%;}</style>";

  if (imprimirerrores("emaillogin") == null && imprimirerrores("contrasenalogin") == null) {
    $usuario = buscarporemail($_POST["emaillogin"]);
    iniciosesion($usuario);
    header("Location: index.php");
    exit;
  }
}
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Alizon.com El Comercio Que Siempre Buscaste</title>
    <meta name="content" content="Encontrá Los Mejores Productos De Las Mejores Marcas Solo En Alizon.Com. Comprá en 12 y 18 Cuotas s/Interés. Ahora 12. Entrega Inmediata. Los Mejores Descuentos. Envíos a Todo el Pais...">
    <meta name="author" content="GrupoHouse">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/estilos.css">
  </head>
  <body>
      <?=$traer?>
      <?php require_once('componentes/header.php'); ?>
      <?php require_once('componentes/sesion.php'); ?>
      <?php require_once('componentes/registro.php'); ?>
      <?php require_once('componentes/slider.php'); ?>
    <div class="contenedor">
      <?php require_once('componentes/menudepagos.php'); ?>
      <div class="banner">
        <img src="upload/banner.webp" alt="">
      </div>
      <?php require_once('componentes/slider7.php'); ?>
      <?php require_once('componentes/slider2.php'); ?>
      <?php require_once('componentes/slider3.php'); ?>
      <?php require_once('componentes/seccion3.php'); ?>
      <?php require_once('componentes/slider4.php'); ?>
      <?php require_once('componentes/seccion.php'); ?>
      <?php require_once('componentes/slider5.php'); ?>
      <?php require_once('componentes/seccion2.php'); ?>
      <?php require_once('componentes/slider6.php'); ?>
      <?php require_once('componentes/seccion4.php'); ?>
      <div class="banner2">
        <img src="upload/banner2.webp" alt="">
      </div>
      <?php require_once('componentes/slider8.php'); ?>
      <?php require_once('componentes/footer.php'); ?>


    </div>
    <script src="js/jquery-3.4.1.min.js" charset="utf-8"></script>
    <script src="js/javascript.js" charset="utf-8"></script>
    <script src="js/all.min.js" charset="utf-8"></script>
  </body>
</html>
