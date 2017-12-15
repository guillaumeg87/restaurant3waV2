<?php

class StopsessionController{

  public function httpGetMethod(Http $http){

    $disconnect = new Usersession();
    $disconnect->destroy();
    var_dump($_SESSION);

    $http->redirectTo("");

    }

    public function httpPostMethod(Http $http, array $queryFields){



    }
}


 ?>
