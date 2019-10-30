<?php
require_once('Persona.php');

class usuarios extends persona
{
  private $contrasena2;
  private $foto;
  private $tipodeusuario;
  private $emaillogin;
  private $contrasenalogin;

  function __construct($post = null, $files = null, $tipodeusuario = null, $emaillogin = null, $contrasenalogin = null)
  {
    parent::__construct($post);
    $this->contrasena2 = $post["contrasena2"];
    $this->foto = $files["foto"];
    $this->tipodeusuario = $tipodeusuario;
    $this->emaillogin = $emaillogin;
    $this->contrasenalogin = $contrasenalogin;
  }

  public function gettipodeusuario(){
    return $this->tipodeusuario;
  }

  public function settipodeusuario($tipodeusuario){
    $this->tipodeusuario = $tipodeusuario;
  }

  public function getfoto(){
    return $this->foto;
  }

  public function setfoto($foto){
    $this->foto = $foto;
  }

  public function buscarporemail($email){
    $dsn = "mysql:host=localhost;port=3306;dbname=alizon";
    $usuario = "root";
    $contrasena = "";

    try {

      $conexion = new PDO($dsn, $usuario, $contrasena);
      $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch (\Exception $e) {

      echo "Se Produjo Un Error al Cargar la Pagina...";exit;

    }

    $consulta = $conexion->prepare("SELECT * FROM usuarios WHERE email = '$email'");
    $consulta->execute();
    $usuario = $consulta->fetch(PDO::FETCH_ASSOC);

    if ($usuario) {
      return $usuario;
    }else {
      return null;
    }
  }

  private function validarlogin(){
    $errores = [];

    $usuariologin = $this->buscarporemail($this->emaillogin);

    if ($usuariologin == null) {
      $errores["emaillogin"] = "Los datos ingresados no son correctos";
      $errores["mensajeerrorlogin"] = "<style>.mensajeerrorlogin{font-weight: bold;color: #dcc300;text-shadow: 1px 2px 0px #000;font-size: 1.3em;background: repeating-linear-gradient(45deg, #8800ad, #ffdada00 119px);padding: 3% 1%;border-radius: 4px;display:block;text-align:center;margin-bottom:2%;}</style>";
    }else {
      if (password_verify($this->contrasenalogin, $usuariologin["contrasena"]) == false) {
        $errores["contrasenalogin"] = "los datos ingresados no son conrrectos";
        $errores["mensajeerrorlogin"] = "<style>.mensajeerrorlogin{font-weight: bold;color: #dcc300;text-shadow: 1px 2px 0px #000;font-size: 1.3em;background: repeating-linear-gradient(45deg, #8800ad, #ffdada00 119px);padding: 3% 1%;border-radius: 4px;display:block;text-align:center;margin-bottom:2%;}</style>";
      }
    }
    return $errores;
  }

  public function iniciosesion($usuario){
    $_SESSION["nombre"] = $usuario["nombre"];
    $_SESSION["apellido"] = $usuario["apellido"];
    $_SESSION["email"] = $usuario["email"];
    $_SESSION["foto"] = $usuario["foto"];
    $_SESSION["tipodeusuario"] = $usuario["tipodeusuario"];

    if (isset($_POST["recordarusuario"])) {
      setcookie("email",$_POST["emaillogin"],time()+3600);
      setcookie("contrasena",$_POST["contrasenalogin"],time()+3600);
    }
  }

  private function validarregistro(){

    $errores = [];

      if (strlen($this->nombre) == null) {
        $errores["nombre"] = "El campo nombre se encuentra vacio";
        $errores["bordenombre"] = "<style>.bordenombre{border: solid 2px red;}</style>";
        $errores["mensajeerrornombre"] = "<style>.mensajeerrornombre{font-weight: bold;color: #dcc300;text-shadow: 1px 2px 0px #000;font-size: 0.9em;background: repeating-linear-gradient(45deg, #ad0011, #ffdada00 119px);padding: 3% 1%;border-radius: 4px;display:block;}</style>";
      }else {
        if (strlen($this->nombre) <= 2) {
          $errores["nombre"] = "El campo nombre tiene menos de 3 caracteres";
          $errores["bordenombre"] = "<style>.bordenombre{border: solid 2px red;}</style>";
          $errores["mensajeerrornombre"] = "<style>.mensajeerrornombre{font-weight: bold;color: #dcc300;text-shadow: 1px 2px 0px #000;font-size: 0.9em;background: repeating-linear-gradient(45deg, #ad0011, #ffdada00 119px);padding: 3% 1%;border-radius: 4px;display:block;}</style>";
        }else {
          $errores["bordenombre"] = "<style>.bordenombre{border: solid 2px green;}</style>";
        }
      }


      if (strlen($this->apellido) == null) {
        $errores["apellido"] = "El campo apellido se encuentra vacio";
        $errores["bordeapellido"] = "<style>.bordeapellido{border: solid 2px red;}</style>";
        $errores["mensajeerrorapellido"] = "<style>.mensajeerrorapellido{font-weight: bold;color: #dcc300;text-shadow: 1px 2px 0px #000;font-size: 0.9em;background: repeating-linear-gradient(45deg, #ad0011, #ffdada00 119px);padding: 3% 1%;border-radius: 4px;display:block;}</style>";
      }else {
        if (strlen($this->apellido) <= 2) {
          $errores["apellido"] = "El campo apellido tiene menos de 3 caracteres";
          $errores["bordeapellido"] = "<style>.bordeapellido{border: solid 2px red;}</style>";
          $errores["mensajeerrorapellido"] = "<style>.mensajeerrorapellido{font-weight: bold;color: #dcc300;text-shadow: 1px 2px 0px #000;font-size: 0.9em;background: repeating-linear-gradient(45deg, #ad0011, #ffdada00 119px);padding: 3% 1%;border-radius: 4px;display:block;}</style>";
        }else {
          $errores["bordeapellido"] = "<style>.bordeapellido{border: solid 2px green;}</style>";
        }
      }

      if (strlen($this->email) == null) {
        $errores["email"] = "Por favor ingresa un email";
        $errores["bordeemail"] = "<style>.bordeemail{border: solid 2px red;}</style>";
        $errores["mensajeerroremail"] = "<style>.mensajeerroremail{font-weight: bold;color: #dcc300;text-shadow: 1px 2px 0px #000;font-size: 0.9em;background: repeating-linear-gradient(45deg, #ad0011, #ffdada00 119px);padding: 3% 1%;border-radius: 4px;display:block;}</style>";
      }else {
        if (!filter_var($this->email,FILTER_VALIDATE_EMAIL)) {
          $errores["email"] = "El email no tiene el formato correcto";
          $errores["bordeemail"] = "<style>.bordeemail{border: solid 2px red;}</style>";
          $errores["mensajeerroremail"] = "<style>.mensajeerroremail{font-weight: bold;color: #dcc300;text-shadow: 1px 2px 0px #000;font-size: 0.9em;background: repeating-linear-gradient(45deg, #ad0011, #ffdada00 119px);padding: 3% 1%;border-radius: 4px;display:block;}</style>";
        }elseif ($this->buscarporemail($this->email) == true) {
          $errores["email"] = "El email ya se encuentra registrado";
          $errores["bordeemail"] = "<style>.bordeemail{border: solid 2px red;}</style>";
          $errores["mensajeerroremail"] = "<style>.mensajeerroremail{font-weight: bold;color: #dcc300;text-shadow: 1px 2px 0px #000;font-size: 0.9em;background: repeating-linear-gradient(45deg, #ad0011, #ffdada00 119px);padding: 3% 1%;border-radius: 4px;display:block;}</style>";
        }else {
          $errores["bordeemail"] = "<style>.bordeemail{border: solid 2px green;}</style>";
        }
      }

      if (strlen($this->contrasena) == null) {
        $errores["contrasena"] ="Por favor ingresa una contraseña";
        $errores["bordecontrasena"] = "<style>.bordecontrasena{border: solid 2px red;}</style>";
        $errores["mensajeerrorcontrasena"] = "<style>.mensajeerrorcontrasena{font-weight: bold;color: #dcc300;text-shadow: 1px 2px 0px #000;font-size: 0.9em;background: repeating-linear-gradient(45deg, #ad0011, #ffdada00 119px);padding: 3% 1%;border-radius: 4px;display:block;}</style>";
      }else {
        if (strlen($this->contrasena) <= 7) {
          $errores["contrasena"] ="La contraseña tiene menos de 8 caracteres";
          $errores["bordecontrasena"] = "<style>.bordecontrasena{border: solid 2px red;}</style>";
          $errores["mensajeerrorcontrasena"] = "<style>.mensajeerrorcontrasena{font-weight: bold;color: #dcc300;text-shadow: 1px 2px 0px #000;font-size: 0.9em;background: repeating-linear-gradient(45deg, #ad0011, #ffdada00 119px);padding: 3% 1%;border-radius: 4px;display:block;}</style>";
        }else {
          $errores["bordecontrasena"] = "<style>.bordecontrasena{border: solid 2px green;}</style>";
        }
      }

      if (strlen($this->contrasena2) == null) {
        $errores["contrasena2"] = "Por favor repite la contraseña";
        $errores["bordecontrasena2"] = "<style>.bordecontrasena2{border: solid 2px red;}</style>";
        $errores["mensajeerrorcontrasena2"] = "<style>.mensajeerrorcontrasena2{font-weight: bold;color: #dcc300;text-shadow: 1px 2px 0px #000;font-size: 0.9em;background: repeating-linear-gradient(45deg, #ad0011, #ffdada00 119px);padding: 3% 1%;border-radius: 4px;display:block;}</style>";
      }else {
        if ($this->contrasena != $this->contrasena2) {
          $errores["contrasena2"] = "Las contraseñas no coinciden";
          $errores["bordecontrasena2"] = "<style>.bordecontrasena2{border: solid 2px red;}</style>";
          $errores["mensajeerrorcontrasena2"] = "<style>.mensajeerrorcontrasena2{font-weight: bold;color: #dcc300;text-shadow: 1px 2px 0px #000;font-size: 0.9em;background: repeating-linear-gradient(45deg, #ad0011, #ffdada00 119px);padding: 3% 1%;border-radius: 4px;display:block;}</style>";
        }else {
          $errores["bordecontrasena2"] = "<style>.bordecontrasena2{border: solid 2px green;}</style>";
        }
      }


        if ($this->foto){
        if ($this->foto["error"] == UPLOAD_ERR_NO_FILE){
           $errores["foto"] = "Por favor carga una foto de perfil";
           $errores["bordefoto"] = "<style>.bordefoto{border: solid 2px red;}</style>";
           $errores["mensajeerrorfoto"] = "<style>.mensajeerrorfoto{font-weight: bold;color: #dcc300;text-shadow: 1px 2px 0px #000;font-size: 0.9em;background: repeating-linear-gradient(45deg, #ad0011, #ffdada00 119px);padding: 3% 1%;border-radius: 4px;display:block;}</style>";
         }else {
           if ($this->foto["error"] != UPLOAD_ERR_OK){
             $errores["foto"] = "Se produjo un error al cargar la imagen";
             $errores["mensajeerrorfoto"] = "<style>.mensajeerrorfoto{font-weight: bold;color: #dcc300;text-shadow: 1px 2px 0px #000;font-size: 0.9em;background: repeating-linear-gradient(45deg, #ad0011, #ffdada00 119px);padding: 3% 1%;border-radius: 4px;display:block;}</style>";
           }
         }
        $nombredeimagen = $this->foto["name"];
        $extension = pathinfo($nombredeimagen, PATHINFO_EXTENSION);
        if ($extension != "jpg" && $extension != "jpeg" && $extension != "png" && $extension != "webp") {
          if ($extension != null) {
            $errores["foto"] = "La extension del archivo es incorrecta";
            $errores["mensajeerrorfoto"] = "<style>.mensajeerrorfoto{font-weight: bold;color: #dcc300;text-shadow: 1px 2px 0px #000;font-size: 0.9em;background: repeating-linear-gradient(45deg, #ad0011, #ffdada00 119px);padding: 3% 1%;border-radius: 4px;display:block;}</style>";
          }
        }
      }
    return $errores;
  }

  public function imprimirerrores($i){
    if (recordardatos("nombre") || recordardatos("apellido") || recordardatos("email") || recordardatos("contrasena") || recordardatos("contrasena2")) {
    $errores = $this->validarregistro();
      if (isset($errores[$i])) {
        return $errores[$i];
      }
    }

    if (recordardatos("emaillogin") || recordardatos("contrasenalogin")) {
    $errores = $this->validarlogin();
    if (isset($errores[$i])) {
      return $errores[$i];
    }
   }
  }

  public function armarimagen(){
    $nombre = $this->foto["name"];
    $extension = pathinfo($nombre, PATHINFO_EXTENSION);

    $archivotemporal = $this->foto["tmp_name"];

    $rutadestino = dirname(__FILE__);
    $rutadestino = $rutadestino."/../upload/fotos/";


    $nombreunico = uniqid();

    $rutafinal = $rutadestino .$nombreunico.".".$extension;

    move_uploaded_file ($archivotemporal, $rutafinal);

    return $nombreunico.".".$extension;
  }

  public function armarusuario($foto){
    $contrasenahasheada = password_hash($this->contrasena, PASSWORD_DEFAULT);

    $usuario = [
      "nombre" => $this->nombre,
      "apellido" => $this->apellido,
      "email" => $this->email,
      "contrasena" => $contrasenahasheada,
      "foto" => $foto,
      "tipodeusuario" => $this->tipodeusuario,
    ];
    return $usuario;
  }

  public function guardarusuario($usuarioarmado){
    $dsn = "mysql:host=localhost;port=3306;dbname=alizon";
    $usuario = "root";
    $contrasena = "";

    try {

      $conexion = new PDO($dsn, $usuario, $contrasena);
      $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch (\Exception $e) {

      echo "Se Produjo Un Error al Cargar la Pagina...";exit;

    }


    $nombre = $usuarioarmado["nombre"];
    $apellido = $usuarioarmado["apellido"];
    $email = $usuarioarmado["email"];
    $contrasena = $usuarioarmado["contrasena"];
    $foto = $usuarioarmado["foto"];
    $tipodeusuario = $usuarioarmado["tipodeusuario"];


    $consulta = $conexion->prepare("INSERT into usuarios values (default, :nombre, :apellido, :email, :contrasena, :foto, :tipodeusuario)");

    $consulta->bindValue(":nombre", $nombre);
    $consulta->bindValue(":apellido", $apellido);
    $consulta->bindValue(":email", $email);
    $consulta->bindValue(":contrasena", $contrasena);
    $consulta->bindValue(":foto", $foto);
    $consulta->bindValue(":tipodeusuario", $tipodeusuario);

    $consulta->execute();
  }

}

 ?>
