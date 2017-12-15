<?php

class EditmenuModel extends AbstractModel{


    public function read(array $values){

      $sql = "SELECT *
      FROM menu
      WHERE id = :id";

      return $this->database->queryOne($sql, $values);

    }

    public function write(array $values){


      $sql = "INSERT INTO menu(nom_menu, entree, plat, dessert, tarif)
              VALUES (:nom_menu, :entree, :plat, :dessert, :tarif)";


      return $this->database->executeSql($sql, $values);

    }

    public function modify(array $values){

      $sql = "UPDATE menu
              SET nom_menu = :nom_menu, entree = :entree, plat = :plat, dessert = :dessert, tarif = :tarif
              WHERE id = :id";


      return $this->database->executeSql($sql, $values);

    }


}
 ?>
