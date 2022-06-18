$( init );

function init() {
  $("#password_user").keypress(function(event){
    //TODO faire mieux pour le contrôle
    mdp = $("#password_user").val() + event.originalEvent.key;
    if(mdp.length < 10 ){
      $("#libelle_mdp").html("mot de passe trop court.");
    }
    else{
      $("#libelle_mdp").html("");
    }

  });

  //tout les contrôle js pour le formulaire
  $("#formInscription").submit(function(event){
    bln_OK = true;
    tab_message = "";

    //contrôle du nom
   /* if($("#nom_user").val() == ""){
      $("#libelle_nom").html("Le nom ne doit pas être vide");
      bln_OK = false;
    }*/

    //TODO faires les autres contrôles

    if(bln_OK){
      $.ajax({
        url: "../Models/Inscription_action.php?"+$("#formInscription").serialize(),
        dataType: "json",
        success : function(result){          
          if(!result.bln_OK){
            tab_message = result.tab_message;
            bln_OK = result.bln_OK;
          }
        },
        error : function(result){
          console.log(result);
          bln_OK = false;
        }
      });
    }
    if(!bln_OK){
      //TODO
      //fair eune modal avec les erreurs sotckés dans 'tab_message'
      event.preventDefault();
    }
    else{
      alert("l'inscription c'est déroulé avec succès. ");
    }

   
    //window.history.back();
  });
}