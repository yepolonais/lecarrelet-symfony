$(function()
{
//Version  desktop et mobile
  $(".event-mois a, .event-mois-mobile option").click(function()
  {
    //console.log(this.text);
    let moisChoisi = this.text;//retourne le mois que l'on clique

    let maListe = document.getElementsByClassName("event-item");
    //console.log(maListe);

    let i = 0;
    let tableauMois = [];
    while(i < maListe.length)
    {
      //console.log(maListe[i].dataset.filter);
      tableauMois[i] = maListe[i].dataset.filter;//retourne le mois défini dans data-filter de chaque event
      if (moisChoisi == tableauMois[i])
      {
        maListe[i].style.display = "block";
      }
      else
      {
        maListe[i].style.display = "none";
      }
      i++;
    }
  });
});
//Cette fonction de tri des event fonctionne uniquement si pour chaque article de class "event-item" on renseigne son attribut data-filter, en lui assignant le mois au cours duquel il se déroule.
//Par exemple data-filter = "Janvier". A gérer en BDD
