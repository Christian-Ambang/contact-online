$(document).ready(function(){ 
 
 // ===================== AJAX 
      
      $(".btn-supprimer").click(function() {
		  $("[name=suppression]").val("true");
		  $.ajax({
            url : '../modifier-supprimer.php', // La ressource ciblée
            // url : 'mail_send.php', // La ressource ciblée
            type : 'POST',
            data : $( "#form" ).serialize(),
            dataType : 'html',

            error    : function(xhr, status, error) { // Info Debuggage si erreur         
                       //alert("Erreur : responseText: "+xhr.status+":"+xhr.statusText); 
                       //alert("bad");
                     },
            success  : function(data) {  
                       // Informe l'utilisateur que l'opération est terminé et renvoie le résultat
                       //alert("Ok");
                     window.setTimeout('location.reload()', 100);
                     }  


          });
		  
		  
       

      }); // Fin btn supprimer
	
	$(".btn-ajouter").click(function() {
		  $("[name=suppression]").val("");
		  $.ajax({
            url : '../modifier-supprimer.php', // La ressource ciblée
            // url : 'mail_send.php', // La ressource ciblée
            type : 'POST',
            data : $( "#form" ).serialize(),
            dataType : 'html',

            error    : function(xhr, status, error) { // Info Debuggage si erreur         
                       //alert("Erreur : responseText: "+xhr.status+":"+xhr.statusText); 
                       //alert("bad");
                     },
            success  : function(data) {  
                       // Informe l'utilisateur que l'opération est terminé et renvoie le résultat
                       //alert("Ok");
                     window.setTimeout('location.reload()', 100);
                     }  


          });
		  
		  
       

      });
 

  

// ===================== AJAX


});