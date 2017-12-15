<?php

class LoginemployeeController{

  public function httpGetMethod(){
    $create_session = new Usersession();

      return ['flashBag' => new FlashBag()];

    }

    public function httpPostMethod(Http $http, array $queryFields){
      $create_session = new Usersession();

          $values = [];
          $values['nom'] = $queryFields['nom'];
          $values['mdp'] = $queryFields['mdp'];

          $new_log = new LoginEmployeeModel(new Database());

          $result = $new_log->read($values);
            var_dump($result);
      if($result != false){

          $create_session->create($result);// create($userId, $firstName, $lastName, $email)
          $_SESSION['type']="salarie";
          var_dump($_SESSION);
          $flash_msg_connection = new FlashBag;
          $message = "Vous êtes connecté !";
          $flash_msg_connection->add($message);
          $http->redirectTo("/loginemployee");
      }
      else{
          // $flash_msg_connection = new FlashBag;
          // $message_error_connect = "Erreur dans la saisie de l'adresse mail ou du mot de passe !";
          // $flash_msg_connection->add($message_error_connect);
          $http->redirectTo("/");

      }

    }





}


 ?>
