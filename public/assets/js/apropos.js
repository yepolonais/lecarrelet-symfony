$( function() {

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
} );
