console.log("JS works.");

// -------------- OPEN MENU MOBILE --------------- //
var menuBtn = document.querySelector('.mobile-menu_btn');
var nav = document.querySelector('.nav');
var barBurger1 = document.querySelector('span:nth-child(1)');
var barBurger2 = document.querySelector('span:nth-child(2)');
var barBurger3 = document.querySelector('span:nth-child(3)');

menuBtn.addEventListener("click", function(e){
  if(nav.classList.contains('active')){
    nav.classList.remove("active");
    barBurger1.classList.remove("rotate-top");
    barBurger2.classList.remove("transparent");
    barBurger3.classList.remove("rotate-bottom");
  }
  else{
  	nav.classList.add("active");
    barBurger1.classList.add("rotate-top");
    barBurger2.classList.add("transparent");
    barBurger3.classList.add("rotate-bottom");
  }

});

// -------------- OPEN SUBMENU MOBILE --------------- //
var menuEl = document.querySelector('.main-nav_first-level li');
var submenu = document.querySelector('.main-nav_submenu');

menuEl.addEventListener("click", function(e){
  if(submenu.classList.contains('active')){
    submenu.classList.remove("active");
  }
  else{
  	submenu.classList.add("active");
  }

});






