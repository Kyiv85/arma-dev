$(document).ready(function() {

  $("#slider-container-kanicarbono").removeClass("cS-hidden");
  $("#slider-container-mallas").removeClass("cS-hidden");
  
  $(".tablinks").click(function(event) {

    event.preventDefault();

    let link_name = $(this).attr('id');

    $(".contenido").removeClass("hidden");
    $(".contenido").addClass("hidden");

    $(".pasos-text").removeClass("hidden");
    $(".pasos-text").addClass("hidden");

    $("#" + link_name.replace("link-", "")).removeClass("hidden");
    $("." + link_name.replace("link", "paso1")).removeClass("hidden");
    $("." + link_name.replace("link", "paso3")).removeClass("hidden");

    $.scrollTo('#redireccionar', 800);
    
  });

});