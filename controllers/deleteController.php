<?php
session_start();
require_once("../models/ImportModel.php");
if (!empty($_POST["token"]) && !empty($_POST["file"])) {
  $token = htmlentities($_POST["token"]);
  $file = htmlentities($_POST["file"]);
  $import = ImportModel::getImportByName($file);
  $path = $import[5] ;
  echo "test1";
  if (ImportModel::deleteImport($import,$token,$file)) {
    echo "test";
    unlink($path);
    header('Location: ../views/home.php');
  }
}




 ?>
