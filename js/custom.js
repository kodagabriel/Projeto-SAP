(function($) {
  "use strict"; // Start of use strict


    var $elemento = $("body p");

    function obterTamnhoFonte() {
        return parseFloat($elemento.css("font-size"));
    }

   $(function() {
       $(".up-font-size").on("click", function() {
           console.log("entrouuu")
           $elemento.css("font-size", obterTamnhoFonte() + 1);
       });

       $(".down-font-size").on("click", function() {
           $elemento.css("font-size", obterTamnhoFonte() - 1);
       });

   });

    $(document).ready(function() {
        accessibilityButtons();
    });



    // Smooth scrolling using jQuery easing
  $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
    if (
      location.pathname.replace(/^\//, "") ==
        this.pathname.replace(/^\//, "") &&
      location.hostname == this.hostname
    ) {
      var target = $(this.hash);
      target = target.length ? target : $("[name=" + this.hash.slice(1) + "]");
      if (target.length) {
        $("html, body").animate(
          {
            scrollTop: target.offset().top - 57
          },
          1000,
          "easeInOutExpo"
        );
        return false;
      }
    }
  });

  // Closes responsive menu when a scroll trigger link is clicked
  $(".js-scroll-trigger").click(function() {
    $(".navbar-collapse").collapse("hide");
  });

  // Activate scrollspy to add active class to navbar items on scroll
  $("body").scrollspy({
    target: "#mainNav",
    offset: 57
  });

  // Collapse Navbar
  var navbarCollapse = function() {
    if ($("#mainNav").offset().top > 100) {
      $("#mainNav").addClass("navbar-shrink");
    } else {
      $("#mainNav").removeClass("navbar-shrink");
    }
  };
  // Collapse now if page is not at top
  navbarCollapse();
  // Collapse the navbar when page is scrolled
  $(window).scroll(navbarCollapse);

  // Scroll reveal calls
  window.sr = ScrollReveal();
  sr.reveal(
    ".sr-icons",
    {
      duration: 600,
      scale: 0.3,
      distance: "0px"
    },
    200
  );
  sr.reveal(".sr-button", {
    duration: 1000,
    delay: 200
  });
  sr.reveal(
    ".sr-contact",
    {
      duration: 600,
      scale: 0.3,
      distance: "0px"
    },
    300
  );





})(jQuery); // End of use strict

function teste() {
  var x = ["CLASSISMO", "COTA", "MACHISMO", "SLUTSHAMING", "CISGÊNERO"];
  var y = [
    "Atitudes preconceituosas e crenças usadas para justificar tratamento injusto para com indivíduos ou grupos por causa do grupo socioeconômico a que pertencem.",
    "Percentagem mínima de pessoas que deve fazer parte de determinado grupo ou organização; termo frequentemente usado em relação a percentual reservado de vagas na admissão a faculdades, universidades e organizações. ",
    "Ato ou efeito de se inferiorizar mulheres ou pessoas designadas mulheres ao nascer com base em estereótipos de gênero ou em construções sociais .",
    "Quando se culpabiliza ou envergonha uma mulher ou pessoa designada mulher ao nascer por comportamentos sexuais ou pela forma com ela se veste.",
    "Pessoa cujo gênero é o que lhe foi designado ao nascer."
  ];
  var rand = Math.floor(Math.random() * x.length);
  document.getElementById("titulo").innerHTML = x[rand];
  document.getElementById("texto").innerHTML = y[rand];
}
