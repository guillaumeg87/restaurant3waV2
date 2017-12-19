<?php
/**
 * Objet permettant de créer un nouveau panier
 *
 */
class BasketlistController{

/**
 * [httpGetMethod description]
 * @return [method] [réalise les requetes GET]
 */
public function httpGetMethod(Http $http, array $queryFields){


/* EN ATTENTE DE MODIFICATION => AJOUT DE L'OBJET PANIER */
//   $new_log = new Usersession();
//   $check_log = $new_log->isAuthenticated();
//
// if($check_log == false){// si le client n'est pas connecté
//     $panier = 0;
//     // var_dump($panier);
//     $flash_msg_connection = new FlashBag;
//     $message = "Vous devez être inscrit pour commander !";
//     $flash_msg_connection->add($message);
//     return ['flashBag' => new FlashBag(), "panier" => $panier];
// }
// else{// si le client est connecté
//
//     // var_dump(array_key_exists('panier', $_SESSION));
//     // var_dump($queryFields);
//     // var_dump($queryFields);
//     // var_dump($_SESSION['panier']);
//
//     if(!empty($queryFields)){
//       var_dump("$queryfields n'est pas vide");
//       $stack = array_push($_SESSION['panier'], $queryFields);
//
//     }
//     else{
//       var_dump("queryfields est vide");
//
//     }
//
// }


  }

/**
 * [httpPostMethod description]
 * @param  Http   $http        [indique le type de requete, dans ce cas POST]
 * @param  array  $queryFields [tableau contenant le contenu du formulaire d'inscription]
 * @return [type]              [description]
 */
  public function httpPostMethod(Http $http, array $queryFields){
    var_dump("POST");





    $new_account = new AddtobasketModel(new Database());



  }

};
