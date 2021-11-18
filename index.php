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
    include("views/home.php");
    break;
    case 'home':
    include("views/home.php");
      break;
      case 'controller':
      if (!empty($_FILES["file"]) && !empty($_POST["name"])) {
        include("controllers/importController.php");
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
        include("views/sucess.php");
      }
      else {
        header('Location: home.php');
        die();
      }
        break;
      case 'fail':
      include("views/fail.php");
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
          include("views/download.php");
        }

        break;
    default:
      include("views/404.php");
      break;
  }





 ?>
