$(document).ready(function () {
  $(".campagneList").hide();
  $(".campagneListSMS").hide();

  $(".mail_sent").click(function () {
    $(".campagneListSMS").hide();
    $(".campagneList").toggle();
  });

  $(".sms_sent").click(function () {
    $(".campagneList").hide();
    $(".campagneListSMS").toggle();
  });
});
