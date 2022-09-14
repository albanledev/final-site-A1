<?php

require "../database/connect.php";

// 'd/m:Y H:i:s'
$date=date('d/m:Y H:i:s');
echo($date);
// YYYY-MM-DD HH:MI:SS
$donnees_avis =
["formNom" => $_POST["nom"],
"formNote" => $_POST["note"],
"formCommentaire" => $_POST["commentaire"],
"formDate" => $date];
// echo $_POST["note"];
// $date=date('d/m:Y H:i:s');

$envoiDataAvis = $database->prepare("INSERT INTO avis (avis_nom, avis_note, avis_commentaire,avis_date) VALUES(:formNom, :formNote, :formCommentaire
, :formDate)");



if($envoiDataAvis->execute($donnees_avis)){
    header("Location:../abonnements/abonnements.php");
    //exit;
}else{
    echo "Une erreur est survenue";


}



?>