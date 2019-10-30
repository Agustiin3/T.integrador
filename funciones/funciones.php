<?php
require_once('clases/PDO.php');
require_once('clases/Usuarios.php');

$consulta = $conexion->prepare("SELECT * FROM usuarios");
$consulta->execute();
$consultasihayusuario = $consulta->fetch(PDO::FETCH_ASSOC);

function recordardatos($i){
  if (isset($_POST[$i])) {
    return $_POST[$i];
  }
}

function recordarlogin($i){
  if (isset($_COOKIE[$i])) {
    return $_COOKIE[$i];
  }
}

$traer = "";
$metodoparatraerregistro = recordardatos("nombre") || recordardatos("apellido") || recordardatos("email") || recordardatos("contrasena") || recordardatos("contrasena2");
$metodoparatraerlogin = recordardatos("emaillogin") || recordardatos("contrasenalogin");


if ($metodoparatraerregistro) {

  if ($consultasihayusuario) {
    $usuario = new usuarios($_POST,$_FILES, "normal");
  }else {
    $usuario = new usuarios($_POST,$_FILES, "administrador");
  }


  $traer = "<style>.registro{top: 12%;}</style>";


  if ($usuario->imprimirerrores("nombre") == null && $usuario->imprimirerrores("apellido") == null && $usuario->imprimirerrores("email") == null && $usuario->imprimirerrores("contrasena") == null && $usuario->imprimirerrores("contrasena2") == null && $usuario->imprimirerrores("foto") == null) {
    $foto = $usuario->armarimagen();
    $usuarioarmado = $usuario->armarusuario($foto);
    $usuario->guardarusuario($usuarioarmado);
    header("Location: index.php");
    exit;
  }

}

if ($metodoparatraerlogin) {

  $usuariologin = new usuarios(null, null, null, $_POST["emaillogin"], $_POST["contrasenalogin"]);

  $traer = "<style>.sesion{top: 12%;}</style>";

  if ($usuariologin->imprimirerrores("emaillogin") == null && $usuariologin->imprimirerrores("contrasenalogin") == null) {
    $usuario = $usuariologin->buscarporemail($_POST["emaillogin"]);
    $usuariologin->iniciosesion($usuario);

    if ($_SESSION["tipodeusuario"] === "administrador") {
      header("Location: gestordecontenidos/index.php");
      exit;
    }else {
      header("Location: index.php");
      exit;
    }


  }
}

 ?>
