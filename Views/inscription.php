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

    <script type="text/javascript" src="../asset/jquery.js"></script>
    <script type="text/javascript" src="../js/inscription.js"></script>  
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
        <h1 class="titreInscription">Création de compte</h1>
        <form method="POST" action="../index.php" class="FormInscription card" id="formInscription" name="formInscription">
            <table>
                <tr>
                    <td>
                        <input type="text" placeholder="Nom" id="nom_user" name="nom_user">
                        <span id="libelle_nom" name="libelle_nom"></span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" placeholder="Prénom" id="prenom_user" name="prenom_user">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" placeholder="Adresse" id="adresse_user" name="adresse_user">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" placeholder="Mail" id="mail_user" name="mail_user">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="password" placeholder="Mot de passe" id="password_user" name="password_user">
                        <span id="libelle_mdp" name="libelle_mdp"></span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="password" placeholder="Mot de passe" id="confirm_password_user" name="confirm_password_user">
                    </td>
                </tr>                                
           </table>

           <button class="btnInscription">S'inscrire</button> 
        </form>
    </main>
    <footer>

    </footer>
</body>
</html>