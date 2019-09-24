<?php

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

function jsonenarray(){
  if (file_exists("json/usuariosregistrados.json")) {
    $usuariosregistrados = file_get_contents("json/usuariosregistrados.json");
    $recorriendousuarios = explode(PHP_EOL, $usuariosregistrados);
    array_pop($recorriendousuarios);

    foreach ($recorriendousuarios as $usuarios) {
      $arrayusuarios[] = json_decode($usuarios, true);
    }

    return $arrayusuarios;

  }else {
    return null;
  }
}

function buscarporemail($email){
  if (file_exists("json/usuariosregistrados.json")) {
  $arrayusuarios = jsonenarray();

  foreach ($arrayusuarios as $id => $usuario) {
    if ($email === $usuario["email"]) {
      return $usuario;
    }
  }
  return null;
}else {
  return null;
}
}

function validarlogin($datos){
  $errores = [];

  $usuario = buscarporemail($datos["emaillogin"]);

  if ($usuario == null) {
    $errores["emaillogin"] = "Los datos ingresados no son correctos";
    $errores["mensajeerrorlogin"] = "<style>.mensajeerrorlogin{font-weight: bold;color: #dcc300;text-shadow: 1px 2px 0px #000;font-size: 1.3em;background: repeating-linear-gradient(45deg, #8800ad, #ffdada00 119px);padding: 3% 1%;border-radius: 4px;display:block;text-align:center;margin-bottom:2%;}</style>";
  }else {
    if (password_verify($datos["contrasenalogin"], $usuario["contrasena"]) == false) {
      $errores["contrasenalogin"] = "los datos ingresados no son conrrectos";
      $errores["mensajeerrorlogin"] = "<style>.mensajeerrorlogin{font-weight: bold;color: #dcc300;text-shadow: 1px 2px 0px #000;font-size: 1.3em;background: repeating-linear-gradient(45deg, #8800ad, #ffdada00 119px);padding: 3% 1%;border-radius: 4px;display:block;text-align:center;margin-bottom:2%;}</style>";
    }
  }
  return $errores;
}

function iniciosesion($usuario){
  $_SESSION["nombre"] = $usuario["nombre"];
  $_SESSION["apellido"] = $usuario["apellido"];
  $_SESSION["email"] = $usuario["email"];
  $_SESSION["foto"] = $usuario["foto"];

  if (isset($_POST["recordarusuario"])) {
    setcookie("email",$_POST["emaillogin"],time()+3600);
    setcookie("contraseña",$_POST["contrasenalogin"],time()+3600);
  }
}


function validarregistro($datos){

  $errores = [];

  if ($datos) {


    if (strlen($datos["nombre"] == null)) {
      $errores["nombre"] = "El campo nombre se encuentra vacio";
      $errores["bordenombre"] = "<style>.bordenombre{border: solid 2px red;}</style>";
      $errores["mensajeerrornombre"] = "<style>.mensajeerrornombre{font-weight: bold;color: #dcc300;text-shadow: 1px 2px 0px #000;font-size: 0.9em;background: repeating-linear-gradient(45deg, #ad0011, #ffdada00 119px);padding: 3% 1%;border-radius: 4px;display:block;}</style>";
    }else {
      if (strlen($datos["nombre"]) <= 2) {
        $errores["nombre"] = "El campo nombre tiene menos de 3 caracteres";
        $errores["bordenombre"] = "<style>.bordenombre{border: solid 2px red;}</style>";
        $errores["mensajeerrornombre"] = "<style>.mensajeerrornombre{font-weight: bold;color: #dcc300;text-shadow: 1px 2px 0px #000;font-size: 0.9em;background: repeating-linear-gradient(45deg, #ad0011, #ffdada00 119px);padding: 3% 1%;border-radius: 4px;display:block;}</style>";
      }else {
        $errores["bordenombre"] = "<style>.bordenombre{border: solid 2px green;}</style>";
      }
    }


    if (strlen($datos["apellido"]) == null) {
      $errores["apellido"] = "El campo apellido se encuentra vacio";
      $errores["bordeapellido"] = "<style>.borde{border: solid 2px red;}</style>";
      $errores["mensajeerrorapellido"] = "<style>.mensajeerrorapellido{font-weight: bold;color: #dcc300;text-shadow: 1px 2px 0px #000;font-size: 0.9em;background: repeating-linear-gradient(45deg, #ad0011, #ffdada00 119px);padding: 3% 1%;border-radius: 4px;display:block;}</style>";
    }else {
      if (strlen($datos["apellido"]) <= 2) {
        $errores["apellido"] = "El campo apellido tiene menos de 3 caracteres";
        $errores["bordeapellido"] = "<style>.borde{border: solid 2px red;}</style>";
        $errores["mensajeerrorapellido"] = "<style>.mensajeerrorapellido{font-weight: bold;color: #dcc300;text-shadow: 1px 2px 0px #000;font-size: 0.9em;background: repeating-linear-gradient(45deg, #ad0011, #ffdada00 119px);padding: 3% 1%;border-radius: 4px;display:block;}</style>";
      }else {
        $errores["bordeapellido"] = "<style>.borde{border: solid 2px green;}</style>";
      }
    }

    if (strlen($datos["email"]) == null) {
      $errores["email"] = "Por favor ingresa un email";
      $errores["bordeemail"] = "<style>.bordeemail{border: solid 2px red;}</style>";
      $errores["mensajeerroremail"] = "<style>.mensajeerroremail{font-weight: bold;color: #dcc300;text-shadow: 1px 2px 0px #000;font-size: 0.9em;background: repeating-linear-gradient(45deg, #ad0011, #ffdada00 119px);padding: 3% 1%;border-radius: 4px;display:block;}</style>";
    }else {
      if (!filter_var($datos["email"],FILTER_VALIDATE_EMAIL)) {
        $errores["email"] = "El email no tiene el formato correcto";
        $errores["bordeemail"] = "<style>.bordeemail{border: solid 2px red;}</style>";
        $errores["mensajeerroremail"] = "<style>.mensajeerroremail{font-weight: bold;color: #dcc300;text-shadow: 1px 2px 0px #000;font-size: 0.9em;background: repeating-linear-gradient(45deg, #ad0011, #ffdada00 119px);padding: 3% 1%;border-radius: 4px;display:block;}</style>";
      }elseif (buscarporemail($datos["email"]) == true) {
        $errores["email"] = "El email ya se encuentra registrado";
        $errores["bordeemail"] = "<style>.bordeemail{border: solid 2px red;}</style>";
        $errores["mensajeerroremail"] = "<style>.mensajeerroremail{font-weight: bold;color: #dcc300;text-shadow: 1px 2px 0px #000;font-size: 0.9em;background: repeating-linear-gradient(45deg, #ad0011, #ffdada00 119px);padding: 3% 1%;border-radius: 4px;display:block;}</style>";
      }else {
        $errores["bordeemail"] = "<style>.bordeemail{border: solid 2px green;}</style>";
      }
    }

    if (strlen($datos["contraseña"]) == null) {
      $errores["contraseña"] ="Por favor ingresa una contraseña";
      $errores["bordecontraseña"] = "<style>.bordecontraseña{border: solid 2px red;}</style>";
      $errores["mensajeerrorcontraseña"] = "<style>.mensajeerrorcontraseña{font-weight: bold;color: #dcc300;text-shadow: 1px 2px 0px #000;font-size: 0.9em;background: repeating-linear-gradient(45deg, #ad0011, #ffdada00 119px);padding: 3% 1%;border-radius: 4px;display:block;}</style>";
    }else {
      if (strlen($datos["contraseña"]) <= 7) {
        $errores["contraseña"] ="La contraseña tiene menos de 8 caracteres";
        $errores["bordecontraseña"] = "<style>.bordecontraseña{border: solid 2px red;}</style>";
        $errores["mensajeerrorcontraseña"] = "<style>.mensajeerrorcontraseña{font-weight: bold;color: #dcc300;text-shadow: 1px 2px 0px #000;font-size: 0.9em;background: repeating-linear-gradient(45deg, #ad0011, #ffdada00 119px);padding: 3% 1%;border-radius: 4px;display:block;}</style>";
      }else {
        $errores["bordecontraseña"] = "<style>.bordecontraseña{border: solid 2px green;}</style>";
      }
    }

    if (strlen($datos["contraseña2"]) == null) {
      $errores["contraseña2"] = "Por favor repite la contraseña";
      $errores["bordecontraseña2"] = "<style>.bordecontraseña2{border: solid 2px red;}</style>";
      $errores["mensajeerrorcontraseña2"] = "<style>.mensajeerrorcontraseña2{font-weight: bold;color: #dcc300;text-shadow: 1px 2px 0px #000;font-size: 0.9em;background: repeating-linear-gradient(45deg, #ad0011, #ffdada00 119px);padding: 3% 1%;border-radius: 4px;display:block;}</style>";
    }else {
      if ($datos["contraseña"] != $datos["contraseña2"]) {
        $errores["contraseña2"] = "Las contraseñas no coinciden";
        $errores["bordecontraseña2"] = "<style>.bordecontraseña2{border: solid 2px red;}</style>";
        $errores["mensajeerrorcontraseña2"] = "<style>.mensajeerrorcontraseña2{font-weight: bold;color: #dcc300;text-shadow: 1px 2px 0px #000;font-size: 0.9em;background: repeating-linear-gradient(45deg, #ad0011, #ffdada00 119px);padding: 3% 1%;border-radius: 4px;display:block;}</style>";
      }else {
        $errores["bordecontraseña2"] = "<style>.bordecontraseña2{border: solid 2px green;}</style>";
      }
    }


      if ($_FILES){
      if ($_FILES["foto"]["error"] == UPLOAD_ERR_NO_FILE){
         $errores["foto"] = "Por favor carga una foto de perfil";
         $errores["bordefoto"] = "<style>.bordefoto{border: solid 2px red;}</style>";
         $errores["mensajeerrorfoto"] = "<style>.mensajeerrorfoto{font-weight: bold;color: #dcc300;text-shadow: 1px 2px 0px #000;font-size: 0.9em;background: repeating-linear-gradient(45deg, #ad0011, #ffdada00 119px);padding: 3% 1%;border-radius: 4px;display:block;}</style>";
       }else {
         if ($_FILES["foto"]["error"] != UPLOAD_ERR_OK){
           $errores["foto"] = "Se produjo un error al cargar la imagen";
           $errores["mensajeerrorfoto"] = "<style>.mensajeerrorfoto{font-weight: bold;color: #dcc300;text-shadow: 1px 2px 0px #000;font-size: 0.9em;background: repeating-linear-gradient(45deg, #ad0011, #ffdada00 119px);padding: 3% 1%;border-radius: 4px;display:block;}</style>";
         }
       }
      $nombredeimagen = $_FILES["foto"]["name"];
      $extension = pathinfo($nombredeimagen, PATHINFO_EXTENSION);
      if ($extension != "jpg" && $extension != "jpeg" && $extension != "png" && $extension != "webp") {
        if ($extension != null) {
          $errores["foto"] = "La extension del archivo es incorrecta";
          $errores["mensajeerrorfoto"] = "<style>.mensajeerrorfoto{font-weight: bold;color: #dcc300;text-shadow: 1px 2px 0px #000;font-size: 0.9em;background: repeating-linear-gradient(45deg, #ad0011, #ffdada00 119px);padding: 3% 1%;border-radius: 4px;display:block;}</style>";
        }
      }
    }
  }
  return $errores;
}


function imprimirerrores($i){
  if (recordardatos("nombre") || recordardatos("apellido") || recordardatos("email") || recordardatos("contraseña") || recordardatos("contraseña2")) {
  $errores = validarregistro($_POST);
    if (isset($errores[$i])) {
      return $errores[$i];
    }
  }

  if (recordardatos("emaillogin") || recordardatos("contrasenalogin")) {
  $errores = validarlogin($_POST);
  if (isset($errores[$i])) {
    return $errores[$i];
  }
 }
}



  function armarimagen($foto){
    $nombre = $foto["foto"]["name"];
    $extension = pathinfo($nombre, PATHINFO_EXTENSION);

    $archivotemporal = $foto["foto"]["tmp_name"];

    $rutadestino = dirname(__FILE__);
    $rutadestino = $rutadestino."/../upload/fotos/";


    $nombreunico = uniqid();

    $rutafinal = $rutadestino .$nombreunico.".".$extension;

    move_uploaded_file ($archivotemporal, $rutafinal);

    return $nombreunico.".".$extension;
  }


  function armarusuario($datos, $foto){

    $contraseñahasheada = password_hash($datos["contraseña"], PASSWORD_DEFAULT);

    $usuario = [
      "nombre" => $datos["nombre"],
      "apellido" => $datos["apellido"],
      "email" => $datos["email"],
      "contrasena" => $contraseñahasheada,
      "foto" => $foto,
    ];
    return $usuario;
  }

  function guardarusuario($usuario){
    $jsonencode = json_encode($usuario);
    file_put_contents("json/usuariosregistrados.json",$jsonencode.PHP_EOL, FILE_APPEND);
  }




 ?>
