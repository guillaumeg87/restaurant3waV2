<?php

class LoginClientModel extends AbstractModel{


    public function read(array $values){

        $sql = "SELECT id, nom, prenom, mail, adresse, cp, ville
        FROM client
        WHERE mail = :mail AND mdp = :mdp";

        return $this->database->queryOne($sql, $values);

    }

    public function write(array $values){

    }

}
 ?>
