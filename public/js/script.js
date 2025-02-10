

console.log("scripts funcionando");




function TestaCPF(strCPF) {
    var Soma;
    var Resto;
    Soma = 0;
if (strCPF == "00000000000") return false;

for (i=1; i<=9; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (11 - i);
Resto = (Soma * 10) % 11;

    if ((Resto == 10) || (Resto == 11))  Resto = 0;
    if (Resto != parseInt(strCPF.substring(9, 10)) ) return false;

Soma = 0;
    for (i = 1; i <= 10; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (12 - i);
    Resto = (Soma * 10) % 11;

    if ((Resto == 10) || (Resto == 11))  Resto = 0;
    if (Resto != parseInt(strCPF.substring(10, 11) ) ) return false;
    return true;
}








function validacao_produto(){

    var id= document.getElementById("id");
    var nome= document.getElementById("nome");
    var cpf= document.getElementById("cor");
    
    var email= document.getElementById("valor");
    
    
    if(id.value==""){
    alert("ID vazio");
    id.focus();
    return false;
    }

    if(nome.value==""){
    alert("Nome vazio");
    nome.focus();
    return false;
    }
    if(cor.value==""){
    alert("cor vazio");
    nome.focus();
    return false;
    }
    if(valor.value==""){
    alert("valor vazio");
    nome.focus();
    return false;
    }
    
   
    
    return true;

    }


function validacao_vendedor(){

    var id= document.getElementById("id");
    var id_loja= document.getElementById("id_loja");
    var nome= document.getElementById("nome");    
    var cpf= document.getElementById("cpf");
    
    
    if(id.value==""){
    alert("ID vazio");
    id.focus();
    return false;
    }

    if(nome.value==""){
    alert("Nome vazio");
    nome.focus();
    return false;
    }
    if(id_loja.value==""){
    alert("loja vazio");
    id_loja.focus();
    return false;
    }
    if(cpf.value==""){
    alert("cpf vazio");
    email.focus();
    return false;
    }
    
    if(TestaCPF(cpf.value)==false){
        alert("cpf incorreto");
        nome.focus();
        return false; 
    }
    
    
    return true;

    }

        
function validacao_venda(){

    var id= document.getElementById("id");
    var id_cliente= document.getElementById("id_cliente");
    var id_loja= document.getElementById("id_loja");    
    var data= document.getElementById("data");
    
    var observacao= document.getElementById("observacao");
    
    if(id.value==""){
    alert("ID vazio");
    id.focus();
    return false;
    }

    if(id_cliente.value==""){
    alert("cliente vazio");
    id_cliente.focus();
    return false;
    }
    if(id_loja.value==""){
    alert("loja vazio");
    id_loja.focus();
    return false;
    }
    
    if(observacao.value==""){
        alert("observacao vazio");
        nome.focus();
        return false;
    }
    
    
    
    return true;

    }
