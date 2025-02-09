


console.log("cliente funcionando");








    function validaCNPJ (cnpj) {
        var b = [ 6, 5, 4, 3, 2, 9, 8, 7, 6, 5, 4, 3, 2 ]
        var c = String(cnpj).replace(/[^\d]/g, '')
        
        if(c.length !== 14)
            return false

        if(/0{14}/.test(c))
            return false

        for (var i = 0, n = 0; i < 12; n += c[i] * b[++i]);
        if(c[12] != (((n %= 11) < 2) ? 0 : 11 - n))
            return false

        for (var i = 0, n = 0; i <= 12; n += c[i] * b[i++]);
        if(c[13] != (((n %= 11) < 2) ? 0 : 11 - n))
            return false

        return true
    }




    





    function validacao_loja(){

        var id= document.getElementById("id");
        var nome= document.getElementById("nome");
        var cnpj= document.getElementById("cnpj");       
        
        
        
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
        if(cnpj.value==""){
        alert("cnpj vazio");
        nome.focus();
        return false;
        }
        
        if(validaCNPJ (cnpj)==false){

            alert("cnpj incorreto");

        }

        return true;

        }
