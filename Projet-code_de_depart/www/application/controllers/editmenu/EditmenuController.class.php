<?php

class EditmenuController
{

  public function httpGetMethod(Http $http, array $queryFields){
    $new_session = new Usersession();

    $values = [];


    $values["id"] = $queryFields["id_menus"];

    $new_log = new EditmenuModel(new Database());

    $result = $new_log->read($values);

    return ["edit_menu" => $result];

    }

    public function httpPostMethod(Http $http, array $new_version){


        // $new_version["id"] = $_GET["id"];
        // var_dump("POST");
        var_dump($new_version);
        $new_log = new EditmenuModel(new Database());

        $result = $new_log->modify($new_version);

        $http->redirectTo("/listemenu");

    }


}

 ?>
