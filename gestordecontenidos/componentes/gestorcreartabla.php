<div class="creartabla">

    <form action="index.php" method="post">

      <h1><input type="text" class="bordenombredelatabla" name="nombredelatabla" value="<?=recordardatos("nombredelatabla")?>" placeholder="Nombre de la tabla"></h1>
      <?php if ($_POST): ?>
        <?=$creartabla->imprimirerrores("bordenombredelatabla")?>
        <?=$creartabla->imprimirerrores("errornombredelatabla")?>
        <p class="errornombredelatabla"><?=$creartabla->imprimirerrores("nombredelatabla")?></p>
      <?php endif; ?>
      <?php if (isset($_GET["mensaje"])): ?>
          <p class="mensajetablaexito">Tabla Creada Con Exito...</p>
      <?php endif; ?>

      <ul>

        <li>
          <ul>
            <li>
              <label for="primeracolumna">Activar Columna</label>
              <input type="checkbox" name="primeracolumna" value="activa" checked>
            </li>

            <li>
              <input type="text" class="bordeprimeracolumnanombre" name="primeracolumnanombre" value="<?=recordardatos("primeracolumnanombre")?>" placeholder="Nombre de la columna">
            <?php if ($_POST): ?>
              <?=$creartabla->imprimirerrores("bordeprimeracolumnanombre")?>
              <?=$creartabla->imprimirerrores("errorprimeracolumnanombre")?>
              <p class="errorprimeracolumnanombre"><?=$creartabla->imprimirerrores("primeracolumnanombre")?></p>
            <?php endif; ?>
            </li>

            <li>
              <select class="" name="primeracolumnatipodedato" value"INT">
                <optgroup label="Tipo De Datos">
                  <option value="VARCHAR">VARCHAR</option>
                  <option value="INT" <?php if (recordardatos("primeracolumnatipodedato") == "INT"): ?>
                    selected
                  <?php endif; ?>>INT</option>
                </optgroup>
              </select>
            </li>

            <li>
              <input type="text" class="bordeprimeracolumnacaracteres" name="primeracolumnacaracteres" value="<?=recordardatos("primeracolumnacaracteres")?>" placeholder="Caracteres">
              <?php if ($_POST): ?>
                <?=$creartabla->imprimirerrores("bordeprimeracolumnacaracteres")?>
                <?=$creartabla->imprimirerrores("errorprimeracolumnacaracteres")?>
                <p class="errorprimeracolumnacaracteres"><?=$creartabla->imprimirerrores("primeracolumnacaracteres")?></p>
              <?php endif; ?>
            </li>

            <li>
              <label for="primeracolumnanotnull">Columna Obligatoria</label>
              <input type="checkbox" name="primeracolumnanotnull" value="NOT NULL" <?php if (recordardatos("primeracolumnanotnull")): ?>
                checked
              <?php endif; ?>>
            </li>

            <li>
              <label for="primeracolumnaunique">Unico</label>
              <input type="checkbox" name="primeracolumnaunique" value="UNIQUE" <?php if (recordardatos("primeracolumnaunique")): ?>
                checked
              <?php endif; ?>>
            </li>
          </ul>
        </li>

        <li>
          <ul>
            <li>
              <label for="segundacolumna">Activar Columna</label>
              <input type="checkbox" name="segundacolumna" value="activa" <?php if (recordardatos("segundacolumna")): ?>
                checked
              <?php endif; ?>>
            </li>

            <li>
              <input type="text" class="bordesegundacolumnanombre" name="segundacolumnanombre" value="<?=recordardatos("segundacolumnanombre")?>" placeholder="Nombre de la columna">
            <?php if ($_POST): ?>
              <?=$creartabla->imprimirerrores("bordesegundacolumnanombre")?>
              <?=$creartabla->imprimirerrores("errorsegundacolumnanombre")?>
              <p class="errorsegundacolumnanombre"><?=$creartabla->imprimirerrores("segundacolumnanombre")?></p>
            <?php endif; ?>
            </li>

            <li>
              <select class="" name="segundacolumnatipodedato">
                <optgroup label="Tipo De Datos">
                  <option value="VARCHAR">VARCHAR</option>
                  <option value="INT" <?php if (recordardatos("segundacolumnatipodedato") == "INT"): ?>
                    selected
                  <?php endif; ?>>INT</option>
                </optgroup>
              </select>
            </li>

            <li>
              <input type="text" class="bordesegundacolumnacaracteres" name="segundacolumnacaracteres" value="<?=recordardatos("segundacolumnacaracteres")?>" placeholder="Caracteres">
              <?php if ($_POST): ?>
                <?=$creartabla->imprimirerrores("bordesegundacolumnacaracteres")?>
                <?=$creartabla->imprimirerrores("errorsegundacolumnacaracteres")?>
                <p class="errorsegundacolumnacaracteres"><?=$creartabla->imprimirerrores("segundacolumnacaracteres")?></p>
              <?php endif; ?>
            </li>

            <li>
              <label for="segundacolumnanotnull">Columna Obligatoria</label>
              <input type="checkbox" name="segundacolumnanotnull" value="NOT NULL" <?php if (recordardatos("segundacolumnanotnull")): ?>
                checked
              <?php endif; ?>>
            </li>

            <li>
              <label for="segundacolumnaunique">Unico</label>
              <input type="checkbox" name="segundacolumnaunique" value="UNIQUE" <?php if (recordardatos("segundacolumnaunique")): ?>
                checked
              <?php endif; ?>>
            </li>
          </ul>
        </li>

        <li>
          <ul>
            <li>
              <label for="terceracolumna">Activar Columna</label>
              <input type="checkbox" name="terceracolumna" value="activa" <?php if (recordardatos("terceracolumna")): ?>
                checked
              <?php endif; ?>>
            </li>

            <li>
              <input type="text" class="bordeterceracolumnanombre" name="terceracolumnanombre" value="<?=recordardatos("terceracolumnanombre")?>" placeholder="Nombre de la columna">
            <?php if ($_POST): ?>
              <?=$creartabla->imprimirerrores("bordeterceracolumnanombre")?>
              <?=$creartabla->imprimirerrores("errorterceracolumnanombre")?>
              <p class="errorterceracolumnanombre"><?=$creartabla->imprimirerrores("terceracolumnanombre")?></p>
            <?php endif; ?>
            </li>

            <li>
              <select class="" name="terceracolumnatipodedato">
                <optgroup label="Tipo De Datos">
                  <option value="VARCHAR">VARCHAR</option>
                  <option value="INT" <?php if (recordardatos("terceracolumnatipodedato") == "INT"): ?>
                    selected
                  <?php endif; ?>>INT</option>
                </optgroup>
              </select>
            </li>

            <li>
              <input type="text" class="bordeterceracolumnacaracteres" name="terceracolumnacaracteres" value="<?=recordardatos("terceracolumnacaracteres")?>" placeholder="Caracteres">
              <?php if ($_POST): ?>
                <?=$creartabla->imprimirerrores("bordeterceracolumnacaracteres")?>
                <?=$creartabla->imprimirerrores("errorterceracolumnacaracteres")?>
                <p class="errorterceracolumnacaracteres"><?=$creartabla->imprimirerrores("terceracolumnacaracteres")?></p>
              <?php endif; ?>
            </li>

            <li>
              <label for="terceracolumnanotnull">Columna Obligatoria</label>
              <input type="checkbox" name="terceracolumnanotnull" value="NOT NULL" <?php if (recordardatos("terceracolumnanotnull")): ?>
                checked
              <?php endif; ?>>
            </li>

            <li>
              <label for="terceracolumnaunique">Unico</label>
              <input type="checkbox" name="terceracolumnaunique" value="UNIQUE" <?php if (recordardatos("terceracolumnaunique")): ?>
                checked
              <?php endif; ?>>
            </li>
          </ul>
        </li>

        <li>
          <ul>
            <li>
              <label for="cuartacolumna">Activar Columna</label>
              <input type="checkbox" name="cuartacolumna" value="activa" <?php if (recordardatos("cuartacolumna")): ?>
                checked
              <?php endif; ?>>
            </li>

            <li>
              <input type="text" class="bordecuartacolumnanombre" name="cuartacolumnanombre" value="<?=recordardatos("cuartacolumnanombre")?>" placeholder="Nombre de la columna">
            <?php if ($_POST): ?>
              <?=$creartabla->imprimirerrores("bordecuartacolumnanombre")?>
              <?=$creartabla->imprimirerrores("errorcuartacolumnanombre")?>
              <p class="errorcuartacolumnanombre"><?=$creartabla->imprimirerrores("cuartacolumnanombre")?></p>
            <?php endif; ?>
            </li>

            <li>
              <select class="" name="cuartacolumnatipodedato">
                <optgroup label="Tipo De Datos">
                  <option value="VARCHAR">VARCHAR</option>
                  <option value="INT" <?php if (recordardatos("cuartacolumnatipodedato") == "INT"): ?>
                    selected
                  <?php endif; ?>>INT</option>
                </optgroup>
              </select>
            </li>

            <li>
              <input type="text" class="bordecuartacolumnacaracteres" name="cuartacolumnacaracteres" value="<?=recordardatos("cuartacolumnacaracteres")?>" placeholder="Caracteres">
              <?php if ($_POST): ?>
                <?=$creartabla->imprimirerrores("bordecuartacolumnacaracteres")?>
                <?=$creartabla->imprimirerrores("errorcuartacolumnacaracteres")?>
                <p class="errorcuartacolumnacaracteres"><?=$creartabla->imprimirerrores("cuartacolumnacaracteres")?></p>
              <?php endif; ?>
            </li>

            <li>
              <label for="cuartacolumnanotnull">Columna Obligatoria</label>
              <input type="checkbox" name="cuartacolumnanotnull" value="NOT NULL" <?php if (recordardatos("cuartacolumnanotnull")): ?>
                checked
              <?php endif; ?>>
            </li>

            <li>
              <label for="cuartacolumnaunique">Unico</label>
              <input type="checkbox" name="cuartacolumnaunique" value="UNIQUE" <?php if (recordardatos("cuartacolumnaunique")): ?>
                checked
              <?php endif; ?>>
            </li>
          </ul>
        </li>

        <li>
          <ul>
            <li>
              <label for="quintacolumna">Activar Columna</label>
              <input type="checkbox" name="quintacolumna" value="activa" <?php if (recordardatos("quintacolumna")): ?>
                checked
              <?php endif; ?>>
            </li>

            <li>
              <input type="text" class="bordequintacolumnanombre" name="quintacolumnanombre" value="<?=recordardatos("quintacolumnanombre")?>" placeholder="Nombre de la columna">
            <?php if ($_POST): ?>
              <?=$creartabla->imprimirerrores("bordequintacolumnanombre")?>
              <?=$creartabla->imprimirerrores("errorquintacolumnanombre")?>
              <p class="errorquintacolumnanombre"><?=$creartabla->imprimirerrores("quintacolumnanombre")?></p>
            <?php endif; ?>
            </li>

            <li>
              <select class="" name="quintacolumnatipodedato">
                <optgroup label="Tipo De Datos">
                  <option value="VARCHAR">VARCHAR</option>
                  <option value="INT" <?php if (recordardatos("quintacolumnatipodedato") == "INT"): ?>
                    selected
                  <?php endif; ?>>INT</option>
                </optgroup>
              </select>
            </li>

            <li>
              <input type="text" class="bordequintacolumnacaracteres" name="quintacolumnacaracteres" value="<?=recordardatos("quintacolumnacaracteres")?>" placeholder="Caracteres">
              <?php if ($_POST): ?>
                <?=$creartabla->imprimirerrores("bordequintacolumnacaracteres")?>
                <?=$creartabla->imprimirerrores("errorquintacolumnacaracteres")?>
                <p class="errorquintacolumnacaracteres"><?=$creartabla->imprimirerrores("quintacolumnacaracteres")?></p>
              <?php endif; ?>
            </li>

            <li>
              <label for="quintacolumnanotnull">Columba Obligatoria</label>
              <input type="checkbox" name="quintacolumnanotnull" value="NOT NULL" <?php if (recordardatos("quintacolumnanotnull")): ?>
                checked
              <?php endif; ?>>
            </li>

            <li>
              <label for="quintacolumnaunique">Unico</label>
              <input type="checkbox" name="quintacolumnaunique" value="UNIQUE" <?php if (recordardatos("quintacolumnaunique")): ?>
                checked
              <?php endif; ?>>
            </li>
          </ul>
        </li>

        <li>
          <ul>
            <li>
              <label for="sextacolumna">Activar Columna</label>
              <input type="checkbox" name="sextacolumna" value="activa" <?php if (recordardatos("sextacolumna")): ?>
                checked
              <?php endif; ?>>
            </li>

            <li>
              <input type="text" class="bordesextacolumnanombre" name="sextacolumnanombre" value="<?=recordardatos("sextacolumnanombre")?>" placeholder="Nombre de la columna">
            <?php if ($_POST): ?>
              <?=$creartabla->imprimirerrores("bordesextacolumnanombre")?>
              <?=$creartabla->imprimirerrores("errorsextacolumnanombre")?>
              <p class="errorsextacolumnanombre"><?=$creartabla->imprimirerrores("sextacolumnanombre")?></p>
            <?php endif; ?>
            </li>

            <li>
              <select class="" name="sextacolumnatipodedato">
                <optgroup label="Tipo De Datos">
                  <option value="VARCHAR">VARCHAR</option>
                  <option value="INT" <?php if (recordardatos("sextacolumnatipodedato") == "INT"): ?>
                    selected
                  <?php endif; ?>>INT</option>
                </optgroup>
              </select>
            </li>

            <li>
              <input type="text" class="bordesextacolumnacaracteres" name="sextacolumnacaracteres" value="<?=recordardatos("sextacolumnacaracteres")?>" placeholder="Caracteres">
              <?php if ($_POST): ?>
                <?=$creartabla->imprimirerrores("bordesextacolumnacaracteres")?>
                <?=$creartabla->imprimirerrores("errorsextacolumnacaracteres")?>
                <p class="errorsextacolumnacaracteres"><?=$creartabla->imprimirerrores("sextacolumnacaracteres")?></p>
              <?php endif; ?>
            </li>

            <li>
              <label for="sextacolumnanotnull">Columna Obligatoria</label>
              <input type="checkbox" name="sextacolumnanotnull" value="NOT NULL" <?php if (recordardatos("sextacolumnanotnull")): ?>
                checked
              <?php endif; ?>>
            </li>

            <li>
              <label for="sextacolumnaunique">Unico</label>
              <input type="checkbox" name="sextacolumnaunique" value="UNIQUE" <?php if (recordardatos("sextacolumnaunique")): ?>
                checked
              <?php endif; ?>>
            </li>
          </ul>
        </li>

        <li>
          <ul>
            <li>
              <label for="septimacolumna">Activar Columna</label>
              <input type="checkbox" name="septimacolumna" value="activa" <?php if (recordardatos("septimacolumna")): ?>
                checked
              <?php endif; ?>>
            </li>

            <li>
              <input type="text" class="bordeseptimacolumnanombre" name="septimacolumnanombre" value="<?=recordardatos("septimacolumnanombre")?>" placeholder="Nombre de la columna">
            <?php if ($_POST): ?>
              <?=$creartabla->imprimirerrores("bordeseptimacolumnanombre")?>
              <?=$creartabla->imprimirerrores("errorseptimacolumnanombre")?>
              <p class="errorseptimacolumnanombre"><?=$creartabla->imprimirerrores("septimacolumnanombre")?></p>
            <?php endif; ?>
            </li>

            <li>
              <select class="" name="septimacolumnatipodedato" value"INT">
                <optgroup label="Tipo De Datos">
                  <option value="VARCHAR">VARCHAR</option>
                  <option value="INT" <?php if (recordardatos("septimacolumnatipodedato") == "INT"): ?>
                    selected
                  <?php endif; ?>>INT</option>
                </optgroup>
              </select>
            </li>

            <li>
              <input type="text" class="bordeseptimacolumnacaracteres" name="septimacolumnacaracteres" value="<?=recordardatos("septimacolumnacaracteres")?>" placeholder="Caracteres">
              <?php if ($_POST): ?>
                <?=$creartabla->imprimirerrores("bordeseptimacolumnacaracteres")?>
                <?=$creartabla->imprimirerrores("errorseptimacolumnacaracteres")?>
                <p class="errorseptimacolumnacaracteres"><?=$creartabla->imprimirerrores("septimacolumnacaracteres")?></p>
              <?php endif; ?>
            </li>

            <li>
              <label for="septimacolumnanotnull">Columna Obligatoria</label>
              <input type="checkbox" name="septimacolumnanotnull" value="NOT NULL" <?php if (recordardatos("septimacolumnanotnull")): ?>
                checked
              <?php endif; ?>>
            </li>

            <li>
              <label for="septimacolumnaunique">Unico</label>
              <input type="checkbox" name="septimacolumnaunique" value="UNIQUE" <?php if (recordardatos("septimacolumnaunique")): ?>
                checked
              <?php endif; ?>>
            </li>
          </ul>
        </li>

        <li>
          <ul>
            <li>
              <label for="octavacolumna">Activar Columna</label>
              <input type="checkbox" name="octavacolumna" value="activa" <?php if (recordardatos("octavacolumna")): ?>
                checked
              <?php endif; ?>>
            </li>

            <li>
              <input type="text" class="bordeoctavacolumnanombre" name="octavacolumnanombre" value="<?=recordardatos("octavacolumnanombre")?>" placeholder="Nombre de la columna">
            <?php if ($_POST): ?>
              <?=$creartabla->imprimirerrores("bordeoctavacolumnanombre")?>
              <?=$creartabla->imprimirerrores("erroroctavacolumnanombre")?>
              <p class="erroroctavacolumnanombre"><?=$creartabla->imprimirerrores("octavacolumnanombre")?></p>
            <?php endif; ?>
            </li>

            <li>
              <select class="" name="octavacolumnatipodedato" value"INT">
                <optgroup label="Tipo De Datos">
                  <option value="VARCHAR">VARCHAR</option>
                  <option value="INT" <?php if (recordardatos("octavacolumnatipodedato") == "INT"): ?>
                    selected
                  <?php endif; ?>>INT</option>
                </optgroup>
              </select>
            </li>

            <li>
              <input type="text" class="bordeoctavacolumnacaracteres" name="octavacolumnacaracteres" value="<?=recordardatos("octavacolumnacaracteres")?>" placeholder="Caracteres">
              <?php if ($_POST): ?>
                <?=$creartabla->imprimirerrores("bordeoctavacolumnacaracteres")?>
                <?=$creartabla->imprimirerrores("erroroctavacolumnacaracteres")?>
                <p class="erroroctavacolumnacaracteres"><?=$creartabla->imprimirerrores("octavacolumnacaracteres")?></p>
              <?php endif; ?>
            </li>

            <li>
              <label for="octavacolumnanotnull">Columna Obligatoria</label>
              <input type="checkbox" name="octavacolumnanotnull" value="NOT NULL" <?php if (recordardatos("octavacolumnanotnull")): ?>
                checked
              <?php endif; ?>>
            </li>

            <li>
              <label for="octavacolumnaunique">Unico</label>
              <input type="checkbox" name="octavacolumnaunique" value="UNIQUE" <?php if (recordardatos("octavacolumnaunique")): ?>
                checked
              <?php endif; ?>>
            </li>
          </ul>
        </li>

        <li>
          <ul>
            <li>
              <label for="novenacolumna">Activar Columna</label>
              <input type="checkbox" name="novenacolumna" value="activa" <?php if (recordardatos("novenacolumna")): ?>
                checked
              <?php endif; ?>>
            </li>

            <li>
              <input type="text" class="bordenovenacolumnanombre" name="novenacolumnanombre" value="<?=recordardatos("novenacolumnanombre")?>" placeholder="Nombre de la columna">
            <?php if ($_POST): ?>
              <?=$creartabla->imprimirerrores("bordenovenacolumnanombre")?>
              <?=$creartabla->imprimirerrores("errornovenacolumnanombre")?>
              <p class="errornovenacolumnanombre"><?=$creartabla->imprimirerrores("novenacolumnanombre")?></p>
            <?php endif; ?>
            </li>

            <li>
              <select class="" name="novenacolumnatipodedato" value"INT">
                <optgroup label="Tipo De Datos">
                  <option value="VARCHAR">VARCHAR</option>
                  <option value="INT" <?php if (recordardatos("novenacolumnatipodedato") == "INT"): ?>
                    selected
                  <?php endif; ?>>INT</option>
                </optgroup>
              </select>
            </li>

            <li>
              <input type="text" class="bordenovenacolumnacaracteres" name="novenacolumnacaracteres" value="<?=recordardatos("novenacolumnacaracteres")?>" placeholder="Caracteres">
              <?php if ($_POST): ?>
                <?=$creartabla->imprimirerrores("bordenovenacolumnacaracteres")?>
                <?=$creartabla->imprimirerrores("errornovenacolumnacaracteres")?>
                <p class="errornovenacolumnacaracteres"><?=$creartabla->imprimirerrores("novenacolumnacaracteres")?></p>
              <?php endif; ?>
            </li>

            <li>
              <label for="novenacolumnanotnull">Columna Obligatoria</label>
              <input type="checkbox" name="novenacolumnanotnull" value="NOT NULL" <?php if (recordardatos("novenacolumnanotnull")): ?>
                checked
              <?php endif; ?>>
            </li>

            <li>
              <label for="novenacolumnaunique">Unico</label>
              <input type="checkbox" name="novenacolumnaunique" value="UNIQUE" <?php if (recordardatos("novenacolumnaunique")): ?>
                checked
              <?php endif; ?>>
            </li>
          </ul>
        </li>

        <li>
          <ul>
            <li>
              <label for="decimacolumna">Activar Columna</label>
              <input type="checkbox" name="decimacolumna" value="activa" <?php if (recordardatos("decimacolumna")): ?>
                checked
              <?php endif; ?>>
            </li>

            <li>
              <input type="text" class="bordedecimacolumnanombre" name="decimacolumnanombre" value="<?=recordardatos("decimacolumnanombre")?>" placeholder="Nombre de la columna">
            <?php if ($_POST): ?>
              <?=$creartabla->imprimirerrores("bordedecimacolumnanombre")?>
              <?=$creartabla->imprimirerrores("errordecimacolumnanombre")?>
              <p class="errordecimacolumnanombre"><?=$creartabla->imprimirerrores("decimacolumnanombre")?></p>
            <?php endif; ?>
            </li>

            <li>
              <select class="" name="decimacolumnatipodedato" value"INT">
                <optgroup label="Tipo De Datos">
                  <option value="VARCHAR">VARCHAR</option>
                  <option value="INT" <?php if (recordardatos("decimacolumnatipodedato") == "INT"): ?>
                    selected
                  <?php endif; ?>>INT</option>
                </optgroup>
              </select>
            </li>

            <li>
              <input type="text" class="bordedecimacolumnacaracteres" name="decimacolumnacaracteres" value="<?=recordardatos("decimacolumnacaracteres")?>" placeholder="Caracteres">
              <?php if ($_POST): ?>
                <?=$creartabla->imprimirerrores("bordedecimacolumnacaracteres")?>
                <?=$creartabla->imprimirerrores("errordecimacolumnacaracteres")?>
                <p class="errordecimacolumnacaracteres"><?=$creartabla->imprimirerrores("decimacolumnacaracteres")?></p>
              <?php endif; ?>
            </li>

            <li>
              <label for="decimacolumnanotnull">Columna Obligatoria</label>
              <input type="checkbox" name="decimacolumnanotnull" value="NOT NULL" <?php if (recordardatos("decimacolumnanotnull")): ?>
                checked
              <?php endif; ?>>
            </li>

            <li>
              <label for="decimacolumnaunique">Unico</label>
              <input type="checkbox" name="decimacolumnaunique" value="UNIQUE" <?php if (recordardatos("decimacolumnaunique")): ?>
                checked
              <?php endif; ?>>
            </li>
          </ul>
        </li>




        <button type="submit" name="button">Crear Tabla</button>
      </ul>
    </form>
  </div>
