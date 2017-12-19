<?php
// class fournie par Michel
class Usersession{

  public function __construct(){

    if (session_status() == PHP_SESSION_NONE){
      // démarage du module PHP de gestion des sessions.
      session_start();
    }
  }

  public function create($result){
    //Construction de la session utilisateur.
      foreach ($result as $key => $value) {
            $_SESSION[$key] = $value;
      };// => ok fonctionne

  }

  public function destroy(){
      //Destruction de l'ensemble de la session
      $_SESSION = array();
      session_destroy();
      // echo "Vous êtes déconnecté, au revoir";
  }



  public function getEmail(){

      if($this->isAuthenticated() == false){

        return null;

      }

      return $_SESSION['user']['Email'];

  }


  public function getFirstName(){

      if($this->isAuthenticated == false){

        return null;
      }

      return $_SESSION['user']['FirstName'];
  }

  public function getFullName(){

      if($this->isAuthenticated() == false){

        return null;
      }

      return $_SESSION['user']['FirstName'] . " " . $_SESSION['user']['LastName'];

  }

  public function getLastName(){

      if($this->isAuthenticated() == false){

          return null;

      }

      return $_SESSION['user']['LastName'];
  }

  public function getUserId(){
      if($this->isAuthenticated() == false){

          return null;
      }

      return $_SESSION['user']['UserId'];
  }

  public function isAuthenticated(){

      if(array_key_exists('user', $_SESSION) == true){

          if(empty($_SESSION['user']) == false){

              return true;

          }
      }

      return false;
  }

}



 ?>
