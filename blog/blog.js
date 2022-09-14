 
 

    








 document.querySelector(".change_mode").addEventListener("click",function(){
    
    document.body.classList.toggle("dark");
    
  });


 // Animation au click

 window.addEventListener('click', (item) => {
   
  const rond = document.createElement("div");
  rond.className = "animation_click";
  rond.style.top = `${item.pageY - 25}px`;
  rond.style.left= `${item.pageX - 25}px`;
  document.body.appendChild(rond);

  setTimeout(() => {
    rond.remove();
  }, 1500)
 })








var jaune = document.querySelectorAll('.yellow');
var vert = document.querySelectorAll('.green');
var rouge = document.querySelectorAll('.red');


var BOSS_JAUNE = document.querySelector('.un');
var BOSS_ROUGE = document.querySelector('.deux');
var BOSS_VERT = document.querySelector('.trois');


function FILTER() {
    BOSS_JAUNE.addEventListener('click', () => {  
      rouge.forEach(function (element) {
        element.classList.add("hide");
      });

      vert.forEach(function (element) {
        element.classList.add("hide");
      });

      jaune.forEach(function (element) {
        element.classList.remove("hide");
      });

        // rouge.classList.add('hide');   
        // vert.classList.add('hide');
        // jaune.classList.remove('hide')
        // // im_rouge.classList.toggle('hide');  
        // // im_verte.classList.toggle('hide');     
    }) 
    BOSS_ROUGE.addEventListener('click', () => {    
      rouge.forEach(function (element) {
        element.classList.remove("hide");
      });

      vert.forEach(function (element) {
        element.classList.add("hide");
      });

      jaune.forEach(function (element) {
        element.classList.add("hide");
      });
    })  
    BOSS_VERT.addEventListener('click', () => {   
      rouge.forEach(function (element) {
        element.classList.add("hide");
      });

      vert.forEach(function (element) {
        element.classList.remove("hide");
      });

      jaune.forEach(function (element) {
        element.classList.add("hide");
      });  
    })}
FILTER();


function menu() {  
  const NAVBAR = document.querySelector('.navbar');
  const BURGER = document.querySelector('.burger');
  BURGER.addEventListener('click', (e) => {    
    NAVBAR.classList.toggle('show-nav'); 
  });    
}
menu();


document.querySelector("#y").addEventListener("click", function()
{
  document.querySelector(".colorWrite").classList.add("yellow");
  document.querySelector(".colorTitle").classList.add("Byellow");
})

document.querySelector("#r").addEventListener("click", function()
{
  document.querySelector(".colorWrite").classList.add("red");
  document.querySelector(".colorTitle").classList.add("Bred");
})

document.querySelector("#g").addEventListener("click", function()
{
  document.querySelector(".colorWrite").classList.add("green");
  document.querySelector(".colorTitle").classList.add("Bgreen");
})