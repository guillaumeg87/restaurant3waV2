<?php

class MenuModel extends AbstractModel{


    public function read(array $values){

      $sql = "SELECT nom_menu, entree, plat, dessert, tarif
      FROM menu
      WHERE nom = :nom_menu AND id= :id";

      return $this->database->queryOne($sql, $values);

    }

    public function write(array $values){

      $sql = "INSERT INTO menu(nom_menu, entree, plat, dessert, tarif)
              VALUES (:nom_menu, :entree, :plat, :dessert, :tarif)";


      return $this->database->executeSql($sql, $values);

    }

}
 ?>
