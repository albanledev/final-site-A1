<?php
session_start();


require "../database/connect.php";
// include "../remerciement/remerciement.php";

$donnees = [

    "formEmail" => $_POST["mail"],
    "formPass" => password_hash($_POST["password"], PASSWORD_DEFAULT)

    
];






$envoiData = $database->prepare("INSERT INTO inscription ( inscription_mail, inscription_mdp) VALUES( :formEmail, :formPass)");






if($envoiData->execute($donnees)){
    $_SESSION['isAdmin'] = true;
    $_SESSION['mail'] = $mail;

    header("Location:../index.php");//Redirection
    // echo "Merci de votre confiance !";
    exit;//on dit au php de s'arrêter ici vu qu'on redirige
}else{
    echo "Une erreur est survenue";
}
;






?>