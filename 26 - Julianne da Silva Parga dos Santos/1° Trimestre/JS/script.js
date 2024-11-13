
function calcularConsulta(){
    let selectdepartamento = document.getElementById("departamento");
    let valor = 0;
    
    
    switch(selectdepartamento.value){
        case "70" :
        valor = 70;
        break;

        case "80":
        valor = 80;
        break;

        case "100" :
        valor = 100;
        break;

        default:
        valor = 95;
        break;

    }

    return valor; // Retorna o valor calculado;
   

}

function consultar(){
    // entrada de dados
    
    let nomeInput =  document.getElementById("nome").value;
    let idadeInput = Number(document.getElementById("idade").value);
    
    let simRadio = document.getElementById("sim");
    let naoRadio = document.getElementById("nao");
    
    let selectFilial = document.getElementById("filial").value;
    let lugar;

    if(selectFilial == "anchieta"){
        lugar = "Anchieta";
    }
    else if(selectFilial == "copacabana"){
        lugar = "Copacabana";
    }
    else if(selectFilial == "marechal"){
        lugar = "Marechal Hermes";
    }
    else {
        lugar = "Nilópolis";
    }
    
    
    let selectHorarios = document.getElementById("horarios").value;
    let hora;
    

    switch(selectHorarios){
        case "07":
        hora = "07h";
        break;

        case "09":
        hora = "09h";
        break;

        case "11":
        hora = "11h";
        break;

        case "13":
            hora = "13h";
            break;

        case "15":
        hora = "15h";
        break;

        case "17":
            hora = "17h";
        break;

        case "19":
        hora = "19h";
        break;

        default:
        hora = "21h";
   
     
    }


    var msg;
    var valordesconto;
    var desconto;
    let valor = calcularConsulta();


    if(simRadio.checked){
        desconto = valor * 30/100;
        valordesconto = valor - desconto ;
        msg = Number(valordesconto);
    } else {
        msg = valor;
    }
    window.alert("Nome: " + nomeInput +
    "\nIdade: " + idadeInput + "\nHorário da Consulta: " + hora +
    "\nFilial: " + lugar + "\nPreço por consulta: R$" +valor.toFixed(2)+ 
    "\nPreço com desconto de 30%: R$" + msg.toFixed(2));
}



