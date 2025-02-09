


console.log("cliente funcionando");












    





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
        }
        

        
        console.log("email");
        if(validacaoEmail()){

            return false;
        }


        return true;

        }
