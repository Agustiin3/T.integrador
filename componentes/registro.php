<div class="registro">

  <div class="registroprimeraparte">
<form action="#" method="post" enctype="multipart/form-data">
  <div class="iconoregistrocerrar"><i class="fal fa-window-close"></i></div>
  <h1 class="titulo">REGISTRATE</h1>
 <ul>
    <li>
      <label for="nombre">Nombre</label>
      <?php if ($metodoparatraerregistro): ?>
        <?=$usuario->imprimirerrores("bordenombre")?>
        <?=$usuario->imprimirerrores("mensajeerrornombre")?>
      <?php endif; ?>
      <input class="bordenombre" type="text" name="nombre" value="<?=recordardatos("nombre")?>">
      <span class="mensajeerrornombre"><?php if ($metodoparatraerregistro): ?>
        <?=$usuario->imprimirerrores("nombre")?>
      <?php endif; ?></span>
    </li>

    <li>
      <label for="apellido">Apellido</label>
      <?php if ($metodoparatraerregistro): ?>
      <?=$usuario->imprimirerrores("bordeapellido")?>
      <?=$usuario->imprimirerrores("mensajeerrorapellido")?>
      <?php endif; ?>
      <input class="bordeapellido" type="text" name="apellido" value="<?=recordardatos("apellido")?>">
      <span class="mensajeerrorapellido"><?php if ($metodoparatraerregistro): ?>
        <?=$usuario->imprimirerrores("apellido")?>
      <?php endif; ?></span>
    </li>

    <li>
      <label for="email">Email</label>
      <?php if ($metodoparatraerregistro): ?>
      <?=$usuario->imprimirerrores("bordeemail")?>
      <?=$usuario->imprimirerrores("mensajeerroremail")?>
      <?php endif; ?>
      <input class="bordeemail" type="text" name="email" value="<?=recordardatos("email")?>">
      <span class="mensajeerroremail"><?php if ($metodoparatraerregistro): ?>
        <?=$usuario->imprimirerrores("email")?>
      <?php endif; ?></span>
    </li>

    <li>
      <label for="contraseña">Contraseña</label>
      <?php if ($metodoparatraerregistro): ?>
      <?=$usuario->imprimirerrores("bordecontrasena")?>
      <?=$usuario->imprimirerrores("mensajeerrorcontrasena")?>
      <?php endif; ?>
      <input class="bordecontrasena" type="password" name="contrasena" value="<?=recordardatos("contrasena")?>">
      <span class="mensajeerrorcontrasena"><?php if ($metodoparatraerregistro): ?>
        <?=$usuario->imprimirerrores("contrasena")?>
      <?php endif; ?></span>
    </li>

    <li>
      <label for="contraseña">Repetir Contraseña</label>
      <?php if ($metodoparatraerregistro): ?>
      <?=$usuario->imprimirerrores("bordecontrasena2")?>
      <?=$usuario->imprimirerrores("mensajeerrorcontrasena2")?>
      <?php endif; ?>
      <input class="bordecontrasena2" type="password" name="contrasena2" value="<?=recordardatos("contrasena2")?>">
      <span class="mensajeerrorcontrasena2"><?php if ($metodoparatraerregistro): ?>
        <?=$usuario->imprimirerrores("contrasena2")?>
      <?php endif; ?></span>
    </li>

    <li>
      <label for="foto">Carga una foto de perfil (Obligatorio)</label>
      <?php if ($metodoparatraerregistro): ?>
        <?=$usuario->imprimirerrores("bordefoto")?>
        <?=$usuario->imprimirerrores("mensajeerrorfoto")?>
      <?php endif; ?>
      <input class="bordefoto" type="file" name="foto">
      <span class="mensajeerrorfoto"><?php if ($metodoparatraerregistro): ?>
        <?=$usuario->imprimirerrores("foto")?></span>
      <?php endif; ?>
    </li>

    <button type="submit" name="submit">CREAR CUENTA</button>
  </ul>
 </form>

<button class="segundo" type="button" name="button">REGISTRATE CON FACEBOOK</button>
</div>

<div class="registrasegundaparte">
 <img src="img/registro.svg" alt="registro.svg">

  <h1>Que podes hacer en tu cuenta?</h1>

      <ul>
        <li>
            <p><span> ✓ </span>Consultar el estado de tus compras.</p>
         </li>

         <li>
            <p> <span> ✓ </span>Administrar tus productos favoritos.</p>
         </li>

         <li>
            <p><span> ✓ </span>Descargar las facturas.</p>
         </li>

         <li>
            <p><span> ✓ </span>Definir tus preferencias e intereses.</p>
         </li>

         <li>
            <p><span> ✓ </span>Retomar tus compras incompletas.</p>
         </li>
       </ul>
     </div>
</div>
