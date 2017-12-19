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
       $new_log = new Usersession();
       $check_log = $new_log->isAuthenticated();




//PROBLEME : Quand on veut revenir sur la HOME depuis l'espace client, on se déconnecte?
//PROBLEME : si on sort le $new_session du if, on ne se deconnecte jamais??


          if($check_log == true){
            // var_dump($_SESSION);
            // var_dump("Session détectée");
            // $new_session = new Usersession();
          }
          elseif(isset($flash_msg_connection)){
            var_dump($flash_msg_connection);
            $flash_msg_connection = new FlashBag;
            $message_error_connect = "Erreur dans la saisie de l'adresse mail ou du mot de passe !
            Si vous n'avez pas de compte, vous pouvez en créer un ci-dessous !";
            $flash_msg_connection->add($message_error_connect);
            $http->redirectTo("/loginclient");
          }
          $panier = 0;
          $empty_array = array();
          $get_menu = new HomeModel(new Database());
          $reponse = $get_menu->read($empty_array);
          return ["all_menus" => $reponse, "panier" => $panier];

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
