<?php 
session_start();
if (isset($_SESSION['isAdmin']) && $_SESSION['isAdmin']==true){


// print_r( $_SESSION ['mail']) ;
}
?>

<header>
        <div class="flex_logo">

        <img src="../images/logo.png" alt="logo" class="logo">
        <div></div>
        
        
        <?php 

if (isset($_SESSION['isAdmin']) && $_SESSION['isAdmin']==true){
    echo "<a href='../identification/deconnexion.php'><button class='contact'>Déconnexion $_SESSION[mail]</button></a>";
    // echo $_SESSION['mail'];
}else{
    echo "<a href='../identification/choix.php'><button class='contact'>Identifiez-vous</button></a>";
}
?>
        
        </div>    </header>
    <nav class="navbar">


    <ul class="references_links">
                <li class="navbar__link first"><a href="../index.php">Accueil</a></li>
                <li class="navbar__link second"><a href="../nous/nous.php">Histoire de la marque</a></li>
                <li class="navbar__link third"><a href="../abonnements/abonnements.php">Abonnements</a></li>
                <li class="navbar__link four"><a href="../blog/blog.php">Blog</a></li>
                
            </ul>


            <button class="burger">
    <span class="bar"></span>
    </button>   


    </nav>
