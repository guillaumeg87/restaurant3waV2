<?php

class LoginclientController{

  public function httpGetMethod(){
    // var_dump("GET");

      return ['flashBag' => new FlashBag()];
    }

    public function httpPostMethod(Http $http, array $queryFields){
    // var_dump("POST");
    // var_dump($queryFields);
      $values = [];
      $values['mail'] = $queryFields['mail'];
      $values['mdp'] = $queryFields['mdp'];
      // var_dump($queryFields);
      $new_log = new LoginClientModel(new Database());


      $result = $new_log->read($values);
      // var_dump($result);

      if($result != false){
        $create_session = new Usersession();
        $_SESSION['user'] = 1;
        $_SESSION['panier'] = [];

            // var_dump("TEST connect YES");
        $create_session->create($result);// create($userId, $firstName, $lastName, $email)
        $flash_msg_connection = new FlashBag;
        $message = "Vous êtes connecté !";
        $flash_msg_connection->add($message);
        //

        // var_dump($_SESSION);
        $empty_array = array();
        $get_menu = new HomeModel(new Database());
        $reponse = $get_menu->read($empty_array);
        return ["all_menus" => $reponse];
        // $http->redirectTo("/loginclient");
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
