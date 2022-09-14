
 
 var slideIndex = 0;
 showSlides(); // affichage du diapo
 
 function showSlides() {
   var slides = document.getElementsByClassName("mySlides");
   for (let i = 0; i < slides.length; i++) {
     slides[i].style.display = "none";
   }
   slideIndex++;
   if (slideIndex > slides.length) {slideIndex = 1}
   slides[slideIndex-1].style.display = "block";
   setTimeout(showSlides, 3000); 
 }
 



document.querySelector(".change_mode").addEventListener("click",function(){
    
  document.body.classList.toggle("dark");
  
});






const modal = document.querySelector('#modal');
const openModal = document.querySelector('#open-button');
const closeModal = document.querySelector('#closeButton');

openModal.addEventListener('click', () => {
  modal.showModal();
})

closeModal.addEventListener('click', () => {
  modal.close();
})







// monStorage = localStorage;
// // monStorage.setItem('nom','ronaldo');



// nameField.textContent = getItem('nom');

// if (monStorage.length > 0){
//   console.log(monStorage);
//   nameField.textContent = getItem('nom');
// }

var nameField = document.querySelector('#nom');

if (localStorage.getItem("nom")!= undefined){
  nameField.textContent = localStorage.getItem("nom")
  ;
}


closeButton.onclick = () =>{
  localStorage.setItem("nom",nameField.value);
}







// burger


// const hamburger = document.querySelector(".ham");  
//  const navsub = document.querySelector(".nav-sub");  
//  hamburger.addEventListener('click', () => {  
//   hamburger.classList.toggle("change")  
//   navsub.classList.toggle("nav-change")  
//  });  


//  // Animation au click

//  window.addEventListener('click', (item) => {
   
//   const rond = document.createElement("div");
//   rond.className = "animation_click";
//   rond.style.top = `${item.pageY - 25}px`;
//   rond.style.left= `${item.pageX - 25}px`;
//   document.body.appendChild(rond);

//   setTimeout(() => {
//     rond.remove();
//   }, 1500)
//  })




/** MENU BURGER */

  function menu() {  
    const NAVBAR = document.querySelector('.navbar');
    const BURGER = document.querySelector('.burger');
    BURGER.addEventListener('click', (e) => {    
      NAVBAR.classList.toggle('show-nav'); 
    });    
  }
  menu();