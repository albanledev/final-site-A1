<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="connexion.css" rel="stylesheet">
    <title>Connexion</title>
</head>
<body>
    <div class="tete"><img src="../images/connexion_black.png" alt="inscription"></div>
    <div class="shesh"></div><br>

    <?php 
session_start();

// $_SESSION['isAdmin'] = true;
// $_SESSION['email'] = "alexis.bougy@devicni.fr";
// var_dump($_SESSION);

?>
<h1>Connexion</h1>
<div class='flex'>
<div class="bloc_boss">
    <form action="connexion_envoi.php" method="POST">
    <label>Adresse e-mail :</label>&nbsp;&nbsp;&nbsp;
    <input type='mail' name="mail" required><br>
     
    
    <label>Mot de passe :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type='password' name="password" id="mdp1" required><br>




</div>
</div>

<button type="submit">Se connecter</button>




<?php

// session_start();
// if($_SESSION['isAdmin'] != true){
//     echo "je suis co à l'admin"
// }


?>


</form>

<script ></script>
</body>
</html>