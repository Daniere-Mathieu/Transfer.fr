<?php
  class Import {
    public $id;
    public $name;
    public $size;
    public $expirationDate;
    public $token;
    public $path;

    function __construct($name,$size,$path) {
          $time = time();
          $formatedDate = date("i/H/d/m/Y",$time);
          $explodeDate =explode("/",$formatedDate);
          $dayAdd = intval($explodeDate[2]) + 3;
          $explodeDate[2] = strval($dayAdd);
          $deletedDate =implode(":",$explodeDate);
          $this->id = uniqid("file_",true);
          $this->name = $name;
          $this->size = $size;
          $this->expirationDate = $deletedDate;
          $this->token = random_int(200000000,1000000000);
          $this->path = $path;
      }
  }


?>
