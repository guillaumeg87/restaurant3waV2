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


function modify_quantity(event){

// Problème:  garde la dernière valeur en mémoire à corriger

  event.preventDefault();
  console.log("click");
let inputQuantity = document.querySelector(".quantity-fields");// object
let inputQuantityValue = inputQuantity.value; // string
    champText = parseInt(inputQuantityValue);

  if(event.target.classList.contains("plus")){
      champText += 1;
      // console.log("PLUS");

      inputPlus = event.target.parentNode.querySelector(".quantity-fields");
      return inputPlus.value = champText;

  }
  else if(event.target.classList.contains("moins")){

    champText -= 1;

      if(champText <= 0){

        console.log("valeur : " + champText);

          champText = 0;
          inputMoins = event.target.parentNode.querySelector(".quantity-fields");

          return inputMoins.value = champText;
      }
      inputMoins = event.target.parentNode.querySelector(".quantity-fields");

      return inputMoins.value = champText;

  }else if(inputQuantityValue == ""){

      inputQuantityValue = 0;
      return inputQuantityValue;
  }

};

// document.querySelector(".bloc_modify_quantity").style.backgroundColor = "red";

//TEST
// document.querySelector("#recap_panier tbody tr td:last-of-type").style.backgroundColor = "red";
