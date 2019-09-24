<div class="registro">

  <div class="registroprimeraparte">
<form action="#" method="post" enctype="multipart/form-data">
  <div class="iconoregistrocerrar"><i class="fal fa-window-close"></i></div>
  <h1 class="titulo">REGISTRATE</h1>
 <ul>
    <li>
      <label for="nombre">Nombre</label>
      <?=imprimirerrores("bordenombre")?>
      <?=imprimirerrores("mensajeerrornombre")?>
      <input class="bordenombre" type="text" name="nombre" value="<?=recordardatos("nombre")?>">
      <span class="mensajeerrornombre"><?=imprimirerrores("nombre")?></span>
    </li>

    <li>
      <label for="apellido">Apellido</label>
      <?=imprimirerrores("bordeapellido")?>
      <?=imprimirerrores("mensajeerrorapellido")?>
      <input class="borde" type="text" name="apellido" value="<?=recordardatos("apellido")?>">
      <span class="mensajeerrorapellido"><?=imprimirerrores("apellido")?></span>
    </li>

    <li>
      <label for="email">Email</label>
      <?=imprimirerrores("bordeemail")?>
      <?=imprimirerrores("mensajeerroremail")?>
      <input class="bordeemail" type="text" name="email" value="<?=recordardatos("email")?>">
      <span class="mensajeerroremail"><?=imprimirerrores("email")?></span>
    </li>

    <li>
      <label for="contraseña">Contraseña</label>
      <?=imprimirerrores("bordecontraseña")?>
      <?=imprimirerrores("mensajeerrorcontraseña")?>
      <input class="bordecontraseña" type="password" name="contraseña" value="<?=recordardatos("contraseña")?>">
      <span class="mensajeerrorcontraseña"><?=imprimirerrores("contraseña")?></span>
    </li>

    <li>
      <label for="contraseña">Repetir Contraseña</label>
      <?=imprimirerrores("bordecontraseña2")?>
      <?=imprimirerrores("mensajeerrorcontraseña2")?>
      <input class="bordecontraseña2" type="password" name="contraseña2" value="<?=recordardatos("contraseña2")?>">
      <span class="mensajeerrorcontraseña2"><?=imprimirerrores("contraseña2")?></span>
    </li>

    <li>
      <label for="foto">Carga una foto de perfil (Obligatorio)</label>
      <?=imprimirerrores("bordefoto")?>
      <?=imprimirerrores("mensajeerrorfoto")?>
      <input class="bordefoto" type="file" name="foto">
      <span class="mensajeerrorfoto"><?=imprimirerrores("foto")?></span>
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
