<?php

class HomeModel extends AbstractModel{


    public function read(array $values){

      $sql = "SELECT *
      FROM menu
      WHERE 1";

      return $this->database->query($sql, $values);

    }

    public function write(array $values){



    }

    public function modify(array $values){



    }


}
 ?>
