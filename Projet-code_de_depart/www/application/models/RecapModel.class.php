<?php

class RecapModel extends AbstractModel{


    public function read(array $values){

        $sql = "SELECT id, nom
        FROM salarie
        WHERE nom = :nom AND mdp = :mdp";

        return $this->database->queryOne($sql, $values);

    }

    public function write(array $values){

    }



}
 ?>
