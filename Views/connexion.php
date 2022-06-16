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
    <header class="headerInscription">
    <div class="placementBtn">           
            <a href="accueil.php"><button class="">Accueil</button></a>
            
            <a href="profil.php"><button class=""></button></a>

            <a href="logout.php"><button class="">Déconnection</button></a>
        </div>
    </header>
    <main class="mainInscription">
        <h1>Création de compte</h1>
        <form method="POST" action="../Models/Connexion.php" class="FormInscription">
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
           
            <button type="Submit">Connexion</button>
           
        </form>
    </main>
    <footer>

    </footer>
</body>
</html>