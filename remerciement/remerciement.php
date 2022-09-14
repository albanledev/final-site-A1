<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="remerciement.css" rel="stylesheet">
    <title>Merci !</title>
</head>
<body>


<div class="main">
    <h1>Merci !</h1>
    <p>Votre code de parrainage :</p>

    
    <?php


$alph = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $code='';
        $i=0;
        while($i<10){
            $position=rand(0,25);
            $code=$code.substr($alph,$position,1);
            $i++;
        }
echo $code;
?>
    
    



</div>
</body>
</html>