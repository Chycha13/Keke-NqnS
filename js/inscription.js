$( init );

function init() {
 /* $("#password_user").keypress(function(event){
    //TODO faire mieux pour le contrôle
    mdp = $("#password_user").val() + event.originalEvent.key;
    if(mdp.length < 5 ){
      $("#libelle_mdp").html("mot de passe trop court.");
    }
    else{
      $("#libelle_mdp").html("");
    }

  });*/

  //tout les contrôle js pour le formulaire
  $("#formInscription").submit(function(event){
    bln_OK = true;
    tab_message = [];
    event.preventDefault();

    // contrôle du nom
    if($("#nom_user").val() == ""){
      tab_message.push("Le nom ne doit pas être vide");
    }
    //contrôle prénom
    if($("#prenom_user").val() == ""){
      tab_message.push("Le prénom ne doit pas être vide");
    }
    //contrôle adresse
    if($("#adresse_user").val() == ""){
      tab_message.push("L'adresse ne doit pas être vide");
    }
    //contrôle du mail
    if($("#mail_user").val() == ""){
      tab_message.push("L'email ne doit pas être vide");
    }
    //contrôle mot de passe
    if($("#password_user").val() == ""){
      tab_message.push("Le mot de passe ne doit pas être vide");
    }
    //contrôle confirmation mot de passe
    if($("#confirm_password_user").val() == ""){
      tab_message.push("Le mot de passe ne doit pas être vide");
    }

    if(tab_message.length > 0){
       bln_OK = false;
       str_messageErreur = "";
      for(message of tab_message){
        if(str_messageErreur == ""){
          str_messageErreur += message;
        }
        else{
          str_messageErreur += "<br>" + message;
        }        
      }

      $("#libelle_erreur").html(str_messageErreur);

      $('#popupErreur').css('display','block');
    }

    //TODO faires les autres contrôles

    if(bln_OK){
      $.ajax({
        url: "../Models/Inscription_action.php?"+$("#formInscription").serialize(),
        dataType: "json",
        success : function(result){          

          if(!result.bln_OK){
             event.preventDefault();
            //TODO
            //fair eune modal avec les erreurs sotckés dans 'tab_message'
            //on affiche les erreurs
            str_messageErreur = "";
            for(message of result.tab_message){
              if(str_messageErreur == ""){
                str_messageErreur += message;
              }
              else{
                str_messageErreur += "<br>" + message;
              }        
            }

            $("#libelle_erreur").html(str_messageErreur);
            $('#popupErreur').css('display','block');
           
          }
          else{
            alert("l'inscription c'est déroulé avec succès. ");
          }         
        },
        error : function(result){
          console.log(result);
          bln_OK = false;
        }
      });
    }
  });

$("#close_modal").click(function(){
   $('#popupErreur').css('display','none');
});


  window.onclick = function(event) {
    if (event.target == document.getElementById("popupErreur")) {
      document.getElementById("popupErreur").style.display = "none";
    }
  }
}