$(document).ready(function() {

  $("#slider-container-armatura").removeClass("cS-hidden");

  $(".tabslider").click(function(event) {
    event.preventDefault();

    let link_name = $(this).attr('id');

    $(".tabslider h3").removeClass("active");
    $(this).find("h3").addClass("active");

    $(".slider-container").removeClass("cS-hidden");
    $(".slider-container").addClass("cS-hidden");

    $("#" + link_name.replace("link", "slider-container")).removeClass("cS-hidden");
  });
});