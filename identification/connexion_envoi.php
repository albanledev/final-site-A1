<?php
session_start();
require "../database/connect.php";
$mail = $_POST['mail'];
$pass = $_POST['password']; 

$reception_princ = $database->prepare("SELECT * FROM inscription WHERE inscription_mail = :mail LIMIT 1");
$reception_princ->execute([
    'mail' => $mail
]);

$utilisateurs_princ = $reception_princ->fetchAll(PDO::FETCH_ASSOC);
// echo "<pre>";
// print_r($utilisateurs_princ);
// echo "</pre>";

if (count($utilisateurs_princ) != 0) {
    if(password_verify($pass, $utilisateurs_princ[0]['inscription_mdp'])) {
        echo 'gg';
        $_SESSION['isAdmin'] = true;
        $_SESSION['mail'] = $mail;

        header("Location: ../index.php");
    } else {
        echo "nop";
    }
} else {
    header('Location: connexion.php');
}

die;


// Validation du formulaire
// if (isset($_POST['mail']) &&  isset($_POST['password'])) {
//     foreach ($utilisateurs_princ as $user) {
//         if (
//             $user['inscription_mail'] === $_POST['mail'] &&
//             $user['inscription_mdp'] === $_POST['password']
//         ) {
//             $loggedUser = [
//                 'mail' => $user['mail']
//             ];
//         } else {
//             $errorMessage = sprintf('Les informations envoyées ne permettent pas de vous identifier : (%s/%s)',
//                 $_POST['email'],
//                 $_POST['password']
//             );
//         }
//     }
// }
?>

<!-- require "database/connect.php";

echo "<div class='flex_commentaires'>";
foreach($utilisateurs_princ as $utilisateur_princ){


echo "<p class='commentaires'>\"  $utilisateur_princ[avis_commentaire]  \"<span class='prenom'>&nbsp&nbsp&nbsp&nbsp$utilisateur_princ[avis_nom]</span></p>";
}
echo '</div>';
?> -->