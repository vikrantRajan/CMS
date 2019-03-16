$(function() {
  var backgroundImage = $("#wrapper").data("image");
  $("#wrapper").css("backgroundImage", "url('assets/" + backgroundImage + "')");

  var getInvolvedWrapper = $("#getInvolvedWrapper").data("image");
  $("#getInvolvedWrapper").css(
    "backgroundImage",
    "url('assets/" + getInvolvedWrapper + "')"
  );

  var headerImage = $("#headerImage").data("image");
  $("#headerImage").css("backgroundImage", "url('assets/" + headerImage + "')");

  var heroImage = $("#hero").data("image");
  $("#hero").css("backgroundImage", "url('assets/" + heroImage + "')");

  var contactHeroImage = $("#contacthero").data("image");
  $("#contacthero").css(
    "backgroundImage",
    "url('assets/" + contactHeroImage + "')"
  );

  var subImage = $(".subimage").data("image");
  $(".subimage").css("backgroundImage", "url('assets/" + subImage + "')");
});
function checkform() {
  var allGood = true;
  var arrRequiredFields = document.getElementsByClassName("required");
  console.log(arrRequiredFields);

  for (var i = 0; i < arrRequiredFields.length; i++) {
    var currentReqField = arrRequiredFields[i];
    if (currentReqField.value == "") {
      currentReqField.style.backgroundColor = "red";
      allGood = false;
    } else {
      currentReqField.style.backgroundColor = "white";
    }
  }

  return allGood;
}
