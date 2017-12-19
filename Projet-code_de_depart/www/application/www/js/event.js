'use-strict'




function seConnecter(event){
    event.preventDefault();

    console.log("click Connect");
    document.querySelector(".formConnect").classList.toggle("hidden");

    // if(document.querySelector(".formCreate").classList.contains("visible")){
    //
    //   document.querySelector(".formCreate").classList.add("hidden");
    //   document.querySelector(".formCreate").classList.remove("visible");
    // }
};

function creerSonCompte(event){

  console.log("click Create compte");
  document.querySelector(".formCreate").classList.add("visible");

};

function logAdmin(event){
  event.preventDefault(event);

  console.log("click Log Employee");
  document.querySelector(".logEmployee").classList.toggle("hidden");

};
