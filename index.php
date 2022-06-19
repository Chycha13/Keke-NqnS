<?php
    require_once "./config/bdd.php";

//TODO
//faire requête select table user_session pour vérifier si session active
$recup_session = $bdd->query(RECUPERATION_SESSION);
$recup_session->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Site de vente de produits gaming professionel">
    <link rel="stylesheet" href="./asset/style.css">
    <title>Page d'accueil</title>

    <script type="text/javascript" src="asset/jquery.js"></script>
    <script type="text/javascript" src="js/index.js"></script>
</head>
<body>
    <header class="headerIndex">
        <div class="Slogan">
            <p>L'antre des Gamer</p>
        </div>
      
        <div class="navigation">
            <a href="#"><span> Boutique </span></a>          
            <a href="./Views/connexion.php"><span> Compte </span></a>
            <a href="#"><span> Panier </span></a>
    <?php
        if(!empty($_SESSION['id_session'])){
    ?>
            <a id="bouton_deconnexion" name="bouton_deconnexion"><span> Déconnexion </span></a>
    <?php
        }
    ?>
        </div>
       
    </header>
 
    <main class="mainIndex">
        <div class="caroussel">
            <img src="./asset/img/baniere.jpg" alt="" width="50%">
        </div>
        <div class="pubIndex">
            <div class="container">
                <div class="card">
                    <span>LLLLLLLLLLLLLLLL</span>
                </div>
                <div class="card">
                   <div class="contenu">
                   <img src="./asset/img/baniere.jpg" alt="" width="50%">
                       <p> MMMMMMMMMMMMMM </p>
                    </div>                      
                </div>
            </div>
            <div class="container">
                <div class="card">
                    <span>LLLLLLLLLLLLLLLL</span>
                </div>
                <div class="card">
                <span>MMMMMMMMMMMMMM</span>
                </div>
            </div>
            <div class="container">
                <div class="card">
                    <span>LLLLLLLLLLLLLLLL</span>
                </div>
                <div class="card">
                <span>MMMMMMMMMMMMMM</span>
                </div>
            </div>
            <div class="container">
                <div class="card">
                    <span>LLLLLLLLLLLLLLL</span>
                </div>
                <div class=" card">
                <span>MMMMMMMMMMMMMM</span>
                </div>
            </div>
        </div>
    </main>



    
</body>

</html>