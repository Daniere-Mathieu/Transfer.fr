<?php
session_start();
require_once("models/ImportModel.php");
if ($verif) {
  $token = htmlentities($_POST["token"]);
  $file = htmlentities($_POST["file"]);
  $import = ImportModel::getImportByName($file);
  $path = $import[5];
  if (ImportModel::deleteImport($import,$token,$file) ) {
    unlink($path);
    header('Location: home');
  }
  else {
    $_SESSION["Error"] = "le fichier n'a pas été Supprimer";
    header('Location: fail');
  }

}




 ?>
