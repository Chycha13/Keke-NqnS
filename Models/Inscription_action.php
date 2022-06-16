<?php
require_once "../config/bdd.php";


 //check if variable is not null
if(isset($_POST['nom_user']) && isset($_POST['prenom_user']) && isset($_POST['mail_user']) 
                             && isset($_POST['password_user']) && isset($_POST['confirm_password_user'])){

    // create variable for convert special char on html entity
        $nom = htmlspecialchars(($_POST["nom_user"]));
        $prenom  = htmlspecialchars(($_POST["prenom_user"]));
        $mail = htmlspecialchars(($_POST["mail_user"]));
        $mdp = htmlspecialchars(($_POST["password_user"]));
        $confirmeMdp = htmlspecialchars($_POST["confirm_password_user"]);

        // check if cases is not empty
        if (!empty($nom) && !empty($prenom) && !empty($mail) && !empty($mdp) && !empty($confirmPassword)) {               
            // check if validate mail           
            if(filter_var($mail, FILTER_VALIDATE_EMAIL)) {   
                //if password are correct we prepare and execute request SQL  
                if($mdp === $confirmeMdp){           
                    $mdp = password_hash($mdp, PASSWORD_DEFAULT);
                    $role = "user";
                    $insert = $bdd->prepare("INSERT INTO users(nom_user, prenom_user, mail_user, password_user, role) VALUES(?,?,?,?,?)");
                    if( $insert->execute([$nom,$prenom,$mail,$mdp,$role])!= 1){
                        
                        $erreur = "une erreure c'est produite lors de l'insertion dans la base de donnée";
                    }
                    $success = "Bienvenue dans la Lanitzerie";
                    header("Location: connection.php?success=$success");
                }else{
                    $erreur = " Le mot de passe n'est pas identique";
                    header("Location: ../Views/inscription.php?error=$erreur");
                }
            }else{
                $erreur = "veuillez entrez un mail valide";
                header("Location: ../Views/inscription.php?error=$erreur");
            }        
        }else{
            $erreur = "veuillez remplir les champs" ;
            header("Location: ../Views/inscription.php?error=$erreur");
        } 
}        