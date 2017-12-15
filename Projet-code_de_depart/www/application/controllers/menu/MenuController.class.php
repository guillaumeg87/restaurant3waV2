<?php

class MenuController
{

  public function httpGetMethod(){

      return ['flashBag' => new FlashBag()];

    }

    public function httpPostMethod(Http $http, array $queryFields){

          $values = [];
          $values['nom_menu'] = $queryFields['nom_menu'];
          $values['entree'] = $queryFields['entree'];
          $values['plat'] = $queryFields['plat'];
          $values['dessert'] = $queryFields['dessert'];
          $values['tarif'] = $queryFields['tarif'];
// var_dump($values);
          $new_log = new MenuModel(new Database());

          $result = $new_log->write($values);
          $http->redirectTo("/menu");
    }


}

 ?>
