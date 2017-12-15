<?php

class CreateaccountModel extends AbstractModel{



    // $this->queryOne($sql, array $criteria = array());
    public function write(array $values){
        // var_dump($values);
        $sql = "INSERT INTO client(nom, prenom, mail, adresse, cp, ville, mdp)
        VALUES(:nom, :prenom, :mail, :adresse, :cp, :ville, :mdp)";
        $this->database->executeSql($sql, $values);
//POBLEME,COMMANDE N'A PAS DE VALEUR PAR DEFAUT
    }

    public function read(array $values){

        $sql = "SELECT nom, prenom, mail, mdp, adresse, cp, ville
        FROM client
        WHERE id='$_SESSION[id]'";
        $this->database->queryOne($sql, $values);


    }

}
//requete TEST depuis PHPMYADMIN => INSERT INTO `client`(`nom`, `prenom`, `mail`, `adresse`, `cp`, `ville`, `mdp`) VALUES ("Paul","Martin","paul.martin@gmail.com","1 rue de la République","87000","Limoges","123456")

 ?>
