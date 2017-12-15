<?php

class LoginclientController{

  public function httpGetMethod(){

      return ['flashBag' => new FlashBag()];
    }

    public function httpPostMethod(Http $http, array $queryFields){

      $values = [];
      $values['mail'] = $queryFields['mail'];
      $values['mdp'] = $queryFields['mdp'];

      $new_log = new LoginClientModel(new Database());


      $result = $new_log->read($values);
      var_dump($result);


      if($result != false){
        $create_session = new Usersession();
            var_dump("TEST connect YES");die;
        $create_session->create($result);// create($userId, $firstName, $lastName, $email)
        $flash_msg_connection = new FlashBag;
        $message = "Vous êtes connecté !";
        $flash_msg_connection->add($message);
        $http->redirectTo("/loginclient");
      }
      elseif ($result == false){
        $flash_msg_connection = new FlashBag;
        var_dump("TEST connect NO");
        $message_error_connect = "Erreur dans la saisie de l'adresse mail ou du mot de passe !";
        $flash_msg_connection->add($message_error_connect);
        $http->redirectTo("/createaccount");// createaccount

      }
return $result;
    }





}


 ?>
