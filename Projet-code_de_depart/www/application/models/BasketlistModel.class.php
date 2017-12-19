<?php
/**
 * Le panier doit pouvoir faie les choses suivantes
 * - se remplir : add_article
 * -se vider : clear_article
 * - supprimer un ou plusieurs articles :delete_article
 * - se transmetre à la SESSION : stock_article
 * - stocker une commande dans la BDD : save_to_bdd
 * - recharger une commande depuis la bdd
 * - récupérer le contenu dun menu selon son id
 */
class BasketlistModel {

    private $database;
    private $basket;

    public function  __construct(Database $bd){// attend un objet de a classe database
        $this->database = $bd;
        if (!isset($_SESSION['panier'])) {
          $_SESSION['panier'] = [];
        }
        $this->basket = $_SESSION['panier'];
    }

/**
 * [get_menu description] = Permet de récupérer les informatios d'un menu sélectionné par l'utilisateur
 * @param  array  $values [description]
 * @return [type]         [description]
 */
    public function get_menu(array $values){

      $sql = "SELECT *
              FROM menu
              WHERE id = :id";

      return $this->database->queryOne($sql, $values);

    }


/**
 * [get_quantity description] = Ajoute la quantité de menu saisie par l'uilisateur dans le tableau de résultat de la requête avant de transmetre toutes ces donénes au tableau de session
 * @param  array  $result [description]
 * @return [type]         [description]
 */
    public function get_quantity(array $result, array $queryFields){

        $result['quantity'] = $queryFields['quantite'];
        return $result;
    }

/**
 * [stock_article description] = Permet de stocker un menu sélectionner dans le $_SESSION
 * @param  array  $values [description]
 * @return [type]         [description]
 */
    public function stock_article(){



      $_SESSION['panier'] = $this->basket;
      return $this;

    }

    public function add_article(array $new_article){

      // var_dump($new_article);
      if(empty($this->basket)){// quand le panier est vide

          $this->basket[$new_article['id']] = $new_article;
          return $this;

      }
      else{// quand il y a au moins un article dans le panier



              if (array_key_exists($new_article['id'], $this->basket)){// recherche par l'id si la nouvelle entrée existe dans le panier existant

                      $int_arrayProduct = (int)$this->basket[$new_article['id']]['quantity'];
                      $int_newProduct = (int)$new_article['quantity'];
                      $this->basket[$new_article['id']]['quantity'] = $int_arrayProduct + $int_newProduct;

              }// 1er if
              else{

                $this->basket[$new_article['id']] = $new_article;
                // var_dump($this->basket);

                return $this;

            }
        }//else
    }// add_article

    public function delete_article(array $values){



    }

    public function clear_basket(array $values){



    }

    public function save_to_bdd(array $values){

      $sql = "INSERT INTO menu(nom_menu, entree, plat, dessert, tarif)
              VALUES (:nom_menu, :entree, :plat, :dessert, :tarif)";

      return $this->database->executeSql($sql, $values);


    }

    public function reload_order(array $values){

      $sql = "SELECT
      FROM
      WHERE ";

      return $this->database->queryOne($sql, $values);

    }

    public function count_quantity(){
      $nombre = 0;
      foreach ($_SESSION['panier'] as $menus) {
        $nombre += (int)$menus['quantity'];

      }
      $_SESSION['total_quantity'] = $nombre;
      return $nombre;

    }

}
 ?>
