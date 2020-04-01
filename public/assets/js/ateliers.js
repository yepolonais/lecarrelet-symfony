$( function() {

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
   $(".reserver").click(function(){
     $("body").toggleClass("light-mode");
   });

} );
