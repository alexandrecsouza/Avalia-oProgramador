


console.log("cliente funcionando");

    
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





    function validacao_cliente(){

        var id= document.getElementById("id");
        var nome= document.getElementById("nome");
        var cpf= document.getElementById("cpf");
        
        var email= document.getElementById("email");
        
        
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
        if(cpf.value==""){
        alert("CPF vazio");
        nome.focus();
        return false;
        }
        if(email.value==""){
        alert("email vazio");
        nome.focus();
        return false;
        }
        
        console.log("cpf");

        if(TestaCPF(cpf.value)==false){
            alert("cpf incorreto");
            nome.focus();
            return false; 
        }else{

            alert("cpf correto");
        }

        alert("cpf correto");




        return true;

        }
