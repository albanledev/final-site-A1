<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="inscription.css" rel="stylesheet">
    <title>Inscription</title>
</head>
<body>
    <div class="tete"><img src="../images/connexion_black.png" alt="inscription"></div>
    <div class="shesh"></div><br>


<h1>Inscription</h1>
<div class='flex'>
<div class="bloc_boss">
    <form action="inscription_envoi.php" method="POST" onSubmit="return validate()">
    <label>Adresse e-mail :</label>&nbsp;&nbsp;&nbsp;
    <input type='mail' name="mail" required><br>
    
    
    <label>Mot de passe :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type='password' name="password" id="mdp1" required><br>

    <label>Confirmation :   </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type='password' name="password2" id="mdp2" required>


</div>
</div>

<button type="submit">S'inscrire</button>



</form>

<script src="inscription.js"></script>
</body>
</html>