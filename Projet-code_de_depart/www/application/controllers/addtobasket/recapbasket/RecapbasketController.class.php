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
    // var_dump("POST");
    // var_dump($queryFields);

      $new_log = new Usersession();

      $check_log = $new_log->isAuthenticated();

  // var_dump($_SESSION['panier']);

          if(empty($queryFields['quantity'])){
            $flash_msg_connection = new FlashBag;
            $message = "Votre panier est vide, remplissez le !";
            $flash_msg_connection->add($message);
            $http->redirectTo("/addtobasket/recapbasket");
          }else{
              // On réuni les 2 tableaux $queryFields['id'] et $queryFields['quantity']
              $get_quantity = array_combine($queryFields['id'], $queryFields['quantity']);
              var_dump($get_quantity);
              var_dump($_SESSION['panier']);

              foreach ($get_quantity as $id => $quantity) {
                $_SESSION['panier'][$id]['quantity']= $quantity;
                var_dump('salut 1');
                // foreach ($_SESSION['panier'] as $key => $value) {
                //         var_dump('salut 3');
                //
                //             if($key == $id){
                //               var_dump('salut 3');
                //               $key['quantity'] = $value;
                //             }
                //       }
              }//1er foreach
          }// else



    }// methode

  }
