<?php

class StopsessionController{

  public function httpGetMethod(Http $http, array $queryFields){
    var_dump("GET");
    $disconnect = new Usersession();
    $disconnect->destroy();
    // var_dump($_SESSION);

    $http->redirectTo("/");

    }

    public function httpPostMethod(Http $http, array $queryFields){
      var_dump("POST");



    }
}


 ?>
