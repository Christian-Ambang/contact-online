$(document).ready(function () {
  $(".campagneList").hide();
  var origine = $(".btn").find("[name=origine]").val();

  if (origine == "confirmation") {
    $(".campagneList").click(function () {
      $(".mail_sent").attr("src", "imgs/btn_mail_select.png");
      $(".campagneList").hide();
      var idMail = $(this).find("[name=idMail]").val();
      var contactMail = $(".btn").find("[name=email]").val();
      var contactCivilite = $(".btn").find("[name=civilite]").val();
      var contactNom = $(".btn").find("[name=nom]").val();
      var contactPrenom = $(".btn").find("[name=prenom]").val();
      var contactID = $(".btn").find("[name=id]").val();
      var contactSociete = $(".btn").find("[name=societe]").val();

      if ($(".campagneList").hasClass("select_mail") == false) {
        $(this).addClass("select_mail");
      } else {
        $(".campagneList").removeClass("select_mail");
        $(this).addClass("select_mail");
      }

      $(".btn-confirmation-mail").click(function () {
        //alert(idMail);
        $.ajax({
          url: "message_send.php", // La ressource ciblée
          // url : 'mail_send.php', // La ressource ciblée
          type: "POST",
          data:
            "origine=confirmation" +
            "&id=" +
            idMail +
            "&email=" +
            contactMail +
            "&civilite=" +
            contactCivilite +
            "&nom=" +
            contactNom +
            "&prenom=" +
            contactPrenom +
            "&societe=" +
            contactSociete +
            "&idContact=" +
            contactID +
            "&volume=unique",
          dataType: "html",

          error: function (xhr, status, error) {
            // Info Debuggage si erreur
            alert(
              "Erreur : responseText: " + xhr.status + ":" + xhr.statusText
            );
            $(".validation img").attr("src", "imgs/echec_envoye.png");
          },
          success: function (data) {
            // Informe l'utilisateur que l'opération est terminé et renvoie le résultat
            $(".validation img").attr("src", "imgs/mail_envoye.png");
          },
        });
      });
    });
  } // Fin condition origine
  else if (origine == "contact") {
    $(".campagneList").click(function () {
      $(".mail_sent").attr("src", "imgs/btn_mail_select.png");
      $(".campagneList").hide();
      var idMail = $(this).find("[name=idMail]").val();
      var idMailMultiple = $(".btn").find("[name=idMultiple]").val();
      var contIdMailMultiple = $(".btn").find("[name=countIdMultiple]").val();
      if (contIdMailMultiple > 1) {
        var volume = "multiple";
      } else {
        var volume = "unique2";
      }

      if ($(".campagneList").hasClass("select_mail") == false) {
        $(this).addClass("select_mail");
      } else {
        $(".campagneList").removeClass("select_mail");
        $(this).addClass("select_mail");
      }

      $(".btn-confirmation-mail").click(function () {
        $.ajax({
          url: "message_send.php", // La ressource ciblée
          type: "POST",
          data:
            "origine=contact" +
            "&id=" +
            idMail +
            "&" +
            idMailMultiple +
            "&countId=" +
            contIdMailMultiple +
            "&volume=" +
            volume,
          dataType: "html",

          error: function (xhr, status, error) {
            alert(
              "Erreur : responseText: " + xhr.status + ":" + xhr.statusText
            );
            $(".validation img").attr("src", "imgs/echec_envoye.png");
          },
          success: function (data) {
            $(".validation img").attr("src", "imgs/mail_envoye.png");
          },
        });
      });
    });
  }

  // ===================== Pop UP

  $(".globalConfirmation").hide();
  $(".selectMail").click(function () {
    $(".globalConfirmation").show();
  });

  $(".globalConfirmation:not(.confirmation)").click(function () {
    $(".globalConfirmation").hide();
  });

  // ===================== Pop UP
});
