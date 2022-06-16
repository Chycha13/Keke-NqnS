<?php

require_once "../config/bdd.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="../asset/style.css">
    <title>Page inscription</title>
</head>
<body>
<header class="headerIndex">
        <div class="Slogan">
            <p>L'antre des Gamer</p>
        </div>
        <div class="navigation">
            <a href="#"><span> Boutique </span></a>
            <a href="#"><span> Déconnexion </span></a>
            <a href="#"><span> Profil </span></a>
        </div>
        <div class="panier">
        <a class="logoPanier" href="#"><img src="../asset/img/caddie.png" alt="" width="120%"></a>
        </div>
    </header>
    <main class="mainInscription">
        <h1>Création de compte</h1>
        <form method="POST" action="../Models/Connexion.php" class="FormInscription card">
            <table>
                <tr>
                    <td>
                        <input type="text" placeholder="Mail">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="password" placeholder="Mot de passe">
                    </td>
                </tr>
                
            </table>
            <a href="">Mot de passe oublié</a>
            <button class="btnConnexion" type="Submit">Connexion</button>
           
        </form>
        <div class="card2 card">
            <h2>NOUVEAU CLIENT ?</h2>
            <button>Crée un compte</button>
        </div>
        <p> E-gaming s'engage à garder ces informations strictement confidentielles.</p>
    </main>
    <footer>

    </footer>
</body>
</html>