$(document).ready(function () {
  // ===================== AJAX

  $(".btn-modifier").click(function () {
    //alert("test");
    $.ajax({
      url: "../modifier-contact.php", // La ressource ciblée
      // url : 'mail_send.php', // La ressource ciblée
      type: "POST",
      data: $("#form").serialize(),
      dataType: "html",

      error: function (xhr, status, error) {
        // Info Debuggage si erreur
      },
      success: function (data) {
        // Informe l'utilisateur que l'opération est terminé et renvoie le résultat

        window.setTimeout("location.reload()", 1000);
      },
    });
  });

  // ===================== AJAX
});
