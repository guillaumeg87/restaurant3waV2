<?php

class DeletemenuController{

  public function httpGetMethod(Http $http, array $queryFields){
    $new_session = new Usersession();
    var_dump("GET");
    var_dump($queryFields);



    $new_log = new DeletemenuModel(new Database());

    $result = $new_log->delete($queryFields);

    $http->redirectTo("/listemenu");

    }

    public function httpPostMethod(Http $http, array $queryFields){



    }
}

 ?>
