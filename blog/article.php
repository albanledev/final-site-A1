<?php 
require "../database/connect.php";
session_start();

if(isset($_GET["articles_id"]) && !empty($_GET['articles_id']))
{
$reception_avis = $database->prepare("SELECT * FROM articles WHERE articles_id =" . $_GET["articles_id"]);
}
$reception_avis->execute();

$images = $reception_avis->fetchAll(PDO::FETCH_ASSOC);
// echo "<pre>";
// var_dump($images);
// echo "/<pre>";

// var_dump( $images)





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $images[0]['articles_titre']?></title>
</head>
<body>
    <h1><?php echo $images[0]['articles_titre']?></h1>
    <img src="<?php echo $images[0]['articles_image']?>" alt='<?php echo $images[0]['articles_titre']?>'><br><br>
    <p><?php echo $images[0]['articles_contenu']?></p>
    
</body>
</html>


<style>
    img
    {
        max-height: 600px;
        margin-left:  37vw;
        box-shadow: 4px 8px 16px ;
    }

    h1
    {
        text-align: center;
        color: red;
        font-family: sans-serif;
    }

    p
    {
        margin: auto;
        font-size: 1.2em;
        box-shadow: 4px 8px 16px ;
        width: 70%;
        padding: 10px 15px;

    }

    
</style>