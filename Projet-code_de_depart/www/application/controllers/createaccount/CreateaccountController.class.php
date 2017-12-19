<?php
/**
 * Objet permettant de créer un nouveau compte utilisateur
 *
 */
class CreateaccountController
{

  // function __construct(database $db){
  //   $this->database = $db;
  // }


/**
 * [httpGetMethod description]
 * @return [method] [réalise les requetes GET]
 */
public function httpGetMethod(){

// $test = ['a'=>"Salut ceci est un test !"];
// return $test ;


  }

/**
 * [httpPostMethod description]
 * @param  Http   $http        [indique le type de requete, dans ce cas POST]
 * @param  array  $queryFields [tableau contenant le contenu du formulaire d'inscription]
 * @return [type]              [description]
 */
  public function httpPostMethod(Http $http, array $queryFields){

    $values = [];
    $values['nom'] = $queryFields['nom'];
    $values['prenom'] = $queryFields['prenom'];
    $values['mail'] = $queryFields['mail'];
    $values['adresse'] = $queryFields['adresse'];
    $values['cp'] = $queryFields['cp'];
    $values['ville'] = $queryFields['ville'];
    $values['mdp'] = $queryFields['mdp'];

    $new_account = new CreateaccountModel(new Database());
    // Controller => instance User : Modele(Objet -> String -> requete) => Connection  BDD
// var_dump($values);

    $result = $new_account->write($values);


  }

};
