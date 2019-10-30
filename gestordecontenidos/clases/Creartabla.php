<?php

class creartabla
{
  private $nombredelatabla;

  private $primeracolumna;
  private $primeracolumnanombre;
  private $primeracolumnatipodedato;
  private $primeracolumnacaracteres;
  private $primeracolumnanotnull;
  private $primeracolumnaunique;

  private $segundacolumna;
  private $segundacolumnanombre;
  private $segundacolumnatipodedato;
  private $segundacolumnacaracteres;
  private $segundacolumnanotnull;
  private $segundacolumnaunique;

  private $terceracolumna;
  private $terceracolumnanombre;
  private $terceracolumnatipodedato;
  private $terceracolumnacaracteres;
  private $terceracolumnanotnull;
  private $terceracolumnaunique;

  private $cuartacolumna;
  private $cuartacolumnanombre;
  private $cuartacolumnatipodedato;
  private $cuartacolumnacaracteres;
  private $cuartacolumnanotnull;
  private $cuartacolumnaunique;

  private $quintacolumna;
  private $quintacolumnanombre;
  private $quintacolumnatipodedato;
  private $quintacolumnacaracteres;
  private $quintacolumnanotnull;
  private $quintacolumnaunique;

  private $sextacolumna;
  private $sextacolumnanombre;
  private $sextacolumnatipodedato;
  private $sextacolumnacaracteres;
  private $sextacolumnanotnull;
  private $sextacolumnaunique;

  private $septimacolumna;
  private $septimacolumnanombre;
  private $septimacolumnatipodedato;
  private $septimacolumnacaracteres;
  private $septimacolumnanotnull;
  private $septimacolumnaunique;

  private $octavacolumna;
  private $octavacolumnanombre;
  private $octavacolumnatipodedato;
  private $octavacolumnacaracteres;
  private $octavacolumnanotnull;
  private $octavacolumnaunique;

  private $novenacolumna;
  private $novenacolumnanombre;
  private $novenacolumnatipodedato;
  private $novenacolumnacaracteres;
  private $novenacolumnanotnull;
  private $novenacolumnaunique;

  private $decimacolumna;
  private $decimacolumnanombre;
  private $decimacolumnatipodedato;
  private $decimacolumnacaracteres;
  private $decimacolumnanotnull;
  private $decimacolumnaunique;

  function __construct($post)
  {
    if (isset($post["nombredelatabla"])) {
      $this->nombredelatabla = $post["nombredelatabla"];
    }

    if (isset($post["primeracolumna"])) {
      $this->primeracolumna = $post["primeracolumna"];
    }

    if (isset($this->primeracolumna)) {
      $this->primeracolumnanombre = $post["primeracolumnanombre"];
      $this->primeracolumnatipodedato = $post["primeracolumnatipodedato"];
      $this->primeracolumnacaracteres = $post["primeracolumnacaracteres"];
      if (isset($post["primeracolumnanotnull"])) {
        $this->primeracolumnanotnull = $post["primeracolumnanotnull"];
      }
      if (isset($post["primeracolumnaunique"])) {
        $this->primeracolumnaunique = $post["primeracolumnaunique"];
      }
    }

    if (isset($post["segundacolumna"])) {
      $this->segundacolumna = $post["segundacolumna"];
    }

    if (isset($this->segundacolumna)) {
      $this->segundacolumnanombre = $post["segundacolumnanombre"];
      $this->segundacolumnatipodedato = $post["segundacolumnatipodedato"];
      $this->segundacolumnacaracteres = $post["segundacolumnacaracteres"];
      if (isset($post["segundacolumnanotnull"])) {
        $this->segundacolumnanotnull = $post["segundacolumnanotnull"];
      }
      if (isset($post["segundacolumnaunique"])) {
        $this->segundacolumnaunique = $post["segundacolumnaunique"];
      }
    }

    if (isset($post["terceracolumna"])) {
      $this->terceracolumna = $post["terceracolumna"];
    }

    if (isset($this->terceracolumna)) {
      $this->terceracolumnanombre = $post["terceracolumnanombre"];
      $this->terceracolumnatipodedato = $post["terceracolumnatipodedato"];
      $this->terceracolumnacaracteres = $post["terceracolumnacaracteres"];
      if (isset($post["terceracolumnanotnull"])) {
        $this->terceracolumnanotnull = $post["terceracolumnanotnull"];
      }
      if (isset($post["terceracolumnaunique"])) {
        $this->terceracolumnaunique = $post["terceracolumnaunique"];
      }
    }

    if (isset($post["cuartacolumna"])) {
      $this->cuartacolumna = $post["cuartacolumna"];
    }

    if (isset($this->cuartacolumna)) {
      $this->cuartacolumnanombre = $post["cuartacolumnanombre"];
      $this->cuartacolumnatipodedato = $post["cuartacolumnatipodedato"];
      $this->cuartacolumnacaracteres = $post["cuartacolumnacaracteres"];
      if (isset($post["cuartacolumnanotnull"])) {
        $this->cuartacolumnanotnull = $post["cuartacolumnanotnull"];
      }
      if (isset($post["cuartacolumnaunique"])) {
        $this->cuartacolumnaunique = $post["cuartacolumnaunique"];
      }
    }

    if (isset($post["quintacolumna"])) {
      $this->quintacolumna = $post["quintacolumna"];
    }

    if (isset($this->quintacolumna)) {
      $this->quintacolumnanombre = $post["quintacolumnanombre"];
      $this->quintacolumnatipodedato = $post["quintacolumnatipodedato"];
      $this->quintacolumnacaracteres = $post["quintacolumnacaracteres"];
      if (isset($post["quintacolumnanotnull"])) {
        $this->quintacolumnanotnull = $post["quintacolumnanotnull"];
      }
      if (isset($post["quintacolumnaunique"])) {
        $this->quintacolumnaunique = $post["quintacolumnaunique"];
      }
    }

    if (isset($post["sextacolumna"])) {
      $this->sextacolumna = $post["sextacolumna"];
    }

    if (isset($this->sextacolumna)) {
      $this->sextacolumnanombre = $post["sextacolumnanombre"];
      $this->sextacolumnatipodedato = $post["sextacolumnatipodedato"];
      $this->sextacolumnacaracteres = $post["sextacolumnacaracteres"];
      if (isset($post["sextacolumnanotnull"])) {
        $this->sextacolumnanotnull = $post["sextacolumnanotnull"];
      }
      if (isset($post["sextacolumnaunique"])) {
        $this->sextacolumnaunique = $post["sextacolumnaunique"];
      }
    }

    if (isset($post["septimacolumna"])) {
      $this->septimacolumna = $post["septimacolumna"];
    }

    if (isset($this->septimacolumna)) {
      $this->septimacolumnanombre = $post["septimacolumnanombre"];
      $this->septimacolumnatipodedato = $post["septimacolumnatipodedato"];
      $this->septimacolumnacaracteres = $post["septimacolumnacaracteres"];
      if (isset($post["septimacolumnanotnull"])) {
        $this->septimacolumnanotnull = $post["septimacolumnanotnull"];
      }
      if (isset($post["septimacolumnaunique"])) {
        $this->septimacolumnaunique = $post["septimacolumnaunique"];
      }
    }

    if (isset($post["octavacolumna"])) {
      $this->octavacolumna = $post["octavacolumna"];
    }

    if (isset($this->octavacolumna)) {
      $this->octavacolumnanombre = $post["octavacolumnanombre"];
      $this->octavacolumnatipodedato = $post["octavacolumnatipodedato"];
      $this->octavacolumnacaracteres = $post["octavacolumnacaracteres"];
      if (isset($post["octavacolumnanotnull"])) {
        $this->octavacolumnanotnull = $post["octavacolumnanotnull"];
      }
      if (isset($post["octavacolumnaunique"])) {
        $this->octavacolumnaunique = $post["octavacolumnaunique"];
      }
    }

    if (isset($post["novenacolumna"])) {
      $this->novenacolumna = $post["novenacolumna"];
    }

    if (isset($this->novenacolumna)) {
      $this->novenacolumnanombre = $post["novenacolumnanombre"];
      $this->novenacolumnatipodedato = $post["novenacolumnatipodedato"];
      $this->novenacolumnacaracteres = $post["novenacolumnacaracteres"];
      if (isset($post["novenacolumnanotnull"])) {
        $this->novenacolumnanotnull = $post["novenacolumnanotnull"];
      }
      if (isset($post["novenacolumnaunique"])) {
        $this->novenacolumnaunique = $post["novenacolumnaunique"];
      }
    }

    if (isset($post["decimacolumna"])) {
      $this->decimacolumna = $post["decimacolumna"];
    }

    if (isset($this->decimacolumna)) {
      $this->decimacolumnanombre = $post["decimacolumnanombre"];
      $this->decimacolumnatipodedato = $post["decimacolumnatipodedato"];
      $this->decimacolumnacaracteres = $post["decimacolumnacaracteres"];
      if (isset($post["decimacolumnanotnull"])) {
        $this->decimacolumnanotnull = $post["decimacolumnanotnull"];
      }
      if (isset($post["decimacolumnaunique"])) {
        $this->decimacolumnaunique = $post["decimacolumnaunique"];
      }
    }


  }

  private function validarcolumna(){

    $errores = [];

        if (strlen($this->nombredelatabla) == null) {
          $errores["nombredelatabla"] = "Nombre de tabla vacio";
          $errores["bordenombredelatabla"] = "<style>.bordenombredelatabla{border: solid 2px red;}</style>";
          $errores["errornombredelatabla"] = "<style>.errornombredelatabla{margin-bottom: 1.9%;text-align: center;font-weight: bold;color: #dcc300;text-shadow: 1px 2px 0px #000;font-size: 1.3em;background: repeating-linear-gradient(45deg, #ad0011, #ffdada00 119px);padding: 1% 1%;border-radius: 4px;display:block;}</style>";
        }else {
          $errores["bordenombredelatabla"] = "<style>.bordenombredelatabla{border: solid 2px green;}</style>";
        }

        if (isset($this->primeracolumna)) {

          if (strlen($this->primeracolumnanombre) == null) {
            $errores["primeracolumnanombre"] = "Nombre de columna vacio";
            $errores["bordeprimeracolumnanombre"] = "<style>.bordeprimeracolumnanombre{border: solid 2px red;}</style>";
            $errores["errorprimeracolumnanombre"] = "<style>.errorprimeracolumnanombre{text-align: center;font-weight: bold;color: #dcc300;text-shadow: 1px 2px 0px #000;font-size: 1em;background: repeating-linear-gradient(45deg, #ad0011, #ffdada00 119px);padding: 3% 1%;border-radius: 4px;display:block;}</style>";
          }else {
            $errores["bordeprimeracolumnanombre"] = "<style>.bordeprimeracolumnanombre{border: solid 2px green;}</style>";
          }

          if (strlen($this->primeracolumnacaracteres) == null) {
            $errores["primeracolumnacaracteres"] = "No ingresaste los caracteres";
            $errores["bordeprimeracolumnacaracteres"] = "<style>.bordeprimeracolumnacaracteres{border: solid 2px red;}</style>";
            $errores["errorprimeracolumnacaracteres"] = "<style>.errorprimeracolumnacaracteres{text-align: center;font-weight: bold;color: #dcc300;text-shadow: 1px 2px 0px #000;font-size: 1em;background: repeating-linear-gradient(45deg, #ad0011, #ffdada00 119px);padding: 3% 1%;border-radius: 4px;display:block;}</style>";
          }else {
            $errores["bordeprimeracolumnacaracteres"] = "<style>.bordeprimeracolumnacaracteres{border: solid 2px green;}</style>";
          }
        }

        if (isset($this->segundacolumna)) {

          if (strlen($this->segundacolumnanombre) == null) {
            $errores["segundacolumnanombre"] = "Nombre de columna vacio";
            $errores["bordesegundacolumnanombre"] = "<style>.bordesegundacolumnanombre{border: solid 2px red;}</style>";
            $errores["errorsegundacolumnanombre"] = "<style>.errorsegundacolumnanombre{text-align: center;font-weight: bold;color: #dcc300;text-shadow: 1px 2px 0px #000;font-size: 1em;background: repeating-linear-gradient(45deg, #ad0011, #ffdada00 119px);padding: 3% 1%;border-radius: 4px;display:block;}</style>";
          }else {
            $errores["bordesegundacolumnanombre"] = "<style>.bordesegundacolumnanombre{border: solid 2px green;}</style>";
          }

          if (strlen($this->segundacolumnacaracteres) == null) {
            $errores["segundacolumnacaracteres"] = "No ingresaste los caracteres";
            $errores["bordesegundacolumnacaracteres"] = "<style>.bordesegundacolumnacaracteres{border: solid 2px red;}</style>";
            $errores["errorsegundacolumnacaracteres"] = "<style>.errorsegundacolumnacaracteres{text-align: center;font-weight: bold;color: #dcc300;text-shadow: 1px 2px 0px #000;font-size: 1em;background: repeating-linear-gradient(45deg, #ad0011, #ffdada00 119px);padding: 3% 1%;border-radius: 4px;display:block;}</style>";
          }else {
            $errores["bordesegundacolumnacaracteres"] = "<style>.bordesegundacolumnacaracteres{border: solid 2px green;}</style>";
          }
        }

        if (isset($this->terceracolumna)) {

          if (strlen($this->terceracolumnanombre) == null) {
            $errores["terceracolumnanombre"] = "Nombre de columna vacio";
            $errores["bordeterceracolumnanombre"] = "<style>.bordeterceracolumnanombre{border: solid 2px red;}</style>";
            $errores["errorterceracolumnanombre"] = "<style>.errorterceracolumnanombre{text-align: center;font-weight: bold;color: #dcc300;text-shadow: 1px 2px 0px #000;font-size: 1em;background: repeating-linear-gradient(45deg, #ad0011, #ffdada00 119px);padding: 3% 1%;border-radius: 4px;display:block;}</style>";
          }else {
            $errores["bordeterceracolumnanombre"] = "<style>.bordeterceracolumnanombre{border: solid 2px green;}</style>";
          }

          if (strlen($this->terceracolumnacaracteres) == null) {
            $errores["terceracolumnacaracteres"] = "No ingresaste los caracteres";
            $errores["bordeterceracolumnacaracteres"] = "<style>.bordeterceracolumnacaracteres{border: solid 2px red;}</style>";
            $errores["errorterceracolumnacaracteres"] = "<style>.errorterceracolumnacaracteres{text-align: center;font-weight: bold;color: #dcc300;text-shadow: 1px 2px 0px #000;font-size: 1em;background: repeating-linear-gradient(45deg, #ad0011, #ffdada00 119px);padding: 3% 1%;border-radius: 4px;display:block;}</style>";
          }else {
            $errores["bordeterceracolumnacaracteres"] = "<style>.bordeterceracolumnacaracteres{border: solid 2px green;}</style>";
          }
        }

        if (isset($this->cuartacolumna)) {

          if (strlen($this->cuartacolumnanombre) == null) {
            $errores["cuartacolumnanombre"] = "Nombre de columna vacio";
            $errores["bordecuartacolumnanombre"] = "<style>.bordecuartacolumnanombre{border: solid 2px red;}</style>";
            $errores["errorcuartacolumnanombre"] = "<style>.errorcuartacolumnanombre{text-align: center;font-weight: bold;color: #dcc300;text-shadow: 1px 2px 0px #000;font-size: 1em;background: repeating-linear-gradient(45deg, #ad0011, #ffdada00 119px);padding: 3% 1%;border-radius: 4px;display:block;}</style>";
          }else {
            $errores["bordecuartacolumnanombre"] = "<style>.bordecuartacolumnanombre{border: solid 2px green;}</style>";
          }

          if (strlen($this->cuartacolumnacaracteres) == null) {
            $errores["cuartacolumnacaracteres"] = "No ingresaste los caracteres";
            $errores["bordecuartacolumnacaracteres"] = "<style>.bordecuartacolumnacaracteres{border: solid 2px red;}</style>";
            $errores["errorcuartacolumnacaracteres"] = "<style>.errorcuartacolumnacaracteres{text-align: center;font-weight: bold;color: #dcc300;text-shadow: 1px 2px 0px #000;font-size: 1em;background: repeating-linear-gradient(45deg, #ad0011, #ffdada00 119px);padding: 3% 1%;border-radius: 4px;display:block;}</style>";
          }else {
            $errores["bordecuartacolumnacaracteres"] = "<style>.bordecuartacolumnacaracteres{border: solid 2px green;}</style>";
          }
        }

        if (isset($this->quintacolumna)) {

          if (strlen($this->quintacolumnanombre) == null) {
            $errores["quintacolumnanombre"] = "Nombre de columna vacio";
            $errores["bordequintacolumnanombre"] = "<style>.bordequintacolumnanombre{border: solid 2px red;}</style>";
            $errores["errorquintacolumnanombre"] = "<style>.errorquintacolumnanombre{text-align: center;font-weight: bold;color: #dcc300;text-shadow: 1px 2px 0px #000;font-size: 1em;background: repeating-linear-gradient(45deg, #ad0011, #ffdada00 119px);padding: 3% 1%;border-radius: 4px;display:block;}</style>";
          }else {
            $errores["bordequintacolumnanombre"] = "<style>.bordequintacolumnanombre{border: solid 2px green;}</style>";
          }

          if (strlen($this->quintacolumnacaracteres) == null) {
            $errores["quintacolumnacaracteres"] = "No ingresaste los caracteres";
            $errores["bordequintacolumnacaracteres"] = "<style>.bordequintacolumnacaracteres{border: solid 2px red;}</style>";
            $errores["errorquintacolumnacaracteres"] = "<style>.errorquintacolumnacaracteres{text-align: center;font-weight: bold;color: #dcc300;text-shadow: 1px 2px 0px #000;font-size: 1em;background: repeating-linear-gradient(45deg, #ad0011, #ffdada00 119px);padding: 3% 1%;border-radius: 4px;display:block;}</style>";
          }else {
            $errores["bordequintacolumnacaracteres"] = "<style>.bordequintacolumnacaracteres{border: solid 2px green;}</style>";
          }
        }

        if (isset($this->sextacolumna)) {

          if (strlen($this->sextacolumnanombre) == null) {
            $errores["sextacolumnanombre"] = "Nombre de columna vacio";
            $errores["bordesextacolumnanombre"] = "<style>.bordesextacolumnanombre{border: solid 2px red;}</style>";
            $errores["errorsextacolumnanombre"] = "<style>.errorsextacolumnanombre{text-align: center;font-weight: bold;color: #dcc300;text-shadow: 1px 2px 0px #000;font-size: 1em;background: repeating-linear-gradient(45deg, #ad0011, #ffdada00 119px);padding: 3% 1%;border-radius: 4px;display:block;}</style>";
          }else {
            $errores["bordesextacolumnanombre"] = "<style>.bordesextacolumnanombre{border: solid 2px green;}</style>";
          }

          if (strlen($this->sextacolumnacaracteres) == null) {
            $errores["sextacolumnacaracteres"] = "No ingresaste los caracteres";
            $errores["bordesextacolumnacaracteres"] = "<style>.bordesextacolumnacaracteres{border: solid 2px red;}</style>";
            $errores["errorsextacolumnacaracteres"] = "<style>.errorsextacolumnacaracteres{text-align: center;font-weight: bold;color: #dcc300;text-shadow: 1px 2px 0px #000;font-size: 1em;background: repeating-linear-gradient(45deg, #ad0011, #ffdada00 119px);padding: 3% 1%;border-radius: 4px;display:block;}</style>";
          }else {
            $errores["bordesextacolumnacaracteres"] = "<style>.bordesextacolumnacaracteres{border: solid 2px green;}</style>";
          }
        }
        if (isset($this->septimacolumna)) {

          if (strlen($this->septimacolumnanombre) == null) {
            $errores["septimacolumnanombre"] = "Nombre de columna vacio";
            $errores["bordeseptimacolumnanombre"] = "<style>.bordeseptimacolumnanombre{border: solid 2px red;}</style>";
            $errores["errorseptimacolumnanombre"] = "<style>.errorseptimacolumnanombre{text-align: center;font-weight: bold;color: #dcc300;text-shadow: 1px 2px 0px #000;font-size: 1em;background: repeating-linear-gradient(45deg, #ad0011, #ffdada00 119px);padding: 3% 1%;border-radius: 4px;display:block;}</style>";
          }else {
            $errores["bordeseptimacolumnanombre"] = "<style>.bordeseptimacolumnanombre{border: solid 2px green;}</style>";
          }

          if (strlen($this->septimacolumnacaracteres) == null) {
            $errores["septimacolumnacaracteres"] = "No ingresaste los caracteres";
            $errores["bordeseptimacolumnacaracteres"] = "<style>.bordeseptimacolumnacaracteres{border: solid 2px red;}</style>";
            $errores["errorseptimacolumnacaracteres"] = "<style>.errorseptimacolumnacaracteres{text-align: center;font-weight: bold;color: #dcc300;text-shadow: 1px 2px 0px #000;font-size: 1em;background: repeating-linear-gradient(45deg, #ad0011, #ffdada00 119px);padding: 3% 1%;border-radius: 4px;display:block;}</style>";
          }else {
            $errores["bordeseptimacolumnacaracteres"] = "<style>.bordeseptimacolumnacaracteres{border: solid 2px green;}</style>";
          }
        }
        if (isset($this->octavacolumna)) {

          if (strlen($this->octavacolumnanombre) == null) {
            $errores["octavacolumnanombre"] = "Nombre de columna vacio";
            $errores["bordeoctavacolumnanombre"] = "<style>.bordeoctavacolumnanombre{border: solid 2px red;}</style>";
            $errores["erroroctavacolumnanombre"] = "<style>.erroroctavacolumnanombre{text-align: center;font-weight: bold;color: #dcc300;text-shadow: 1px 2px 0px #000;font-size: 1em;background: repeating-linear-gradient(45deg, #ad0011, #ffdada00 119px);padding: 3% 1%;border-radius: 4px;display:block;}</style>";
          }else {
            $errores["bordeoctavacolumnanombre"] = "<style>.bordeoctavacolumnanombre{border: solid 2px green;}</style>";
          }

          if (strlen($this->octavacolumnacaracteres) == null) {
            $errores["octavacolumnacaracteres"] = "No ingresaste los caracteres";
            $errores["bordeoctavacolumnacaracteres"] = "<style>.bordeoctavacolumnacaracteres{border: solid 2px red;}</style>";
            $errores["erroroctavacolumnacaracteres"] = "<style>.erroroctavacolumnacaracteres{text-align: center;font-weight: bold;color: #dcc300;text-shadow: 1px 2px 0px #000;font-size: 1em;background: repeating-linear-gradient(45deg, #ad0011, #ffdada00 119px);padding: 3% 1%;border-radius: 4px;display:block;}</style>";
          }else {
            $errores["bordeoctavacolumnacaracteres"] = "<style>.bordeoctavacolumnacaracteres{border: solid 2px green;}</style>";
          }
        }
        if (isset($this->novenacolumna)) {

          if (strlen($this->novenacolumnanombre) == null) {
            $errores["novenacolumnanombre"] = "Nombre de columna vacio";
            $errores["bordenovenacolumnanombre"] = "<style>.bordenovenacolumnanombre{border: solid 2px red;}</style>";
            $errores["errornovenacolumnanombre"] = "<style>.errornovenacolumnanombre{text-align: center;font-weight: bold;color: #dcc300;text-shadow: 1px 2px 0px #000;font-size: 1em;background: repeating-linear-gradient(45deg, #ad0011, #ffdada00 119px);padding: 3% 1%;border-radius: 4px;display:block;}</style>";
          }else {
            $errores["bordenovenacolumnanombre"] = "<style>.bordenovenacolumnanombre{border: solid 2px green;}</style>";
          }

          if (strlen($this->novenacolumnacaracteres) == null) {
            $errores["novenacolumnacaracteres"] = "No ingresaste los caracteres";
            $errores["bordenovenacolumnacaracteres"] = "<style>.bordenovenacolumnacaracteres{border: solid 2px red;}</style>";
            $errores["errornovenacolumnacaracteres"] = "<style>.errornovenacolumnacaracteres{text-align: center;font-weight: bold;color: #dcc300;text-shadow: 1px 2px 0px #000;font-size: 1em;background: repeating-linear-gradient(45deg, #ad0011, #ffdada00 119px);padding: 3% 1%;border-radius: 4px;display:block;}</style>";
          }else {
            $errores["bordenovenacolumnacaracteres"] = "<style>.bordenovenacolumnacaracteres{border: solid 2px green;}</style>";
          }
        }
        if (isset($this->decimacolumna)) {

            if (strlen($this->decimacolumnanombre) == null) {
              $errores["decimacolumnanombre"] = "Nombre de columna vacio";
              $errores["bordedecimacolumnanombre"] = "<style>.bordedecimacolumnanombre{border: solid 2px red;}</style>";
              $errores["errordecimacolumnanombre"] = "<style>.errordecimacolumnanombre{text-align: center;font-weight: bold;color: #dcc300;text-shadow: 1px 2px 0px #000;font-size: 1em;background: repeating-linear-gradient(45deg, #ad0011, #ffdada00 119px);padding: 3% 1%;border-radius: 4px;display:block;}</style>";
            }else {
              $errores["bordedecimacolumnanombre"] = "<style>.bordedecimacolumnanombre{border: solid 2px green;}</style>";
            }

            if (strlen($this->decimacolumnacaracteres) == null) {
              $errores["decimacolumnacaracteres"] = "No ingresaste los caracteres";
              $errores["bordedecimacolumnacaracteres"] = "<style>.bordedecimacolumnacaracteres{border: solid 2px red;}</style>";
              $errores["errordecimacolumnacaracteres"] = "<style>.errordecimacolumnacaracteres{text-align: center;font-weight: bold;color: #dcc300;text-shadow: 1px 2px 0px #000;font-size: 1em;background: repeating-linear-gradient(45deg, #ad0011, #ffdada00 119px);padding: 3% 1%;border-radius: 4px;display:block;}</style>";
            }else {
              $errores["bordedecimacolumnacaracteres"] = "<style>.bordedecimacolumnacaracteres{border: solid 2px green;}</style>";
            }
          }
    return $errores;
  }

  public function imprimirerrores($i){

    $errores = $this->validarcolumna();

      if (isset($errores[$i])) {
        return $errores[$i];
      }
  }

  public function creartabla(){
    $dsn = "mysql:host=localhost;port=3306;dbname=alizon";
    $usuario = "root";
    $contrasena = "";

    try {

      $conexion = new PDO($dsn, $usuario, $contrasena);
      $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch (\Exception $e) {

      echo "Se Produjo Un Error al Cargar la Pagina...";exit;

    }

    if (isset($this->primeracolumna) && isset($this->segundacolumna) && isset($this->terceracolumna) && isset($this->cuartacolumna) && isset($this->quintacolumna) && isset($this->sextacolumna) && isset($this->septimacolumna) && isset($this->octavacolumna) && isset($this->novenacolumna) && isset($this->decimacolumna)) {
      $consulta = $conexion->prepare("CREATE  TABLE `alizon`.`$this->nombredelatabla` (
        `id` INT NOT NULL AUTO_INCREMENT ,
        `$this->primeracolumnanombre` $this->primeracolumnatipodedato($this->primeracolumnacaracteres) $this->primeracolumnanotnull $this->primeracolumnaunique,
        `$this->segundacolumnanombre` $this->segundacolumnatipodedato($this->segundacolumnacaracteres) $this->segundacolumnanotnull $this->segundacolumnaunique,
        `$this->terceracolumnanombre` $this->terceracolumnatipodedato($this->terceracolumnacaracteres) $this->terceracolumnanotnull $this->terceracolumnaunique,
        `$this->cuartacolumnanombre` $this->cuartacolumnatipodedato($this->cuartacolumnacaracteres) $this->cuartacolumnanotnull $this->cuartacolumnaunique,
        `$this->quintacolumnanombre` $this->quintacolumnatipodedato($this->quintacolumnacaracteres) $this->quintacolumnanotnull $this->quintacolumnaunique,
        `$this->sextacolumnanombre` $this->sextacolumnatipodedato($this->sextacolumnacaracteres) $this->sextacolumnanotnull $this->sextacolumnaunique,
        `$this->septimacolumnanombre` $this->septimacolumnatipodedato($this->septimacolumnacaracteres) $this->septimacolumnanotnull $this->septimacolumnaunique,
        `$this->octavacolumnanombre` $this->octavacolumnatipodedato($this->octavacolumnacaracteres) $this->octavacolumnanotnull $this->octavacolumnaunique,
        `$this->novenacolumnanombre` $this->novenacolumnatipodedato($this->novenacolumnacaracteres) $this->novenacolumnanotnull $this->novenacolumnaunique,
        `$this->decimacolumnanombre` $this->decimacolumnatipodedato($this->decimacolumnacaracteres) $this->decimacolumnanotnull $this->decimacolumnaunique,
        PRIMARY KEY (`id`) )
      DEFAULT CHARACTER SET = utf8
      COLLATE = utf8_bin;");

      $consulta->execute();
    }elseif (isset($this->primeracolumna) && isset($this->segundacolumna) && isset($this->terceracolumna) && isset($this->cuartacolumna) && isset($this->quintacolumna) && isset($this->sextacolumna) && isset($this->septimacolumna)&& isset($this->octavacolumna)&& isset($this->novenacolumna)) {
      $consulta = $conexion->prepare("CREATE  TABLE `alizon`.`$this->nombredelatabla` (
        `id` INT NOT NULL AUTO_INCREMENT ,
        `$this->primeracolumnanombre` $this->primeracolumnatipodedato($this->primeracolumnacaracteres) $this->primeracolumnanotnull $this->primeracolumnaunique,
        `$this->segundacolumnanombre` $this->segundacolumnatipodedato($this->segundacolumnacaracteres) $this->segundacolumnanotnull $this->segundacolumnaunique,
        `$this->terceracolumnanombre` $this->terceracolumnatipodedato($this->terceracolumnacaracteres) $this->terceracolumnanotnull $this->terceracolumnaunique,
        `$this->cuartacolumnanombre` $this->cuartacolumnatipodedato($this->cuartacolumnacaracteres) $this->cuartacolumnanotnull $this->cuartacolumnaunique,
        `$this->quintacolumnanombre` $this->quintacolumnatipodedato($this->quintacolumnacaracteres) $this->quintacolumnanotnull $this->quintacolumnaunique,
        `$this->sextacolumnanombre` $this->sextacolumnatipodedato($this->sextacolumnacaracteres) $this->sextacolumnanotnull $this->sextacolumnaunique,
        `$this->septimacolumnanombre` $this->septimacolumnatipodedato($this->septimacolumnacaracteres) $this->septimacolumnanotnull $this->septimacolumnaunique,
        `$this->octavacolumnanombre` $this->octavacolumnatipodedato($this->octavacolumnacaracteres) $this->octavacolumnanotnull $this->octavacolumnaunique,
        `$this->novenacolumnanombre` $this->novenacolumnatipodedato($this->novenacolumnacaracteres) $this->novenacolumnanotnull $this->novenacolumnaunique,
        PRIMARY KEY (`id`) )
      DEFAULT CHARACTER SET = utf8
      COLLATE = utf8_bin;");

      $consulta->execute();
    }elseif (isset($this->primeracolumna) && isset($this->segundacolumna) && isset($this->terceracolumna) && isset($this->cuartacolumna) && isset($this->quintacolumna) && isset($this->sextacolumna) && isset($this->septimacolumna)&& isset($this->octavacolumna)) {
      $consulta = $conexion->prepare("CREATE  TABLE `alizon`.`$this->nombredelatabla` (
        `id` INT NOT NULL AUTO_INCREMENT ,
        `$this->primeracolumnanombre` $this->primeracolumnatipodedato($this->primeracolumnacaracteres) $this->primeracolumnanotnull $this->primeracolumnaunique,
        `$this->segundacolumnanombre` $this->segundacolumnatipodedato($this->segundacolumnacaracteres) $this->segundacolumnanotnull $this->segundacolumnaunique,
        `$this->terceracolumnanombre` $this->terceracolumnatipodedato($this->terceracolumnacaracteres) $this->terceracolumnanotnull $this->terceracolumnaunique,
        `$this->cuartacolumnanombre` $this->cuartacolumnatipodedato($this->cuartacolumnacaracteres) $this->cuartacolumnanotnull $this->cuartacolumnaunique,
        `$this->quintacolumnanombre` $this->quintacolumnatipodedato($this->quintacolumnacaracteres) $this->quintacolumnanotnull $this->quintacolumnaunique,
        `$this->sextacolumnanombre` $this->sextacolumnatipodedato($this->sextacolumnacaracteres) $this->sextacolumnanotnull $this->sextacolumnaunique,
        `$this->septimacolumnanombre` $this->septimacolumnatipodedato($this->septimacolumnacaracteres) $this->septimacolumnanotnull $this->septimacolumnaunique,
        `$this->octavacolumnanombre` $this->octavacolumnatipodedato($this->octavacolumnacaracteres) $this->octavacolumnanotnull $this->octavacolumnaunique,
        PRIMARY KEY (`id`) )
      DEFAULT CHARACTER SET = utf8
      COLLATE = utf8_bin;");

      $consulta->execute();
    }elseif (isset($this->primeracolumna) && isset($this->segundacolumna) && isset($this->terceracolumna) && isset($this->cuartacolumna) && isset($this->quintacolumna) && isset($this->sextacolumna) && isset($this->septimacolumna)) {
      $consulta = $conexion->prepare("CREATE  TABLE `alizon`.`$this->nombredelatabla` (
        `id` INT NOT NULL AUTO_INCREMENT ,
        `$this->primeracolumnanombre` $this->primeracolumnatipodedato($this->primeracolumnacaracteres) $this->primeracolumnanotnull $this->primeracolumnaunique,
        `$this->segundacolumnanombre` $this->segundacolumnatipodedato($this->segundacolumnacaracteres) $this->segundacolumnanotnull $this->segundacolumnaunique,
        `$this->terceracolumnanombre` $this->terceracolumnatipodedato($this->terceracolumnacaracteres) $this->terceracolumnanotnull $this->terceracolumnaunique,
        `$this->cuartacolumnanombre` $this->cuartacolumnatipodedato($this->cuartacolumnacaracteres) $this->cuartacolumnanotnull $this->cuartacolumnaunique,
        `$this->quintacolumnanombre` $this->quintacolumnatipodedato($this->quintacolumnacaracteres) $this->quintacolumnanotnull $this->quintacolumnaunique,
        `$this->sextacolumnanombre` $this->sextacolumnatipodedato($this->sextacolumnacaracteres) $this->sextacolumnanotnull $this->sextacolumnaunique,
        `$this->septimacolumnanombre` $this->septimacolumnatipodedato($this->septimacolumnacaracteres) $this->septimacolumnanotnull $this->septimacolumnaunique,
        PRIMARY KEY (`id`) )
      DEFAULT CHARACTER SET = utf8
      COLLATE = utf8_bin;");

      $consulta->execute();
    }elseif (isset($this->primeracolumna) && isset($this->segundacolumna) && isset($this->terceracolumna) && isset($this->cuartacolumna) && isset($this->quintacolumna) && isset($this->sextacolumna)) {
      $consulta = $conexion->prepare("CREATE  TABLE `alizon`.`$this->nombredelatabla` (
        `id` INT NOT NULL AUTO_INCREMENT ,
        `$this->primeracolumnanombre` $this->primeracolumnatipodedato($this->primeracolumnacaracteres) $this->primeracolumnanotnull $this->primeracolumnaunique,
        `$this->segundacolumnanombre` $this->segundacolumnatipodedato($this->segundacolumnacaracteres) $this->segundacolumnanotnull $this->segundacolumnaunique,
        `$this->terceracolumnanombre` $this->terceracolumnatipodedato($this->terceracolumnacaracteres) $this->terceracolumnanotnull $this->terceracolumnaunique,
        `$this->cuartacolumnanombre` $this->cuartacolumnatipodedato($this->cuartacolumnacaracteres) $this->cuartacolumnanotnull $this->cuartacolumnaunique,
        `$this->quintacolumnanombre` $this->quintacolumnatipodedato($this->quintacolumnacaracteres) $this->quintacolumnanotnull $this->quintacolumnaunique,
        `$this->sextacolumnanombre` $this->sextacolumnatipodedato($this->sextacolumnacaracteres) $this->sextacolumnanotnull $this->sextacolumnaunique,
        PRIMARY KEY (`id`) )
      DEFAULT CHARACTER SET = utf8
      COLLATE = utf8_bin;");

      $consulta->execute();
    }elseif (isset($this->primeracolumna) && isset($this->segundacolumna) && isset($this->terceracolumna) && isset($this->cuartacolumna) && isset($this->quintacolumna)) {
      $consulta = $conexion->prepare("CREATE  TABLE `alizon`.`$this->nombredelatabla` (
        `id` INT NOT NULL AUTO_INCREMENT ,
        `$this->primeracolumnanombre` $this->primeracolumnatipodedato($this->primeracolumnacaracteres) $this->primeracolumnanotnull $this->primeracolumnaunique,
        `$this->segundacolumnanombre` $this->segundacolumnatipodedato($this->segundacolumnacaracteres) $this->segundacolumnanotnull $this->segundacolumnaunique,
        `$this->terceracolumnanombre` $this->terceracolumnatipodedato($this->terceracolumnacaracteres) $this->terceracolumnanotnull $this->terceracolumnaunique,
        `$this->cuartacolumnanombre` $this->cuartacolumnatipodedato($this->cuartacolumnacaracteres) $this->cuartacolumnanotnull $this->cuartacolumnaunique,
        `$this->quintacolumnanombre` $this->quintacolumnatipodedato($this->quintacolumnacaracteres) $this->quintacolumnanotnull $this->quintacolumnaunique,
        PRIMARY KEY (`id`) )
      DEFAULT CHARACTER SET = utf8
      COLLATE = utf8_bin;");

      $consulta->execute();
    }elseif (isset($this->primeracolumna) && isset($this->segundacolumna) && isset($this->terceracolumna) && isset($this->cuartacolumna)) {
      $consulta = $conexion->prepare("CREATE  TABLE `alizon`.`$this->nombredelatabla` (
        `id` INT NOT NULL AUTO_INCREMENT ,
        `$this->primeracolumnanombre` $this->primeracolumnatipodedato($this->primeracolumnacaracteres) $this->primeracolumnanotnull $this->primeracolumnaunique,
        `$this->segundacolumnanombre` $this->segundacolumnatipodedato($this->segundacolumnacaracteres) $this->segundacolumnanotnull $this->segundacolumnaunique,
        `$this->terceracolumnanombre` $this->terceracolumnatipodedato($this->terceracolumnacaracteres) $this->terceracolumnanotnull $this->terceracolumnaunique,
        `$this->cuartacolumnanombre` $this->cuartacolumnatipodedato($this->cuartacolumnacaracteres) $this->cuartacolumnanotnull $this->cuartacolumnaunique,
        PRIMARY KEY (`id`) )
      DEFAULT CHARACTER SET = utf8
      COLLATE = utf8_bin;");

      $consulta->execute();
    }elseif (isset($this->primeracolumna) && isset($this->segundacolumna) && isset($this->terceracolumna)) {
      $consulta = $conexion->prepare("CREATE  TABLE `alizon`.`$this->nombredelatabla` (
        `id` INT NOT NULL AUTO_INCREMENT ,
        `$this->primeracolumnanombre` $this->primeracolumnatipodedato($this->primeracolumnacaracteres) $this->primeracolumnanotnull $this->primeracolumnaunique,
        `$this->segundacolumnanombre` $this->segundacolumnatipodedato($this->segundacolumnacaracteres) $this->segundacolumnanotnull $this->segundacolumnaunique,
        `$this->terceracolumnanombre` $this->terceracolumnatipodedato($this->terceracolumnacaracteres) $this->terceracolumnanotnull $this->terceracolumnaunique,
        PRIMARY KEY (`id`) )
      DEFAULT CHARACTER SET = utf8
      COLLATE = utf8_bin;");

      $consulta->execute();
    }elseif (isset($this->primeracolumna) && isset($this->segundacolumna)) {
      $consulta = $conexion->prepare("CREATE  TABLE `alizon`.`$this->nombredelatabla` (
        `id` INT NOT NULL AUTO_INCREMENT ,
        `$this->primeracolumnanombre` $this->primeracolumnatipodedato($this->primeracolumnacaracteres) $this->primeracolumnanotnull $this->primeracolumnaunique,
        `$this->segundacolumnanombre` $this->segundacolumnatipodedato($this->segundacolumnacaracteres) $this->segundacolumnanotnull $this->segundacolumnaunique,
        PRIMARY KEY (`id`) )
      DEFAULT CHARACTER SET = utf8
      COLLATE = utf8_bin;");

      $consulta->execute();
    }elseif (isset($this->primeracolumna)) {
      $consulta = $conexion->prepare("CREATE  TABLE `alizon`.`$this->nombredelatabla` (
        `id` INT NOT NULL AUTO_INCREMENT ,
        `$this->primeracolumnanombre` $this->primeracolumnatipodedato($this->primeracolumnacaracteres) $this->primeracolumnanotnull $this->primeracolumnaunique,
        PRIMARY KEY (`id`) )
      DEFAULT CHARACTER SET = utf8
      COLLATE = utf8_bin;");

      $consulta->execute();
    }



  }


}




 ?>
