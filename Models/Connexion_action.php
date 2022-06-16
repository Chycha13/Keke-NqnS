<?php
session_start();
require_once "../config/bdd.php";


    if(isset($_POST['mail_user']) && isset($_POST['password_user'])){

            $mail = htmlspecialchars($_POST['mail_user']);
            $mdp = htmlspecialchars($_POST['password_user']);

    
        if(!empty($mail) && !empty($mdp)) {

      // prepare SQL request from mail of user

        $select = $bdd->prepare("SELECT * FROM users WHERE mail_user = ?");
        $select->execute(([$mail]));
        $data = $select->fetch();
          
        // Use password verify for creating session
            if($data != false){
                    if(password_verify($mdp, $data['password_user'])){
                        $_SESSION['role'] = $data['role'];
                        $_SESSION['prenom_user'] = $data['prenom_user'];
                        $_SESSION['id_user'] = $data['id_user'];
                        
                        if($data['role'] === "admin"){
                            header("Location: ../Views/administration.php");

                            }else if ($data['role'] === "user"){                          
                                header("Location: ../index.php");
                            }
                    }else{
                        $erreur = "mot de passe ou nom incorrect";
                        header("Location: ../Views/connexion.php?error=$erreur");
                        }
                }else{
                    $erreur = "mot de passe ou nom incorrect";
                    header("Location: ../Views/connexion.php?error=$erreur");
                }
           }else{
                $erreur = "veuillez remplir les champs";
                header("Location: ../Views/connexion.php?error=$erreur");
            }
        }