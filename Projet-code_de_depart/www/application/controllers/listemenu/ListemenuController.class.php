<?php

class ListeMenuController
{

    public function httpGetMethod(){
      $new_session = new Usersession();

      $new_log = new ListemenuModel(new Database());
      $values = array();
      $return_values = $new_log->read($values);

      return ["menus" => $return_values];
    }//method

    public function httpPostMethod(Http $http, array $queryFields){






    }
}

 ?>
