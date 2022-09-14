document.querySelector(".change_mode").addEventListener("click",function(){
    
    document.body.classList.toggle("dark");
    
  });

   // Animation au click

    



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
  
  


console.log(document.getElementById('op1').value);
console.log(document.getElementById('un').value);

document.getElementById("un").addEventListener("click",function(){

  let resultat=document.getElementById('resultat');
  resultat.innerHTML = 29.99;

  

        

  // document.getElementById('montant').value;
}
)

document.getElementById("deux").addEventListener("click",function(){


  let resultat=document.getElementById('resultat')
  resultat.innerHTML =59.99;
}
)

document.getElementById("trois").addEventListener("click",function(){
  let resultat=document.getElementById('resultat')
  resultat.innerHTML =199.99;
  

}
)

document.getElementById("op1").addEventListener("click",function(){
  let resultat=document.getElementById('resultat');
  if (document.getElementById("op1").checked == true){
  resultat.innerHTML =Math.round(parseInt(resultat.innerHTML) +20);}
  else if(document.getElementById("op1").checked == false){
    resultat.innerHTML =Math.round(parseInt(resultat.innerHTML) -20);
  }

}
)

document.getElementById("op2").addEventListener("click",function(){
  let resultat=document.getElementById('resultat');
  if (document.getElementById("op2").checked == true){
  resultat.innerHTML =Math.round(parseInt(resultat.innerHTML) +5);}
  else if(document.getElementById("op2").checked == false){
    resultat.innerHTML =Math.round(parseInt(resultat.innerHTML) -5);
  }

}
)

document.getElementById("op3").addEventListener("click",function(){
  let resultat=document.getElementById('resultat');
  if (document.getElementById("op3").checked == true){
  resultat.innerHTML =Math.round(parseInt(resultat.innerHTML) +10);}
  else if(document.getElementById("op3").checked == false){
    resultat.innerHTML =Math.round(parseInt(resultat.innerHTML) -10);
  }

}
)


function menu() {  
  const NAVBAR = document.querySelector('.navbar');
  const BURGER = document.querySelector('.burger');
  BURGER.addEventListener('click', (e) => {    
    NAVBAR.classList.toggle('show-nav'); 
  });    
}
menu();