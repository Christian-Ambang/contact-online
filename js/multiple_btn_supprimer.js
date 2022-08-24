$(document).ready(function(){ 
 
 // ===================== AJAX 
	
	        
      $(".btn-supprimer-multiple").click(function() {
		   $(".selctionCheckBoxSuppression",this).val("true");
		  //$( "#formRecherche" ).submit();
       //alert("test");
		    /*if($(".selctionCheckBox").prop("checked")=="true"){
				$(".checkBox > .selctionCheckBoxSuppression").val("true");
			}*/
		  
		    $.ajax({
            url : '../multiple-modifier-supprimer.php', // La ressource ciblée
            // url : 'mail_send.php', // La ressource ciblée
            type : 'POST',
            data : $( ".selctionCheckBox" ).serializeArray(),
			data2: "&suppression=true",	
            dataType : 'html',

            error    : function(xhr, status, error) { // Info Debuggage si erreur         
                       //alert("Erreur : responseText: "+xhr.status+":"+xhr.statusText); 
                       //alert("bad");
                     },
            success  : function(data) {  
                       // Informe l'utilisateur que l'opération est terminé et renvoie le résultat
                      alert(data);
                      //window.setTimeout('location.reload()', 1000);
                     }  


          });

      }); 
 

  

// ===================== AJAX


});