<div class="sesion">
    <main>
      <section>
        <div class="iconosesioncerrar"><i class="fal fa-window-close"></i></div>
        <h1>Iniciar Sesion</h1>
        <form class="sesion2" action="#" method="post">
          <ul>

            <li>
              <input type="text" name="emaillogin" placeholder="Ingrese Su Correo" value="<?=recordarlogin("email")?>">
            </li>

            <li>
              <input type="password" name="contrasenalogin" placeholder="Contraseña" value="<?=recordarlogin("contrasena")?>">
            </li>

            <li>
              <?php if ($metodoparatraerlogin): ?>
                <?=$usuariologin->imprimirerrores("mensajeerrorlogin")?>
              <?php endif; ?>
              <span class="mensajeerrorlogin"><?php if ($metodoparatraerlogin): ?>
                <?=$usuariologin->imprimirerrores("emaillogin")?><?=$usuariologin->imprimirerrores("contrasenalogin")?>
              <?php endif; ?></span>
              <button class="enviar" type="submit" name="enviar">Entrar</button>
            </li>

            <li>
              <p><input class="recordar" type="checkbox" name="recordarusuario" value="recordar"><span>Recordar Usuario</span></p>
            </li>
          </ul>
          </form>
          <h2 class="iconoregistroensesion">Registrate</h2>
        </section>
       </main>
  </div>
