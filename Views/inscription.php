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
    <header class="headerInscription">
    <div class="placementBtn">           
            <a href="accueil.php"><button class="">Accueil</button></a>
            
            <a href="profil.php"><button class=""></button></a>

            <a href="logout.php"><button class="">Déconnection</button></a>
        </div>
    </header>
    <main class="mainInscription">
        <h1>Création de compte</h1>
        <form method="POST" action="../index.php" class="FormInscription" id="formInscription" name="formInscription">
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

           <button>S'inscrire</button> 
        </form>
    </main>
    <footer>

    </footer>
</body>
</html>