<?php



require "../database/connect.php";
include "../remerciement/remerciement.php";

$donnees = [
    "formNom" => $_POST["nom"],
    "formEmail" => $_POST["mail"],
    "formPass" => password_hash($_POST["password"], PASSWORD_DEFAULT)

    
];

$donnees_code = [
    "formCode" => $code,
    "formEmail" => $_POST["mail"],



    
];
echo $code;






$envoiData = $database->prepare("INSERT INTO utilisateurs (utilisateurs_nom, utilisateurs_mail, utilisateurs_mdp) VALUES(:formNom, :formEmail, :formPass)");

$envoiDataCode = $database->prepare("INSERT INTO code_parrainage (code_parrainage_mail, code_parrainage_code) VALUES(:formEmail, :formCode)");




if($envoiData->execute($donnees) && $envoiDataCode->execute($donnees_code)){
    header("Location:../remerciement/remerciement.php");//Redirection
    exit;//on dit au php de s'arrêter ici vu qu'on redirige
}else{
    echo "Une erreur est survenue";
}
;






?>