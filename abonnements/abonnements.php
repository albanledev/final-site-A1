<?php require "../database/connect.php";?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="abonnements.css" rel="stylesheet">
    <title>Formules d'abonnements</title>
</head>
<body>
<?php require '../templates/menu.php';?>  

<h1>Nos différentes formules d'abonnements</h1>

<div class="flex_abonnements">
    <div class="abo abo1" id="un" value="29.99">
        <h3>Formule Classique</h3><div class="barre"></div>
        <h4>Abonnement/Mois</h4><br/>
        <p> - 29,99€<br>
            - Accès à un seul body connecté<br>
            - Remboursable avant 3 jours</p>
            
    </div>

    <div class="abo abo2" id="deux" value="49.99">
        <h3>Formule Premium</h3><div class="barre"></div>
        <h4>Abonnement sur 3 Mois</h4><br/>
        <p> - 59,99€<br>
            - Accès à la gamme saisonnière<br>
            - Remboursable avant 3 jours<br>
            - fonctionnalités additionelles sur l'application </p>
    </div>
    
    <div class="abo abo3" id="trois" value="199.99">
        <h3>Formule Excellence</h3><div class="barre"></div>
        <h4>Abonnement sur l'année</h4><br/>
        <p> - 199,99€<br>
            - Accès à la gamme totale<br>
            - Remboursable avant 3 jours<br>
            - fonctionnalités additionelles sur l'application<br>
            - articles et guides offerts pour être jeunes mamans offerts<br>
            - rencontres et salons avec influenceuses<br>
            - garantie offerte</p>
    </div>


</div>


<div class="flex_dash">
<div class="options">
    
    <h2>Options supplémentaires !</h2><div class="barre"></div><br>
    
    <input type='checkbox' id="op1" value="20" onclick="getValue1();"> <label>Rencontre mensuel avec tes influenceuses préférées ! → <i>20€   </i><label><br>
    <input type='checkbox' id="op2" value="5" onclick="getValue2();">  <label>Elaboration du body sur-mesure → <i>5€   </i><label><br>
    <input type='checkbox' id="op3" value="10" onclick="getValue3();">    <label>Cadeau surprise mensuel ! → <i>10€   </i><label>
</div>
<div class="flex_colonne">
<div>
    <p class="decale">Je donne : <span id="resultat"></span> €</p>
</div>
<div>
    <button class="bouton_validation">Valider</button>
</div>
</div>

</div>


<div class="flex_second_part">
<div class="flex_inscription">

    <form action="../envoi/envoi_avis.php" method="POST">

                <div class="inscription_input">
                    <h2><i>Laissez nous votre avis !</i></h2>
                    <input type="text" label="Votre nom :" placeholder="Nom" name="nom" class="resize_name">
                    <!-- <div class="tri_etoiles">      Attribuer une note : -->
                    <!-- <span class='star' data-star="1" checked>&#9733;</span> -->
                    <!-- <span class='star' data-star="2">&#9733;</span>
                    <span class='star' data-star="3">&#9733;</span>
                    <span class='star' data-star="4">&#9733;</span>
                    <span class='star' data-star="5">&#9733;</span> -->
                    <?php 
                    $date=date('d/m/Y H:i:s');
                    ?>
                    <!-- <input type="hidden" class="rating" name="note"> -->
                    <!-- <span class="rating" name="note"></span> -->
                    <!-- </div> -->
                    <input type="range" label="Note du produit" min="0" max="10" value="5" list="tickmarks" name="note">
                    <input type="hidden" name="date" value=<?php $date?>>
                    
                    <datalist id="tickmarks">
  <option value="0" label="0%">
  <option value="1">
  <option value="2">
  <option value="3">
  <option value="4">
  <option value="5" label="50%">
  <option value="6">
  <option value="7">
  <option value="8">
  <option value="9">
  <option value="10" label="100%">
</datalist>
                    
                    <textarea placeholder="Laisser un avis..." name="commentaire" class="modify_textarea" rows="100" cols="5"></textarea>
                    
                    


                    
                  <div> 
                    <button type="submit" class="inscription_bouton">Envoyer</button>
                  </div> 
                </div>

    </form>
</div>

<?php
        
$reception_avis = $database->prepare("SELECT * FROM avis ORDER BY avis_date DESC");
$reception_avis->execute();

$utilisateurs_avis = $reception_avis->fetchAll(PDO::FETCH_ASSOC);
// echo "<pre>";
// print_r($utilisateurs_avis);
// echo "</pre>";
?>

<div class="flex_writer">
<?php
    echo "<h2 class='fixe_title'><i>Commentaires utilisateurs</i></h2>";
//    echo "<pre>";
//     var_dump($utilisateurs_avis);
//     echo "</pre>";
foreach($utilisateurs_avis as $utilisateur_avis){
    // if $utilisateur

    echo "<br><br>";
    echo "<div class='fixed_avis'><h3>$utilisateur_avis[avis_nom]</h3><h4><span class='more_big'>$utilisateur_avis[avis_note]</span>/10</h4><br></div>";
    echo "<p>$utilisateur_avis[avis_commentaire] </p>";
if (isset($_SESSION['isAdmin']) && $_SESSION['isAdmin']==true){
    echo "
        <form action='../envoi/delete.php' method='POST'>

        <div class='flex_supp'>
            <div><input type='hidden' name='supp' value='$utilisateur_avis[avis_id]'></div>
            <div><button type='submit' class='delete_button'>Supprimer le post</button></div>
        </div>


        </form>
    ";
}}
?>
</div>
</div>

<div class="flex_change_mode">
    <button class="change_mode" class="button_dark">
        Modifier le mode
    </button>
    </div>
    

    
    <script src="abonnements.js"></script>
</body>
</html>