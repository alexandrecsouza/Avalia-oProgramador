




console.log("loja funcionando");




const limparFormulario = (endereco) =>{
    document.getElementById('endereco').value = '';
    document.getElementById('bairro').value = '';
    document.getElementById('cidade').value = '';
    document.getElementById('uf').value = '';
}


const preencherFormulario = (endereco) =>{
    document.getElementById('endereco').value = endereco.logradouro;
    document.getElementById('bairro').value = endereco.bairro;
    document.getElementById('cidade').value = endereco.localidade;
    document.getElementById('uf').value = endereco.uf;
}


const eNumero = (numero) => /^[0-9]+$/.test(numero);

const cepValido = (cep) => cep.length == 8 && eNumero(cep); 

const pesquisarCep = async() => {
    limparFormulario();
    
    const cep = document.getElementById('cep').value;
    const url = `https://viacep.com.br/ws/${cep}/json/`;
    if (cepValido(cep)){
        const dados = await fetch(url);
        const endereco = await dados.json();
        if (endereco.hasOwnProperty('erro')){
            document.getElementById('endereco').value = 'CEP não encontrado!';
        }else {
            preencherFormulario(endereco);
        }
    }else{
        document.getElementById('endereco').value = 'CEP incorreto!';
    }
     
}


//document.getElementById('cep').addEventListener('focusout',pesquisarCep);


window.addEventListener("DOMContentLoaded", (event) => {
    const con = document.getElementById('cep');
    if (con) {
        con.addEventListener('focusout',pesquisarCep);
    }else{

        console.log("falha");
    }
});
















function validaCNPJ(cnpj) {
	cnpj = cnpj.replace(/[^\d]+/g,'');
	if(cnpj == '' || cnpj.length != 14 || /^(\d)\1{13}$/.test(cnpj)) return false;

	// Valida DVs
	let tamanho = cnpj.length - 2
	let numeros = cnpj.substring(0,tamanho);
	let digitos = cnpj.substring(tamanho);
	let soma = 0;
	let pos = tamanho - 7;
	for (let i = tamanho; i >= 1; i--) {
		soma += numeros.charAt(tamanho - i) * pos--;
		if (pos < 2) pos = 9;
	}
	let resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
	if (resultado != digitos.charAt(0)) return false;

	tamanho = tamanho + 1;
	numeros = cnpj.substring(0,tamanho);
	soma = 0;
	pos = tamanho - 7;
	for (let i = tamanho; i >= 1; i--) {
		soma += numeros.charAt(tamanho - i) * pos--;
		if (pos < 2) pos = 9;
	}
	resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
	if (resultado != digitos.charAt(1)) return false;
	return true;
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

        if(cep.value==""){
        alert("cep vazio");
        id.focus();
        return false;
        }

        if(endereco.value==""){
        alert("endereco vazio");
        endereco.focus();
        return false;
        }
        if(bairro.value==""){
        alert("bairro vazio");
        bairro.focus();
        return false;
        }
        if(cidade.value==""){
        alert("bairro vazio");
        cidade.focus();
        return false;
        }
        if(uf.value==""){
        alert("uf vazio");
        uf.focus();
        return false;
        }            
        
        
        if(validaCNPJ (cnpj)==false){

            alert("cnpj incorreto");
            return false;
        }

        return true;

        }
