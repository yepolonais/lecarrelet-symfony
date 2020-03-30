$(function(){

  //console.log($(".event-mois a"));

  $(".event-mois a").click(function(){
    console.log(this.text);
    let monMois = this.text;

    let maListe = document.getElementsByClassName("event-item");
    console.log(maListe);

    let i = 0;
    let tableauMois;
    while(i < maListe.length)
    {
      console.log(maListe[i].dataset.filter);
      tableauMois[i] = maListe[i].dataset.filter;
      i++;
    }
  });

  const comparerMois = function(){
    
  };
















});
