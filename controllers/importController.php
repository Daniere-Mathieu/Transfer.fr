<?php
session_start();
require_once("../class/Import.php");
require_once("../models/ImportModel.php");
  if (empty($_FILES["file"]) || empty($_POST["name"])) {
    $_SESSION["Error"] = "certain champs n'ont pas été remplie";
    header('Location: ../views/fail.php');
  }
  else {
    $name = htmlentities($_POST["name"]);
    $extension = explode(".",$_FILES["file"]["name"]);
    $exte = count($extension);
    $exte -= 1;
    $path = "../storage/" . $_POST["name"];
    $final_path = "../storage/" . $_FILES["file"]["name"];
    $path_test = "../storage/" . $_FILES["file"]["name"];
    $a = 0;
    $b = 0;
    $add = 0;
    while ($a === 0) {
      if (file_exists($path_test) === true) {
        $add = $add + 1;
        $path_verif = $extension[0] . $add ;
        $path_verif = "../storage/" . $path_verif . "." . $extension[$exte];
        if (!file_exists($path_verif )) {
          $a = 1;
          $final_path = $path_verif;
          $add = 0;
        }
      }
      else {
        $a = 1;
      }
    }
    if (ImportModel::verificationName($name)) {
      while ($b === 0) {
        if (ImportModel::verificationName($name)) {
          $add = $add + 1;
          $tempname = $name . $add;
          if (ImportModel::verificationName($tempname) === false) {
            $b = 1;
            $name = $tempname;
            $add = 0;
          }
        }
        else {
          $b = 1;
        }
      }
    }
    $import = new Import($name,$_FILES["file"]["size"],$final_path);
    ImportModel::createImport($import);
    try {
      $move = move_uploaded_file($_FILES["file"]["tmp_name"],$final_path);
    } catch (\Exception $e) {
      $_SESSION["Error"] = "$e";
    }
    if ($move) {
      $_SESSION["id"] = $import->id;
      header('Location: ../views/sucess.php');
    }
    else {
      header('Location: ../views/fail.php');
    }
  }



 ?>
