<?php

class Addarticle{



    function __construct(){
        $test = "test";
        $menu = [$test =>'test'];
        $stack = array_push($_SESSION['panier'], $menu);

    }

}

 ?>
