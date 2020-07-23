document.querySelector('#btnCalcula').addEventListener('click', calculaTabuada);

function calculaTabuada(){
//função que pega os elementos e o valor da tabuada, e faz a verificação dela
    document.querySelector('#divResultado').innerHTML = '';

    if(document.querySelector('#numero').value.length == 0) {
        testaSpan();
    } else {
        removeElemento('#erro');

        criaTabuadaNumero(Number(document.querySelector('#numero').value));
    }
}

function testaSpan() {
//adiciona mensagem de erro se o campo da tabuada estiver vazio
    removeElemento('#erro');

    var mensagem = document.createElement('span');
    mensagem.setAttribute('id', 'erro');
    document.querySelector('#inNumber').appendChild(mensagem);

    var txtMensagem = document.createTextNode('* Digite um número para prosseguir.');
    mensagem.appendChild(txtMensagem);

    mensagem.style.color = '#e20c0c';
    mensagem.style.fontSize = '10.5pt';
}

function criaTabuadaNumero(numero){
//cria o select que vai conter a tabuada e usando o for(), cria as options para exibir a tabuada
    removeElemento('#resultado');
    
    var divResultado = document.querySelector('#divResultado');
    var selectRes = document.createElement('select');
    selectRes.setAttribute('id', 'resultado');
    selectRes.setAttribute('size', '10');
    
    divResultado.appendChild(selectRes);
    
    for(var i=1; i<=10; i++) {
        var itemRes = document.createElement('option');
        itemRes.text = `${numero} x ${i} = ${numero*i}`;
        itemRes.value = `v${i}`;
        selectRes.appendChild(itemRes);
    }
}

function removeElemento(idElemento){ 
//função para remover elementos, chamado para remover o #erro e  #resultado da tabuada       
    if(document.querySelector(idElemento) != null){
        document.querySelector(idElemento).remove();
    }
}