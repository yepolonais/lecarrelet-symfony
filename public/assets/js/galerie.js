$(document).ready(function () {
    $('.owl-carousel').owlCarousel();
});

let flecheGauche = document.getElementById('fleche-gauche');
let flecheDroite = document.getElementById('fleche-droite');
let photoCentre = document.getElementById('photo-centre');

flecheGauche.addEventListener("click", photoPrecedente());
flecheDroite.addEventListener("click", photoSuivante());
photoCentre.addEventListener("click", photoSuivante());
