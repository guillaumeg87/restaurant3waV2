'use-strict'




function seConnecter(event){
    console.log("click Connect");
    document.querySelector(".formConnect").classList.toggle("hidden");
    document.querySelector(".formCreate").classList.toggle("hidden");
    
    if(document.querySelector(".formCreate").classList.contains("visible")){
      document.querySelector(".formCreate").classList.add("hidden");
    }
};

function creerSonCompte(event){
  console.log("click Create compte");
  document.querySelector(".formCreate").classList.add("visible");




};
