<div class="header">
<div class="cerrartodo"></div>
<header>
<nav>
<div class="headerparte1">
  <ul>
    <li><a href="#">Creditos y Tarjetas</a></li>
    <li><a href="#">Venta a Empresas</a></li>
    <li><a href="#">Seguros</a></li>
    <li><a href="#">Listas de Regalos</a></li>
    <li><a href="#">Logistica</a></li>
    <li><a href="#">Viajes</a></li>
    <li><a href="#"><span><i class="fal fa-phone-alt"></i></span>Venta Telefonica</a></li>
    <li><a href="#"><span><i class="fal fa-search-location"></i></span>Sucursales</a></li>
    <li><a href="centrodeayuda.php"><span><i class="fal fa-question"></i></span>Centro de ayuda</a></li>
  </ul>
</div>

<div class="headerparte2">
  <ul>
    <li><div class="iconomenufixed"><i class="fal fa-bars"></i></div></li>
    <li><div class="logo"><h1><a href="index.php"><img src="img/logo.png" alt=""></a></h1></div></li>
    <li><div class="iconobuscador"><i class="fab fa-searchengin"></i></div></li>
    <li><input type="text" name="buscador" value="" placeholder="Busca productos, marcas, categorias..."></li>
    <li><div class="iconocarrito"><i class="fas fa-cart-plus"></i></div></li>
    <li><h3>¡Aprovechá las 18 cuotas sin interés!</h3></li>
    <?php if ($_SESSION): ?>
      <?php if ($_SESSION["tipodeusuario"] === "administrador"): ?>
        <li><h4><a href="gestordecontenidos/index.php">Gestor Inicio</a></h4></li>
      <?php endif; ?>
    <?php endif; ?>
  </ul>
</div>


<div class="headerparte3">
  <ul>


    <li><details>
      <summary>Categorias</summary>
      <ul>
        <li><h4>Tecnologia</h4></li>
        <li><h4>Electrodomesticos</h4></li>
        <li><h4>Casa y jardin</h4></li>
        <li><h4>Salud y Bellesa</h4></li>
        <li><h4>Bebes y Niños</h4></li>
        <li><h4>Deportes y Tiempo Libre</h4></li>
        <li><h4>Herramientas</h4></li>
        <li><h4>Acsesorios para Vehiculos</h4></li>
        <li><h4>Mas Categorias</h4></li>
      </ul>
    </details></li>

    <li><a href="#">Envio Gratis ¡impredible!</a></li>
    <li><a href="#">Beneficio Anses</a></li>
    <li><a href="ofertas.php">¡Ofertas BOMBA!</a></li>
    <?php if ($_SESSION): ?>
      <style>
        .mayuscula{
          text-transform: capitalize;
        }
      </style>
      <li><details>
        <summary class="mayuscula">Hola, <?=$_SESSION["nombre"]. " " .$_SESSION["apellido"]?></summary>
        <ul>
          <li><h3>Mi Cuenta</h3></li>
          <li><h4>Compras</h4></li>
          <li><h4>Datos</h4></li>
          <li><h4>Historial</h4></li>
          <li><h3><a href="componentes/cerrarsesion.php">Cerrar Sesion</a></h3></li>
        </ul>
      </details></li>
    <?php else: ?>
      <li class="iconoregistroheader"><a href="#">Registrate</a></li>
      <li class="iconosesionheader"><a href="#">Inicia Sesion</a></li>
    <?php endif; ?>
    <li class="iconomasgrande" ><a href="#"><span><i class="fas fa-heart"></i></span></a></li>
    <li class="iconomasgrande" ><a href="#"><span><i class="fab fa-whatsapp"></i></span></a></li>


  </ul>
</div>

</nav>
</header>
</div>
<?php require_once('menuizquierdofixed.php'); ?>
