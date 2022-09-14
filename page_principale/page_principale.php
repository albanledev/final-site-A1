<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="page_principale.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Sanitec</title>
</head>
<body>
<?php require 'templates/menu.php';?>    


<!-- <header>


        <div class="flex_logo">
        <img src="../images/logo.png" alt="logo" class="logo">
        <div><input type="text" id="toolbar" name="toolbar" placeholder="Rechercher une information"></div>
        <button class="contact">Contact</button>
        </div>
    <nav>
        <div class="references">
          <div class="ham" >  
            <span class="bar1"></span>  
            <span class="bar2"></span>  
            <span class="bar3"></span>  
            </div>

            <ul class="references_links nav-sub">
                <li class="list-item"><a class="nav-link" href="page_principale.php">Accueil</a></li>
                <li class="list-item"><a class="nav-link" href="../nous/nous.php">Histoire de la marque</a></li>
                <li class="list-item"><a class="nav-link" href="../abonnements/abonnements.php">Abonnements</a></li>
                <li class="list-item"><a class="nav-link" href=../blog/blog.php>Blog</a></li>
                
            </ul>


            
        </div>
    </nav>
    </header> -->
    <div class="flex_intro"><div>
    <h1>Kezako</h1>
    <div class="presentation">
        <p>Découvrez Baby Serenity, le body connecté permettant d'évaluer l'état de santé de votre bébé. Soufflez un peu dans vos nouvelles tâches de parents tout en nous laissant veiller sur bébé.</p><br>
        <p>Toutes les données tels que le rythme cardiaque, le rythme respiratoire, la position du bébé ou encore son cycle de sommeil vous seront transmis via l'application Sanitec Watch.
            Vous serez alertés si il y a un quelconque problème</p>
        </p>
    </div></div>
    <div>
    
    
    
    
    
    
    
    
    
      <!-- IMAGES SLIDERS -->
    <!-- diaporama conteneur-->
<div class="diaporama_conteneur">

  
    <div class="mySlides">

      <img src="https://www.t-shirtbebe.com/2185-large_default/body-bebe-pleurer-pour-mieux-regner-version-garcon-.jpg" style="width:100%" class="pos_img">
     
    </div>
  
    <div class="mySlides">

      <img src="https://www.gaspardetzoe.fr/10544-large_default/body-bebe-original.jpg" style="width:100%" class="pos_img">
      
    </div>
  
    <div class="mySlides">

      <img src="https://www.gaspardetzoe.fr/10543-large_default/body-bebe-rigolo-mixte-fragile.jpg" style="width:100%" class="pos_img">
      
    </div>
  
    <!-- Boutons avant et après du slider  -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>
  <br>
  
  <!-- Les ronds représentant les différents bodys -->
  <div style="text-align:center">
    <span class="rond" onclick="currentSlide(1)"></span>
    <span class="rond" onclick="currentSlide(2)"></span>
    <span class="rond" onclick="currentSlide(3)"></span>
  </div>
    </div> 
    </div>
<!-- FIN IMAGES SLIDERS --> 


<!-- bouton ouvrant -->
<div class="flex_button">
<button id="open-button">S'inscrire à la phase bêta du produit</button>
</div>
<!-- onclick="javascript:formulaire()" -->
<dialog class="modal" id="modal">
  <h2 class="modal_title">Inscription</h2><div class="grey_band"></div>
  <br/><form action="envoi/envoi_inscription.php" method="POST">
      <label>Nom : </label><input id="nom" type="text" name="nom"/><br>
    <br><label>Adresse mail : </label><input id="nom" type="mail" name="mail"/><br>
    <br><label>Mot de passe : </label><input type="password" name="pass1"/><br>
    <!-- <br><label> Confirmer le mot de passe : </label><input type="password" name=""/><br> -->
    <br><button id="closeButton" type="submit">Valider</button>
</form>

</dialog>

<div class="flex_change_mode">
  <button class="change_mode" class="button_dark">
      Modifier le mode
  </button>
  </div>
    <script src="page_principale.js"></script>
    </body>
</html>

