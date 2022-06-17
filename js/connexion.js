$( init );

function init() {

  //tout les contrôle js pour le formulaire
  $("#formConnexion").submit(function(event){
    bln_OK = true;

    if(bln_OK){
      $.ajax({
        url: "../Models/Connexion_action.php?"+$("#formConnexion").serialize(),
        dataType: "json",
        success : function(result){
          console.log(result);
        },
        error : function(result){
          // retour = JSON.parse(result);
          console.log(result);
        }
      });
      window.location.href ="../index.php"
    }

    bln_OK = false;

    if(!bln_OK){
      event.preventDefault();
    }
    //window.history.back();     
  });

  $("#bouton_inscription").click(function(){
   window.location.href = "inscription.php";
  });
}