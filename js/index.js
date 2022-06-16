$( init );

function init() {
  $("#bouton_deconnexion").click(function(){
    $.ajax({
      method: "GET",
      url: "Models/deconnexion.php",
      success : function(result){
        window.location.href = "Views/connexion.php";
      },
      error : function(result){

      }

      });
  });
}