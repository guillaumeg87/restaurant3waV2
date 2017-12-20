<?php
/**
 * Objet permettant de créer un nouveau panier
 *
 */
class RecapbasketController{

/**
 * [httpGetMethod description]
 * @return [method] [réalise les requetes GET]
 */
public function httpGetMethod(Http $http, array $queryFields){
  var_dump("GET");

  var_dump($queryFields);
    $new_log = new Usersession();
    $check_log = $new_log->isAuthenticated();


        // if($queryFields['quantity']){
        //   $flash_msg_connection = new FlashBag;
        //   $message = "Votre panier est vide, remplissez le !";
        //   $flash_msg_connection->add($message);
        //   $http->redirectTo("/addtobasket/recapbasket");
        // }

}


  public function httpPostMethod(Http $http, array $queryFields){
    var_dump("POST");
    var_dump($queryFields);

      $new_log = new Usersession();

      $check_log = $new_log->isAuthenticated();

  var_dump($_SESSION);

          if(empty($queryFields['quantity'])){
            $flash_msg_connection = new FlashBag;
            $message = "Votre panier est vide, remplissez le !";
            $flash_msg_connection->add($message);
            $http->redirectTo("/addtobasket/recapbasket");
          }else{
              // On réuni les 2 tableaux $queryFields['id'] et $queryFields['quantity']
              $get_quantity = array_combine($queryFields['id'], $queryFields['quantity']);

          }



    }// methode

  }
