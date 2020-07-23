function load(){
 var texto = document.getElementById("msg")
 var img = document.getElementById("image")
 var data = new Date()
 var hora = data.getHours()
 var min = data.getMinutes()

  if(min == 0){
	texto.innerHTML = `Agora s�o ${hora} horas em Ponto`  
  }else{
	texto.innerHTML = `Agora s�o ${hora} horas e ${min} Minutos`
  }
 if(hora >= 2 && hora < 6){
	img.src ='images/madrugada.jpg'
	document.body.style.background = "#2d2d86"

 }else if(hora >= 6 && hora < 10){
	img.src ='images/manha.jpg'
	document.body.style.background = "#1f6bff"

 }else if(hora >= 10  && hora < 14){
	img.src ='images/meiodia.jpg'
	document.body.style.background = "#ff9900"

 }else if(hora >= 14 && hora < 18){
	img.src ='images/tarde.jpg'
	document.body.style.background = "#ff8000"

 }else if(hora >= 18 && hora < 22){
	img.src ='images/noite.jpg'
	document.body.style.background = "#454973"
	
 }else if(hora >= 22 || hora < 2){
	img.src ='images/meianoite.jpg'
	document.body.style.background = "#000033"
 }
}