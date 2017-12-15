<?php

class HomeController // implements controlerInterface
{
    public function httpGetMethod(Http $http, array $queryFields){

      /*
       * Méthode appelée en cas de requête HTTP GET
       *
       * L'argument $http est un objet permettant de faire des redirections etc.
       * L'argument $queryFields contient l'équivalent de $_GET en PHP natif.
       */
          if(isset($_SESSION)){
            $new_session = new Usersession();

          }
          elseif(isset($flash_msg_connection)){
            var_dump($flash_msg_connection);die;
            $flash_msg_connection = new FlashBag;
            $message_error_connect = "Erreur dans la saisie de l'adresse mail ou du mot de passe !
            Si vous n'avez pas de compte, vous pouvez en créer un ci dessous !";
            $flash_msg_connection->add($message_error_connect);
            $http->redirectTo("/");
          }

          $empty_array = array();
          $get_menu = new HomeModel(new Database());
          $reponse = $get_menu->read($empty_array);
          return ["all_menu" => $reponse];

      }




    public function httpPostMethod(Http $http, array $formFields){
    	/*
    	 * Méthode appelée en cas de requête HTTP POST
    	 *
    	 * L'argument $http est un objet permettant de faire des redirections etc.
    	 * L'argument $formFields contient l'équivalent de $_POST en PHP natif.
    	 */

    }
}
