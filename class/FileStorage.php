<?php
  class FileStorage {
    private $filename;
    private $file;
    private $data = [];

    public function __construct($table) {
      $this->filename = "data/" . $table;
      $this->file = fopen($this->filename, "a+");
      while ( ($row = fgetcsv($this->file) ) !== FALSE ) {
      array_push($this->data, $row);
      }
    }
    function create($obj){
      array_push($this->data, $obj);
      fputcsv($this->file, $obj);
    }
    function readOne($index){
      return $this->data[$index];
    }
    function readAll(){
      return $this->data;
    }
    function resetFile($file){
      $reset = [];
      fwrite($this->file,$reset);
    }
    function deleteOnebyToken($token,$name){
      $status = false;
      for ($i=0; $i < count($this->data); $i++) {
        if ($this->data[$i][4] === $token && $this->data[$i][1] === $name) {
          unset($this->data[$i]);
          $status = true;
        }
      }
      unlink($this->filename);
      $this->file = fopen($this->filename, "w+");
      foreach($this->data as $row) {
      fputcsv($this->file, $row);
      return $status;
      }
    }
    function deleteByDate($token,$name){
      $t = false;
      for ($i=0; $i < count($this->data); $i++) {
        if ($this->data[$i][4] === $token && $this->data[$i][1] === $name) {
          unset($this->data[$i]);
          $t = true;
        }
      }
      unlink($this->filename);
      $this->file = fopen($this->filename, "w+");
      foreach($this->data as $row) {
      fputcsv($this->file, $row);
      return $t;
      }
    }

  }



 ?>
