<?php

class DeletemenuModel extends AbstractModel{


    public function read(array $values){

    }

    public function write(array $values){

    }

    public function delete(array $values){
      var_dump($values);
      $sql = "DELETE FROM menu
              WHERE id = :id";


      return $this->database->executeSql($sql, $values);

    }

}
 ?>
