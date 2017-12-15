# Projet Restaurant

**Point du 7/12/2017**

## Partie Admin Salarié

-> connection / déconnexion
-> entrer un menu
-> supprimer un menu
-> modifier un menu
-> suivre les commandes en cours
-> (option : modifier les statuts des commandes)

## Partie Admin Client

-> consulter ses commandes en cours
-> connection / déconnexion
-> peut supprimer son compte
-> (option : suivre le status des commandes)
-> (option : avoir accès à son historique de commandes)

## Partie Interface Client

* Navigation fixe
  -> Panier
  -> Bouton créer son compte => fait
  -> Bouton se connecter => fait

* Main
  -> Slider
  -> Calendrier

* Footer
  -> Lien de connection administrateur
  -> Information diverse


## Formulaire Créer son compte Client => fait
  -> input **Prénom**
  -> input **Nom**
  -> input **Mail**
  -> input **Adresse**
  -> input **CP**
  -> input **Ville**
  -> input **Mot de passe**
  -> Bouton *Créer son compte* (**type submit**)

  (A voir comment on le fait-> Possibilité de modifier/supprimer son compte =>  voir sur quelle page on fait ça => ajouter bouton [type submit] permettant de faire ça)

## Formulaire salarié
  -> input **Nom du menu**
  -> input **Entrée**
  -> input **Plat**
  -> input **Dessert**
  -> Input **tarif**
  -> Bouton *Créer le menu* (**type submit**)


## Base de données

**Table**
    1. Client
        *id*
        *Nom*
        *Prénom*
        *Mail*
        *Adresse*
        *CP*
        *Ville*
        *MdP*
        *Commande*
        *Réservation*

    2. Salarié
        *id*
        *Nom*
        *MdP*

    3. Commandes
        *id*
        *parent* (peut etre NULL => info pour création BDD)
        *menu*
        *horaire*

    4. menu
        *id* (numéro menu)
        *Nom Menu*
        *Entrée*
        *Plat*
        *Dessert*
        *Tarif*

    5. Photo (option)
        *id*
        *url*
        *parent*

    6. Réservation
        *id*
        *nombre de personne*
        *horaire*

## Liste des Objets à créer

### Utilisateur

    1. Propriétés
        $id;
        $prenom;
        $nom;
        $mail;
        $adresse;
        $cp;
        $ville;
        $mot de passe;

    2. Cas d'utilisation (=> scénario et schéma UML à faire)

        * passer une commande => 1
        * faire une réservation => 1
        * Modifier ses informations personnelles => 1
        * Supprimer son compte personnel => 1
        * Avoir accès à son historique de commande => 2
        * Donner un avis ou écrier un commentaire => 2
        * Se connecter ou se déconnecter


### Salarié

            1. Propriétés
                $id;
                $nom;
                $mot de passe;

            2. Cas d'utilisation (=> scénario et schéma UML à faire)

                * Créer un menu => 1
                * Modifier un menu => 1
                * Supprimer un menu => 1
                * Voir les commandes en cours => 1
                * Voir la liste des menus proposés => 1
                * Se connecter ou se déconnecter => 1

### Commandes

            1. Propriétés
                $Nom du menu;
                $date;
                $horaire;
                $montant => donc réfléchir à quel endroit on montre un détail de commande et où on fait le calcul (PHP ou SQL)

            2. Cas d'utilisation (=> scénario et schéma UML à faire)

                * Afficher la liste des commandes du client dans son espace utilisateur
                * Affiche la liste de toutes les commandes de tous les clients => coté salarié


### Réservation

            1. Propriétésa
                $Nom du client;
                $date;
                $horaire;

            2. Cas d'utilisation (=> scénario et schéma UML à faire)

                * Afficher la liste des réservations coté espace client
                * Affiche la liste de toutes réservations  + aficher nombre de lace disponible => coté salarié

### Pages ou vue à faire

**NOTA :** *Main -> le controler remplira cette page suivant ce qu'on lui demande d'afficher*

            1. Home
                * Navigation
                * Main -> Slider + Calendrier
                * Footer

            2. Menu
                * Main -> affiche des menus sous forme de bloc
                    -> bouton commander ce menu => ajoute produit dans le panier mais il faut qu'on en rediscute, on en a pas parlé jusque là)
                    -> voir comment on gère le panier, validation de commande etc...

            3. Venir
                * Coordonées du restau
                * Map Google

            4. Page contact
                * Formulaire à voir si on a le temps...
