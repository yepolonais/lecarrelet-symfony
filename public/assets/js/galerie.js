$(document).ready(function () {
    // $('.owl-carousel').owlCarousel();
    var owl = $('.owl-carousel');
owl.owlCarousel({
    items:1,
    loop:true,
    nav:true
});
$('.fleche-droite').click(function() {
    owl.trigger('next.owl.carousel');
})
// Go to the previous item
$('.fleche-gauche').click(function() {
    // With optional speed parameter
    // Parameters has to be in square bracket '[]'
    owl.trigger('prev.owl.carousel', [300]);
})
});












// let flecheGauche = document.getElementById('fleche-gauche');
// let flecheDroite = document.getElementById('fleche-droite');
// let photoCentre = document.getElementById('photo-centre');
//
// flecheGauche.addEventListener("click", photoPrecedente());
// flecheDroite.addEventListener("click", photoSuivante());
// photoCentre.addEventListener("click", photoSuivante());
