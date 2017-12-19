<?php

  abstract class AbstractModel {

    public $database;

    public function  __construct(Database $bd){// attend un objet de a classe database
        $this->database = $bd;
    }

    abstract public function write(array $values);
    abstract public function read(array $values);
    // abstract public function update();
    //     abstract public function delete();

  }


 ?>
