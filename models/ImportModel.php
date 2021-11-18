<?php
require_once("class/FileStorage.php");
class ImportModel {
  public static function createImport($import){
    $stockage = new FileStorage("storage.csv");
    $array = ImportModel::arrayFromImport($import);
    $data = $stockage->create($array);
  }
  public static function deleteImport($import,$token,$name){
    $stockage = new FileStorage("storage.csv");
    $array = ImportModel::arrayFromImport($import);
    $stockage->deleteOnebyToken($token,$name);
    return true;
  }
  public static function getImport($id) {
    $index = ImportModel::getImportIndexById($id);
    if($index === false) {
      return false;
    }
    $stockage = new FileStorage("storage.csv");
    $row = $stockage->readOne($index);
    return $row;
  }
  private static function getImportIndexById($id) {
    $stockage = new FileStorage("storage.csv");
    $data = $stockage->readAll();
    for($i = 0; $i < count($data); $i++) {
      if($data[$i][0] === $id ) {
        return $i;
      }
    }
    return false;
  }
  public static function getImportByName($name) {
    $index = ImportModel::getImportIndexByName($name);
    if($index === false) {
      return false;
    }
    $stockage = new FileStorage("storage.csv");
    $row = $stockage->readOne($index);
    return $row;
  }
  private static function getImportIndexByName($name) {
    $stockage = new FileStorage("storage.csv");
    $data = $stockage->readAll();
    for($i = 0; $i < count($data); $i++) {
      if($data[$i][1] === $name) {
        return $i;
      }
    }
    return false;
  }
  public static function arrayFromImport($obj){
    $json = json_encode($obj);
    $arr = json_decode($json,true);
    return $arr;
  }
  public static function verificationName($name) {
    $stockage = new FileStorage("storage.csv");
    $data = $stockage->readAll();
    for($i = 0; $i < count($data); $i++) {
      if($data[$i][1] === $name ) {
        return true;
      }
    }
    return false;
  }

}



?>
