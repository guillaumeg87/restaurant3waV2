<?php
/**
 * Objet permettant de créer un nouveau panier
 *
 */
class AddtobasketController{

/**
 * [httpGetMethod description]
 * @return [method] [réalise les requetes GET]
 */
public function httpGetMethod(Http $http, array $queryFields){
  // var_dump("GET");



}

/**
 * [httpPostMethod description]
 * @param  Http   $http        [indique le type de requete, dans ce cas POST]
 * @param  array  $queryFields [tableau contenant le contenu du formulaire d'inscription]
 * @return [type]              [description]
 */
  public function httpPostMethod(Http $http, array $queryFields){
    // var_dump("POST");

// var_dump($queryFields);
      $new_log = new Usersession();
      $check_log = $new_log->isAuthenticated();

    if($check_log == false){// si le client n'est pas connecté
        $panier = 0;
        // var_dump($panier);
        $flash_msg_connection = new FlashBag;
        $message = "Vous devez être inscrit pour commander !";
        $flash_msg_connection->add($message);
        return ['flashBag' => new FlashBag(), "panier" => $panier];

      }
      // elseif()
      else{

          $new_basket = new BasketlistModel(new Database());
          $query['id'] = $queryFields["id"];
          $result = $new_basket->get_menu($query);
          $new_article = $new_basket->get_quantity($result, $queryFields);

          $into_basket = $new_basket->add_article($new_article);

          $stack = $new_basket->stock_article();
          $total = $new_basket->count_quantity();
          var_dump($total);
        }

    }

  }
