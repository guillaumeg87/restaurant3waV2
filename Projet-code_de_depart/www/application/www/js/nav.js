'use-strict'


function moveNav(event){
  let blocNav = document.querySelector("nav");
  let nav = document.querySelector("nav ul");

  var y = window.scrollY;
// console.log(y);
  if(y >= 980){
      // nav.clientY = window.scrollMax;
      // nav.scrollIntoView(true);
      nav.style.backgroundColor = "#E6BEAE";
      blocNav.style.marginTop = "0";
      blocNav.style.marginBottom = "0";
      nav.style.marginTop = "0";
      nav.style.marginBottom = "0";
      blocNav.style.position = "fixed";
      blocNav.style.width = "100%";
      blocNav.style.top = "0";
      blocNav.style.zIndex = 10;
      // document.querySelector("nav li i").classList.add("fa-2x");
      // document.querySelector("nav li i").classList.remove("fa-3x");


  }else{
    nav.style.backgroundColor = "#E7D8C9";
    blocNav.style.position = "sticky";
    blocNav.style.top = "inherit";
    // document.querySelector("nav li i").classList.remove("fa-2x");
    // document.querySelector("nav li i").classList.add("fa-3x");

    // nav.scrollIntoView(false);

  }
}
