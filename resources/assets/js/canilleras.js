$(document).ready(function() {

  $("#slider-container-kanicarbono").removeClass("cS-hidden");
  $("#slider-container-mallas").removeClass("cS-hidden");
  
  $(".tablinks").click(function(event) {
    event.preventDefault();

    let link_name = $(this).attr('id');

    $(".tablinks img").removeClass("active");
    $(this).find("img").addClass("active");

    $(".tabdescription").removeClass("hidden");
    $(".tabdescription").addClass("hidden");

    $(".tabcaracteristicas").removeClass("hidden");
    $(".tabcaracteristicas").addClass("hidden");

    $(".tabcaracteristicas").removeClass("hidden");
    $(".tabcaracteristicas").addClass("hidden");

    $(".marcastitle").removeClass("hidden");
    $(".marcastitle").addClass("hidden");

    $(".slider-container").removeClass("cS-hidden");
    $(".slider-container").addClass("cS-hidden");

    $(".tabslider h3").removeClass("active");

    $("#" + link_name.replace("link", "description")).removeClass("hidden");
    $("#" + link_name.replace("link", "caracteristicas")).removeClass("hidden");
    $("#" + link_name.replace("link", "marcas")).removeClass("hidden");
    $("#" + link_name.replace("link", "marcas") + " h3").first().addClass("active");
    $("." + link_name.replace("link", "slider")).removeClass("cS-hidden");

    $.scrollTo('#marcas', 800);
  });

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