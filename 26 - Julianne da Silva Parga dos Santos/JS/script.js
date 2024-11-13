
function cadastrar(dados){
    let name = nome.value;
    let snome = sobrenome.value;
    
    alert("Bem-vindo ao Pinklothes " + name + " " + snome+"!\nSeus dados foram salvos com sucesso");

}

function maiuscula(letra){
    cadastro.nome.value = cadastro.nome.value.toUpperCase();
    cadastro.sobrenome.value = cadastro.sobrenome.value.toUpperCase();

}


function senha(){
    s1 = password.value;
    s2 = password2.value;

    if(s1 != s2){
        document.getElementById('msg').style.display = "block";
    } else{
        document.getElementById('msg').style.display = "none";
        
    }

}


function somente_letra(e){
    tecla = (window.event)?event.keyCode:e.which;

    if ((tecla >= 65 && tecla <= 90) || (tecla == 8) || (tecla == 37) || (tecla == 39)){
        return true;
    }
    else{
        return false;
    }

}


// ----------------------------------pagamento-------------------


function somente_numero(e){
    tecla = (window.event)?event.keyCode:e.which;

    if ((tecla >= 48 && tecla <= 57) || (tecla >= 96 && tecla <= 105) || (tecla == 8) || (tecla == 37) || (tecla == 39)){
        return true;
    }
    else{
        return false;
    }

}


function mascara_cpf(obj){
    if(obj.value.length == 3 ){
        obj.value += ".";
    }
    if(obj.value.length == 7 ){
        obj.value += ".";
    }
    if(obj.value.length == 11 ){
        obj.value += "-";
    }
}
function mascara_telefone(obj){
    if(obj.value.length == 0 ){
        obj.value += "(";
    }
    if(obj.value.length == 3 ){
        obj.value += ")";
    }
    if(obj.value.length == 9 ){
        obj.value += "-";
    }
}
function mascara_numero(obj){
    if(obj.value.length == 4 ){
        obj.value += " ";
    }
    if(obj.value.length == 9 ){
        obj.value += " ";
    }
    if(obj.value.length == 14 ){
        obj.value += " ";
    }
}
function mascara_vencimento(obj){
    if(obj.value.length == 2 ){
        obj.value += "/";
    }
  
}



function mudar(){
    let pagamento = pgmt.value;


    if (pagamento == "Cartão") {
        document.getElementById('cartao').style.display = "block";
        document.getElementById('pix').style.display = "none";
        document.getElementById('numero').focus();
    } 
    else if (pagamento == "Pix") {
        document.getElementById('pix').style.display = "block";
        document.getElementById('cartao').style.display = "none";
    } 
    else {
        document.getElementById('cartao').style.display = "none";
        document.getElementById('pix').style.display = "none";
    }
 


}

function calculo(preco,marcado){
    tot = parseFloat(total.textContent.replace(',','.')) || 0;

    if(marcado){
        tot = Number(tot) + Number(preco)
    } else {
        tot = Number(tot) - Number(preco)
    }

    total.textContent = tot.toFixed(2).replace(',','.');


}

    


function salto(campo,digito){
    if(campo == "cpf"){
        if(digito.length>13){
            document.compra.telefone.focus();
        }
    }
    
    if(campo == "telefone"){
        if(digito.length>13){
            document.compra.pgmt.focus();
        }
    }

    if(campo == "pgmt"){
        if(digito.checked){
            document.compra.numero.focus();
        }
    }

    if(campo == "numero"){
        if(digito.length>18){
            document.compra.cod.focus();
        }
    }

    if(campo == "cod"){
        if(digito.length>2){
            document.compra.venc.focus();
        }
    }


}

function pagar(){
    window.alert("Pagamento realizado com sucesso! ;)");
}



