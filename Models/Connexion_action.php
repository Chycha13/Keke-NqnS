<?php
require_once "../config/bdd.php";
require_once "../bibliotheque/constante_bdd.php";

$bln_OK = true;
$tab_message['tab_messageErreur'] = array();
//data
$data = false;

//on vérifie les données du formulaire

if(empty($_GET['mail_user'])){
    $bln_OK = false;
    $tab_message['tab_messageErreur'][] = "Cette adresse mail n'existe pas.";
}else{
    if(trim($_GET['mail_user']) == ''){
        $bln_OK = false;
        $tab_message['tab_messageErreur'][] = "Veuillez entrer votre adresse mail";
    }
}

if(empty($_GET['password_user'])){
    $bln_OK = false;
    $tab_message['tab_messageErreur'][] = "Mot de passe incorrecte.";
}else{
    if(trim($_GET['password_user']) == ''){
        $bln_OK = false;
        $tab_message['tab_messageErreur'][] = "Veuillez entrer votre mot de passe";
    }
}

if($bln_OK){
            $mail = htmlspecialchars($_GET['mail_user']);
            $mdp = htmlspecialchars($_GET['password_user']);

    
        // if(!empty($mail) && !empty($mdp)) {

      // prepare SQL request from mail of user

        $select = $bdd->prepare(INSERTION_CONNEXION);
    if( $select->execute([$mail]) !=1){
        $bln_OK = false;
        $tab_message['tab_messageErreur'][] = "une erreure c'est produite lors de la requête dans la base de données";        
    }   
    else{
        $data = $select->fetch();
    }
        // Use password verify for creating session
            if($data){
                    if(password_verify($mdp, $data['password_user'])){
                        session_start();
                        //TODO
                        //création ligne dnas table user_session
                        //id_user, id_session, date_create

                        //$_SESSION['role'] = $data['role'];
                        //$_SESSION['prenom_user'] = $data['prenom_user'];
                        //$_SESSION['id_user'] = $data['id_user'];
                        
                        //if($data['role'] === "admin"){
                           // header("Location: ../Views/administration.php");

                          //  }else if ($data['role'] === "user"){                          
                                //header("Location: ../index.php");
                           // }
                    }
            }   
        
}       

$tab_retourJson = array();
$tab_retourJson["bln_OK"] = $bln_OK;  
$tab_retourJson['tab_message']= $tab_message;
        
$json = json_encode($tab_retourJson); // transforme en notation JSON les données $datas => le tableau php (array)
echo $json; //retourne au client (Unity, Godot Engine...) les données sous forme d'objet JSON