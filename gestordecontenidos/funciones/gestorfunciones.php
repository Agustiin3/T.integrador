<?php
require_once('clases/Creartabla.php');

function recordardatos($i){
  if (isset($_POST[$i])) {
    return $_POST[$i];
  }
}

if ($_POST) {
  $creartabla = new creartabla($_POST);

  if ($creartabla->imprimirerrores("nombredelatabla") == null) {

    $metodoprimeracolumna = $creartabla->imprimirerrores("primeracolumnanombre") == null && $creartabla->imprimirerrores("primeracolumnacaracteres") == null;
    $metodosegundacolumna = $creartabla->imprimirerrores("segundacolumnanombre") == null && $creartabla->imprimirerrores("segundacolumnacaracteres") == null;
    $metodoterceracolumna = $creartabla->imprimirerrores("terceracolumnanombre") == null && $creartabla->imprimirerrores("terceracolumnacaracteres") == null;
    $metodocuartacolumna = $creartabla->imprimirerrores("cuartacolumnanombre") == null && $creartabla->imprimirerrores("cuartacolumnacaracteres") == null;
    $metodoquintacolumna = $creartabla->imprimirerrores("quintacolumnanombre") == null && $creartabla->imprimirerrores("quintacolumnacaracteres") == null;
    $metodosextacolumna = $creartabla->imprimirerrores("sextacolumnanombre") == null && $creartabla->imprimirerrores("sextacolumnacaracteres") == null;
    $metodoseptimacolumna = $creartabla->imprimirerrores("septimacolumnanombre") == null && $creartabla->imprimirerrores("septimacolumnacaracteres") == null;
    $metodooctavacolumna = $creartabla->imprimirerrores("octavacolumnanombre") == null && $creartabla->imprimirerrores("octavacolumnacaracteres") == null;
    $metodonovenacolumna = $creartabla->imprimirerrores("novenacolumnanombre") == null && $creartabla->imprimirerrores("novenacolumnacaracteres") == null;
    $metododecimacolumna = $creartabla->imprimirerrores("decimacolumnanombre") == null && $creartabla->imprimirerrores("decimacolumnacaracteres") == null;

    if (recordardatos("primeracolumna") && recordardatos("segundacolumna") && recordardatos("terceracolumna") && recordardatos("cuartacolumna") && recordardatos("quintacolumna") && recordardatos("sextacolumna") && recordardatos("septimacolumna") && recordardatos("octavacolumna") && recordardatos("novenacolumna") && recordardatos("decimacolumna")) {
      if ($metodoprimeracolumna && $metodosegundacolumna && $metodoterceracolumna && $metodocuartacolumna && $metodoquintacolumna && $metodosextacolumna && $metodoseptimacolumna && $metodooctavacolumna && $metodonovenacolumna && $metododecimacolumna) {
        $nuevatabla = $creartabla->creartabla();
        header("Location: index.php?mensaje=gracias");
        exit;
      }
    }elseif (recordardatos("primeracolumna") && recordardatos("segundacolumna") && recordardatos("terceracolumna") && recordardatos("cuartacolumna") && recordardatos("quintacolumna") && recordardatos("sextacolumna") && recordardatos("septimacolumna") && recordardatos("octavacolumna") && recordardatos("novenacolumna")) {
      if ($metodoprimeracolumna && $metodosegundacolumna && $metodoterceracolumna && $metodocuartacolumna && $metodoquintacolumna && $metodosextacolumna && $metodoseptimacolumna && $metodooctavacolumna && $metodonovenacolumna) {
        $nuevatabla = $creartabla->creartabla();
        header("Location: index.php?mensaje=gracias");
        exit;
      }
    }elseif (recordardatos("primeracolumna") && recordardatos("segundacolumna") && recordardatos("terceracolumna") && recordardatos("cuartacolumna") && recordardatos("quintacolumna") && recordardatos("sextacolumna") && recordardatos("septimacolumna") && recordardatos("octavacolumna")) {
      if ($metodoprimeracolumna && $metodosegundacolumna && $metodoterceracolumna && $metodocuartacolumna && $metodoquintacolumna && $metodosextacolumna && $metodoseptimacolumna && $metodooctavacolumna) {
        $nuevatabla = $creartabla->creartabla();
        header("Location: index.php?mensaje=gracias");
        exit;
      }
    }elseif (recordardatos("primeracolumna") && recordardatos("segundacolumna") && recordardatos("terceracolumna") && recordardatos("cuartacolumna") && recordardatos("quintacolumna") && recordardatos("sextacolumna") && recordardatos("septimacolumna")) {
      if ($metodoprimeracolumna && $metodosegundacolumna && $metodoterceracolumna && $metodocuartacolumna && $metodoquintacolumna && $metodosextacolumna && $metodoseptimacolumna) {
        $nuevatabla = $creartabla->creartabla();
        header("Location: index.php?mensaje=gracias");
        exit;
      }
    }elseif (recordardatos("primeracolumna") && recordardatos("segundacolumna") && recordardatos("terceracolumna") && recordardatos("cuartacolumna") && recordardatos("quintacolumna") && recordardatos("sextacolumna")) {
      if ($metodoprimeracolumna && $metodosegundacolumna && $metodoterceracolumna && $metodocuartacolumna && $metodoquintacolumna && $metodosextacolumna) {
        $nuevatabla = $creartabla->creartabla();
        header("Location: index.php?mensaje=gracias");
        exit;
      }
    }elseif (recordardatos("primeracolumna") && recordardatos("segundacolumna") && recordardatos("terceracolumna") && recordardatos("cuartacolumna") && recordardatos("quintacolumna")) {
      if ($metodoprimeracolumna && $metodosegundacolumna && $metodoterceracolumna && $metodocuartacolumna && $metodoquintacolumna) {
        $nuevatabla = $creartabla->creartabla();
        header("Location: index.php?mensaje=gracias");
        exit;
      }
    }elseif (recordardatos("primeracolumna") && recordardatos("segundacolumna") && recordardatos("terceracolumna") && recordardatos("cuartacolumna")) {
      if ($metodoprimeracolumna && $metodosegundacolumna && $metodoterceracolumna && $metodocuartacolumna) {
        $nuevatabla = $creartabla->creartabla();
        header("Location: index.php?mensaje=gracias");
        exit;
      }
    }elseif (recordardatos("primeracolumna") && recordardatos("segundacolumna") && recordardatos("terceracolumna")) {
      if ($metodoprimeracolumna && $metodosegundacolumna && $metodoterceracolumna) {
        $nuevatabla = $creartabla->creartabla();
        header("Location: index.php?mensaje=gracias");
        exit;
      }
    }elseif (recordardatos("primeracolumna") && recordardatos("segundacolumna")) {
      if ($metodoprimeracolumna && $metodosegundacolumna) {
        $nuevatabla = $creartabla->creartabla();
        header("Location: index.php?mensaje=gracias");
        exit;
      }
    }elseif (recordardatos("primeracolumna")) {
      if ($metodoprimeracolumna) {
        $nuevatabla2 = $creartabla->creartabla();
        header("Location: index.php?mensaje=gracias");
        exit;
      }
    }



  }
}
 ?>
