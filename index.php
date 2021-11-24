<?php
  ini_set('display_errors',1);
  ini_set('display_startup_errors',1);
  error_reporting(-1);
  session_start();
  require_once("models/ImportModel.php");
  require_once("class/Import.php");
  $url = explode("/",$_SERVER["REQUEST_URI"]);
  $page = $url[1];

  switch ($page) {
    case "":
    include_once("views/home.php");
    break;
    case 'home':
    include_once("views/home.php");
      break;
      case 'controller':
      if (!empty($_FILES["file"]) && !empty($_POST["name"])) {
        include_once("controllers/importController.php");
        die();
      }
      else {
        $_SESSION["Error"] = "certain champs n'ont pas été remplie";
        header('Location: fail');
        die();
      }
        break;
      case 'sucess':
      if (!empty($_SESSION["id"])) {
        $data = ImportModel::getImport($_SESSION["id"]);
        include_once("views/sucess.php");
      }
      else {
        header('Location: home.php');
        die();
      }
        break;
      case 'fail':
      include_once("views/fail.php");
        break;
      case 'download':
        if (!empty($url[2])) {
          $name = $url[2];
        }
        else {
          header('Location: fail');
        }

        if (ImportModel::verificationName($name)) {
          $dataDL = ImportModel::getImportByName($name);
          $filename = explode("/",$dataDL[5]);
          include_once("views/download.php");
        }

        break;
      case "controllerDelete":
      if (!empty($_POST["token"]) && !empty($_POST["file"])) {
        $verif = true;
        include_once("controllers/deleteController.php");
      }
      else {
          $verif = true;
          include_once("controllers/deleteController.php");
      }
        break;
    default:
      include_once("views/404.php");
      break;
  }





 ?>
