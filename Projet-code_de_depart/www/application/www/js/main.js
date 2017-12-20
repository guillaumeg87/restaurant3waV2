'use strict';

/////////////////////////////////////////////////////////////////////////////////////////
// FONCTIONS                                                                           //
/////////////////////////////////////////////////////////////////////////////////////////




/////////////////////////////////////////////////////////////////////////////////////////
// CODE PRINCIPAL                                                                      //
/////////////////////////////////////////////////////////////////////////////////////////


$(document).ready(function(){
      console.log("ready");
      $("#bloc_connect").on("click", "#connect", seConnecter);
      $("#bloc_connect").on("click", "#create_compte", creerSonCompte);
      $("#logAdmin").on("click", "#linkAdmin", logAdmin);
      $("#recap_panier").on("click", ".moins",modify_quantity);
      $("#recap_panier").on("click", ".plus",modify_quantity);
      $()
      $(window).on("scroll", moveNav);

});
