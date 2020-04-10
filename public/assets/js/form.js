$( function() {

  $( "#contact-datepicker" ).datepicker();

// affichage des blocs de formulaire
  $("#btn-mail").click(function(){
    $(".boutons").hide();
    $(".retour").css("opacity","1");
    $(".contact").css("position","relative");
    $(".contact").animate(
      {right:0},400);
  });
  $("#btn-tel").click(function(){
    $(".boutons").hide();
    $(".retour").css("opacity","1");
    $(".rappel").css("position","relative");
    $(".rappel").animate(
      {right:0},400);
  });
  $(".retour").click(function(){
    $(".boutons").show();
    $(".retour").css("opacity","0");
    if($(".rappel").css("right") == "0px")
    {

      $(".rappel").css("position","absolute");
      $(".rappel").animate(
        {right:"120%"},0);
    }
    else{}
    if($(".contact").css("right") == "0px")
    {
      $(".contact").css("position","absolute");
      $(".contact").animate(
        {right:"120%"},0);
    }
    else{}
  });

   /* Check width on page load*/
   $(document).ready(function(){
       if(window.innerWidth > 767){
         $('.container').removeClass();
         $('.btn-block').addClass("btn-lg");
         $(".btn-block").removeClass('btn-block');
       }
   });

   $(window).resize(function(){
       if(window.innerWidth > 767){
         $('.container').removeClass();
         $('.btn-block').addClass("btn-lg");
         $(".btn-block").removeClass('btn-block');
       }
       else{
         $('.btn-lg').addClass("btn-block");
         $(".btn-lg").removeClass('btn-lg');
       }
   });

   // VERIFICATION DU FORMULAIRE

   // FORMULAIRE VIA EMAIL
   function contactEmailOK()
   {
     if(document.getElementById("contact-email").value == "")
     {
       return false;
     }
     else
     {
       return true;
     }
   }
   function contactNomOK()
   {
     if(document.getElementById("contact-nom").value == "")
     {
       return false;
     }
     else
     {
       return true;
     }
   }
   function contactPrenomOK()
   {
     if(document.getElementById("contact-prenom").value == "")
     {
       return false;
     }
     else
     {
       return true;
     }
   }
   function contactDatepickerOK()
   {
     if(document.getElementById("contact-datepicker").value == "")
     {
       return false;
     }
     else
     {
       return true;
     }
   }
   function contactNumtelephoneOK()
   {
     if(document.getElementById("contact-numtelephone").value == "")
     {
       return false;
     }
     else
     {
       return true;
     }
   }
   function contactDemandeOK()
   {
     if(document.getElementById("contact-demande").value == "")
     {
       return false;
     }
     else
     {
       return true;
     }
   }
   function contactNombrePersonneOK()
   {
     if($(".nombre-personne").value == "")
     {
       return false;
     }
     else
     {
       return true;
     }
   }
   function contactTypeEvenementOK()
   {
     if($(".type-evenement").value == "")
     {
       return false;
     }
     else
     {
       return true;
     }
   }

   $("#contact-validation").click(function(){
     if(contactPrenomOK() && contactNomOK() && contactEmailOK() && contactDatepickerOK() && contactDemandeOK() && contactNumtelephoneOK() && contactNombrePersonneOK() && contactTypeEvenementOK())
    {
      $("#reserve-contact").show();
      $(".contact").hide();
      $("#sous-titre").hide();
      setTimeout(function(){
        $(".contact").submit()
      },3000);
    }
   });


   // FORMULAIRE DE RAPPEL TELEPHONIQUE

   function rappelNumtelephoneOK()
   {
     if(document.getElementById("rappel-numtelephone").value == "")
     {
       return false;
     }
     else
     {
       return true;
     }
   }
   function rappelDemandeOK()
   {
     if(document.getElementById("rappel-demande").value == "")
     {
       return false;
     }
     else
     {
       return true;
     }
   }
   function rappelNomOK()
   {
     if(document.getElementById("rappel-nom").value == "")
     {
       return false;
     }
     else
     {
       return true;
     }
   }
   function rappelPrenomOK()
   {
     if(document.getElementById("rappel-prenom").value == "")
     {
       return false;
     }
     else
     {
       return true;
     }
   }
   $("#rappel-validation").click(function(){
     if(rappelPrenomOK() && rappelNomOK() && rappelDemandeOK() && rappelNumtelephoneOK())
     {
       $("#reserve-rappel").show();
       $(".rappel").hide();
       $("#sous-titre").hide();
       setTimeout(function(){
         $(".rappel").submit()
       },2000);
     }
   });

} );
