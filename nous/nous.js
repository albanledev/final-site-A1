


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




 function menu() {  
  const NAVBAR = document.querySelector('.navbar');
  const BURGER = document.querySelector('.burger');
  BURGER.addEventListener('click', (e) => {    
    NAVBAR.classList.toggle('show-nav'); 
  });    
}
menu();