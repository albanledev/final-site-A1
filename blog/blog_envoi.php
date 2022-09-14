<?php

require "../database/connect.php";

// 'd/m:Y H:i:s'
$date=date('d/m:Y H:i:s');
echo($date);
// YYYY-MM-DD HH:MI:SS
$donnees_avis =
["formTitre" => htmlspecialchars( $_POST["titre"]),
"formImage" => 'images/' . $_FILES["image"]['name'],
// 'img_file' => $_FILES['image']['tmp_name'],
"formCommentaire" => $_POST["contenu"],
"formDate" => $date,
"formTheme" => $_POST["theme"]];
// echo $_POST["Image"];
// $date=date('d/m:Y H:i:s');
echo $donnees_avis['formImage'];


$tmp = ['img_file' => $_FILES['image']['tmp_name']];

move_uploaded_file($tmp['img_file'], $donnees_avis['formImage']);




$envoiDataAvis = $database->prepare("INSERT INTO articles (articles_titre, articles_image, articles_contenu ,articles_date, articles_theme) VALUES(:formTitre, :formImage, :formCommentaire, :formDate, :formTheme)");

// if(isset($_POST['envoi'])){
//     echo "<pre>";
//     var_dump($_FILES['image']);
//     echo "</pre>";

// }

if($envoiDataAvis->execute($donnees_avis)){
    header("Location: blog.php");
    //exit;
}else{
    echo "Une erreur est survenue";


}



?>