var contadorCarrosel = 1;
setInterval(function(){
  document.getElementById('radio' + contadorCarrosel).checked = true;
  contadorCarrosel++;
  if(contadorCarrosel > 3){
    contadorCarrosel = 1;
  }
}, 5000);


