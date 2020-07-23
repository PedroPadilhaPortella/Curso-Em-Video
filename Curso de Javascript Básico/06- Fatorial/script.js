function fatorial(){
  var n = document.querySelector('input#fat').value;
  var res = document.querySelector('div#res');
  if(n < 0){
    alert("Valor Inválido");
  }else{
    var valor = Number(n);
    let fat = valor;
    let aux = 1;
    for(let i = 1; i<= fat; i++){
      aux *= i;
    }
  res.innerHTML = `O fatorial de ${valor} é ${aux}.`
  }
}