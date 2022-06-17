<?php
require_once "../config/bdd.php";
require_once "../bibliotheque/constante_bdd.php";

$bln_OK = true;
$tab_message['tab_messageErreur'] = array();

//on verifie les données du formulaire
if(!empty($_GET['nom_user'])){
    $bln_OK = false;
    $tab_message['tab_messageErreur'][] = "Le nom est manquant.";
}
else{
    if(trim($_GET['nom_user']) == ''){
        $bln_OK = false;
        $tab_message['tab_messageErreur'][] = "Le nom est vide.";
    }
}

if(!empty($_GET['prenom_user'])){
    $bln_ok = false;
    $tab_message['tab_messageErreur'][] = "Le prénom est manquant.";
}else{
    if(trim($_GET['prenom_user']) == ''){
        $bln_OK = false;
        $tab_message['tab_messageErreur'][] = "Le prénom est vide.";
    }
}

/*if(!filter_var($_GET['mail_user'], FILTER_VALIDATE_EMAIL)) { 
    $bln_OK = false;
    $tab_message['tab_messageErreur'][] = "Le mail n'est pas valide.";
}  
if(!empty($_GET['adresse_user'])){
    $bln_ok = false;
    $tab_message['tab_messageErreur'][] = "L'adresse est manquante.";
}else{
    if(trim($_GET['adresse_user']) == ''){
        $bln_OK = false;
        $tab_message['tab_messageErreur'][] = "L'adresse est vide.";
    }
}

 if($_GET['password_user'] != $_GET['confirm_password_user']){
    $bln_OK = false;
    $tab_message['tab_messageErreur'][] = "Les mot de passe ne sont différents.";
}*/


//etc


 //check if variable is not null
//if(isset($_GET['nom_user']) && isset($_GET['prenom_user']) && isset($_GET['mail_user']) 
//                            && isset($_GET['password_user']) && isset($_GET['confirm_password_user'])){
/*if($bln_OK){
    // create variable for convert special char on html entity
    $nom = htmlspecialchars(($_GET["nom_user"]));
    $prenom  = htmlspecialchars(($_GET["prenom_user"]));
    $mail = htmlspecialchars(($_GET["mail_user"]));
    $adresse = htmlspecialchars(($_GET["adresse_user"]));
    $mdp = htmlspecialchars(($_GET["password_user"]));
    $confirmeMdp = htmlspecialchars($_GET["confirm_password_user"]);         
    
    //if password are correct we prepare and execute request SQL            
    $mdp = password_hash($mdp, PASSWORD_DEFAULT);
    $role = "user";
    $insert = $bdd->prepare(INSERTION_INSCRIPTION);
    if( $insert->execute([$nom,$prenom,$mail,$mdp,$role])!= 1){
        $bln_OK = false;
        $tab_message['tab_messageErreur'][] = "une erreure c'est produite lors de l'insertion dans la base de donnée";
    }
}    */   

$tab_retourJson = array();
$tab_retourJson["bln_OK"] = $bln_OK;  
//$tab_retourJson['tab_message']= $tab_message;

$json = json_encode($tab_retourJson); // transforme en notation JSON les données $datas => le tableau php (array)
echo $json; //retourne au client (Unity, Godot Engine...) les données sous forme d'objet JSON

?>