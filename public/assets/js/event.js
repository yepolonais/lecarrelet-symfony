let moisAnnee =["janvier","février","mars","avril","mai","juin","juillet","aout","septembre","octobre","novembre","décembre"];

$(function()
{
//Version  desktop et mobile
  $(".event-mois a, .event-mois-mobile option").click(function()
  {
    //console.log(this.text);
    let moisChoisi = this.text.toLowerCase();//retourne le mois que l'on clique
    //console.log(moisChoisi);
    let moisChiffre = moisAnnee.indexOf(moisChoisi)+1; //retourne le mois sous forme de chiffre, janvier => 1
    //console.log(moisChiffre);

    let maListe = document.getElementsByClassName("event-item"); //retourne une liste de tous les events
    // console.log(Number(maListe[0].dataset.debutmois), Number(maListe[0].dataset.finmois));

    let i = 0;
    while(i < maListe.length)
    {
      let debutEvent = Number(maListe[i].dataset.debutmois);
      let finEvent = Number(maListe[i].dataset.finmois);

      //console.log(maListe[i].dataset.filter);
      if (debutEvent <= moisChiffre && finEvent >= moisChiffre )
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
  $("#eventAll").click(function(){
    
  });
});
//Cette fonction de tri des event fonctionne avec l'attribut data-{filter} propre au HTML5.
