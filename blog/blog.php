<?php require "../database/connect.php";?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="blog.css" rel="stylesheet">
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

    <link href='css/froala_editor.pkgd.min.css' rel='stylesheet'/>
    <script src="js/froala_editor.pkgd.min.js" type="text/javascript"></script>

    <title>Blog</title>
</head>
<body>
<?php require '../templates/menu.php';?>  
    <h1 class="titre_blog">Découvrez nos articles rédigés par la crème des mamans !</h1>
    <div class="centrer">
    <div class="pastilles_choix">
        <p><ul>
            <li><a href="#" class="Byellow un">Les fondamentaux</a></li>
            <li><a href="#" class="Bred deux">Astuces</a></li>
            <li><a href="#" class="Bgreen trois">Santé</a></li>
        </ul></p>
    </div>
</div>
<?php
    // if(isset($_POST['envoi'])){
    //     echo "<pre>";
    //     // var_dump($_FILES['image']);
    //     echo "</pre>";

    // }
?>


  
<?php 
// session_start();
// if (isset($_SESSION['isAdmin']) && $_SESSION['isAdmin']==true){

// }
?>



    <div class="flex_articles">
        <!-- <div class="container yellow"><img src="https://drolesdemums.com/wp-content/uploads/2015/01/femme-pense.jpg" alt="maman" class="img_blog nb1 im_jaune" ><div class="text"><h3 class="Byellow"> Maman, c'est quoi ?</h3></div></div>

        <div class="container red"><img src="https://img.freepik.com/photos-gratuite/heureuse-jeune-femme-pouce-air_93675-54748.jpg" alt="maman" class="img_blog nb2 im_rouge"><div class="text text2"><h3 class="Bred">Les 10 commandements pour jeunes mamans</h3></div></div>

        <div class="container green"><img src="http://www.lesaffaires.com/uploads/images/normal/31df1fd82b0612b63642620f5f2df881.jpg" alt="maman" class="img_blog nb3 im_verte"><div class="text"><h3 class="Bgreen">Assurer la sécurité de son poupon</h3></div></div>

        <div class="container yellow"><img src="https://www.chateau-thierry.fr/sites/chateau-thierry/files/image/article/famille_nucleaire.jpg" alt="maman" class="img_blog nb4 im_jaune"><div class="text"><h3 class='Byellow'>Savoir gérer sa nouvelle vie de famille</h3></div></div>

        <div class="container green"><img src="https://www.beautefeminine.com/wp-content/uploads/2020/08/Femme-sportive-et-lookee-0.jpg" alt="maman" class="img_blog nb5 im_verte"><div class="text"><h3 class="Bgreen">Garder la forme !</h3></div></div>

        <div class="container red"><img src="https://observatoiresedentarite.com/wp-content/uploads/2020/02/loupe-lecture.jpg" alt="maman" class="img_blog nb6 im_rouge"><div class="text"><h3 class="Bred">Trouver un prénom ?</h3></div></div>

        <div class="container yellow"><img src="https://fac.img.pmdstatic.net/fit/http.3A.2F.2Fprd2-bone-image.2Es3-website-eu-west-1.2Eamazonaws.2Ecom.2Ffac.2F2018.2F12.2F10.2F09a1a89c-b0bc-449b-9124-e42abe4c1eb1.2Ejpeg/850x478/quality/90/crop-from/center/9-symptomes-tabous-de-la-grossesse.jpeg" alt="maman" class="img_blog nb6 im_jaune"><div class="text"><h3 class="Byellow">Vivre une grossesse</h3></div></div> -->

<?php

$reception_avis = $database->prepare("SELECT * FROM articles");
$reception_avis->execute();

$images = $reception_avis->fetchAll(PDO::FETCH_ASSOC);
// var_dump($images);
foreach ($images as $image){

    ?>


<a href="article.php?articles_id=<?php echo $image['articles_id']?>"><div class="container <?php echo $image['articles_theme']?>"><img src="<?php echo $image["articles_image"] ?>" alt="<?php $image["articles_titre"]?>" class="img_blog nb6 im_jaune"><div class="text"><h3 class="B<?php echo $image['articles_theme'] ?>"><?php echo $image["articles_titre"]?></h3></div></div></a>



<?php
if(isset($_SESSION["isAdmin"]) && $_SESSION['isAdmin'] == true){
    echo "
    <form action='delete_blog.php' method='POST'>

    <div class='flex_supp'>
        <div><input type='hidden' name='supp' value='$image[articles_id]'></div>
        <div><button type='submit' class='delete_button'>Supprimer le post</button></div>
    </div>


    </form>
";
}}
?>

<?php 

if (isset($_SESSION['isAdmin']) && $_SESSION['isAdmin']==true){

?>


<div class='form_manage'>




    
        <form action='blog_envoi.php' method='POST' enctype='multipart/form-data' id='form_blog'>
         
        <h1>Ajouter un article !</h1>


<label class="js" for="theme">Choisir un thème : </label>
                        <select name="theme">
                            <option value= "yellow">🟡 Les fondamentaux</option>
                            <option value="red">🔴 Astuces</option>
                            <option value="green">🟢 Santé</option>

                        </select>

        <div>   
            <label for='titre'>Nom de l'article</label>
            <input type='text' name='titre' id='titre'>
        </div>

        <div>
            <label for='photo'>Choisir une photo</label>
            <input type='file' accept='image/png, image.jpeg' name='image'> 
        </div>


        <textarea name='contenu' id="mytextarea">Hello, World!</textarea>
        <!--<textarea name='contenu' id='form_blog' cols='30' rows='10' class='decale_blog'>Rédiger le contenu de votre article...</textarea><br>-->

        <div id='exemple'></div>

        <script>

            var editor = new FroalaEditor('#exemple');

        </script>
        <button type='submit' class='decale_blog' name='envoi'>Envoyer l'article</button>
        </form>
        </div>
    <?php    

};
        ?>



    </div>
        <div class="flex_change_mode">
            <button class="change_mode decale_blog" class="button_dark">
                Modifier le mode
            </button>
            </div>
    
    
    <script>
      tinymce.init({
        selector: '#mytextarea'
      });
    </script>
    <script src="blog.js"></script>
<script src="js/froala_editor.pkgd.min.js" type="text/javascript"></script>

</body>
</html>