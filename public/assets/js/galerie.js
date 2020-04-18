$(document).ready(function () {
    // $('.owl-carousel').owlCarousel();
    let owl = $('.owl-carousel');
    $('#fleche-droite').click(function() {
        owl.trigger('next.owl.carousel', [600]);
    });
    // Go to the previous item
    $('#fleche-gauche').click(function() {
        // With optional speed parameter
        // Parameters has to be in square bracket '[]'
        owl.trigger('prev.owl.carousel', [600]);
    });
    owl.owlCarousel({
    loop:true,
    margin:0,
    responsiveClass:true,
    responsive:{
        0:{
            items:1.2, //permet avec center de voir un bout des autres images dépasser
            margin:20,
            center:true
        },
        768:{
            items:1,
        }
    }
})
});
