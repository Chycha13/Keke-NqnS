<?php
    require_once "./config/bdd.php"
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
</head>
<body>
    <header class="headerIndex">
        <div class="Slogan">
            <p>L'antre des Gamer</p>
        </div>
        <div class="navigation">
            <a href="#"><span> Boutique </span></a>
            <a href="#"><span> Déconnexion </span></a>
            <a href="#"><span> Compte </span></a>
        </div>
        <div class="panier">
        <a class="logoPanier" href="#"><img src="./asset/img/caddie.png" alt="PANIER" width="120%"></a>
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