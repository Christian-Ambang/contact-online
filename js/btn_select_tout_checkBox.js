$(document).ready(function () {
  $(".toutBtn").on("click", function () {
    var countCheckBox = $("input:checked").length;

    if (!$(".selctionCheckBox").is(":checked")) {
      $(".selctionCheckBox").prop("checked", true);
    } else {
      $(".selctionCheckBox").prop("checked", false);
    }
  });
});
