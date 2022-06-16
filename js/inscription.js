$( init );

function init() {
  /*$("#bouton_deconnexion").click(function(){
    $.ajax({
      method: "GET",
      url: "Models/deconnexion.php",
      success : function(result){
        window.location.href = "Views/connexion.php";
      },
      error : function(result){

      }

      });
  });*/
  $("#password_user").keypress(function(event){
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

    //contrôle du nom
    /*if($("#nom").val() == ""){
      $("#libelle_nom").html("Le nom ne doit pas être vide");
      bln_OK = false;
    }*/
    if(bln_OK){
      $.ajax({
        url: "../Models/Inscription_action.php?"+$("#formInscription").serialize(),
        dataType: "json",
        success : function(result){
          console.log(result);
        },
        error : function(result){
          // retour = JSON.parse(result);
          console.log(result);
        }
      });
    }

    bln_OK = false;

    if(!bln_OK){
      event.preventDefault();
    }

   
    //window.history.back();
  });
}