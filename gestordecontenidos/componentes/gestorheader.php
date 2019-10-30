<div class="gestorheader">
<header>
 <nav>
  <ul>
    <li><a href="index.php">Gestor Inicio</a></li>
    <li><a href="../index.php">Pagina Principal</a></li>
    <li>
      <details>
        <summary class="mayuscula">Bienvenido, <?=$_SESSION["nombre"]. " " .$_SESSION["apellido"]?></summary>
        <ul>
          <li><h3><a href="../componentes/cerrarsesion.php">Cerrar Sesion</a></h3></li>
        </ul>
      </details>
    </li>
  </ul>
 </nav>
</header>
</div>
