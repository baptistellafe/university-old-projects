	function validacaoFormOng(){
		//Armazena o formulário em uma variável
		var form = document.getElementById('formCadOng');

		//Testando as condições dos campos
		if ((form.cnpj.value.length !== 14)){
			alert("Favor verifique o número do CNPJ digitado.");
			form.cnpj.focus();
			return false
		}

		if ((form.cep.value.length !== 8)){
			alert("Favor verifique o número do CEP digitado.");
			form.cep.focus();
			return false
		}

		if ((form.telefone.value.length < 10) || (form.telefone.value.length > 11)){
			alert("Favor verifique o número de telefone digitado.");
			form.telefone.focus();
			return false
		}

		if (form.email.value !== form.confEmail.value){
			alert("Os e-mails digitados não são idênticos.");
			form.email.focus();
			return false
		}

		if (form.senha.value !== form.confSenha.value){
			alert("As senhas digitadas não são idênticas.");
			form.senha.focus();
			return false
		}
	}

	function validacaoFormPessoaJuridica(){
		//Armazena o formulário em uma variável
		var form = document.getElementById('formCadPj');

		//Testando as condições dos campos
		if ((form.cnpj.value.length !== 14)){
			alert("Favor verifique o número do CNPJ digitado.");
			form.cnpj.focus();
			return false
		}

		if ((form.cep.value.length !== 8)){
			alert("Favor verifique o número do CEP digitado.");
			form.cep.focus();
			return false
		}

		if ((form.telefone.value.length < 10) || (form.telefone.value.length > 11)){
			alert("Favor verifique o número de telefone digitado.");
			form.telefone.focus();
			return false
		}

		if (form.email.value !== form.confEmail.value){
			alert("Os e-mails digitados não são idênticos.");
			form.email.focus();
			return false
		}

		if (form.senha.value !== form.confSenha.value){
			alert("As senhas digitadas não são idênticas.");
			form.senha.focus();
			return false
		}
	}

	function validacaoFormPessoaFisica(){
		//Armazena o formulário em uma variável
		var form = document.getElementById('formCadPf');

		//Testando as condições dos campos
		if ((form.cpf.value.length !== 11)){
			alert("Favor verifique o número do CPF digitado.");
			form.cpf.focus();
			return false
		}

		if ((form.cep.value.length !== 8)){
			alert("Favor verifique o número do CEP digitado.");
			form.cep.focus();
			return false
		}

		if ((form.telefone.value.length < 10) || (form.telefone.value.length > 11)){
			alert("Favor verifique o número de telefone digitado.");
			form.telefone.focus();
			return false
		}

		if ((form.sexo.value == "") || (form.sexo.value == null)){
			alert("Favor selecione o sexo.");
			form.sexo.focus();
			return false
		}

		if (form.email.value !== form.confEmail.value){
			alert("Os e-mails digitados não são idênticos.");
			form.email.focus();
			return false
		}

		if (form.senha.value !== form.confSenha.value){
			alert("As senhas digitadas não são idênticas.");
			form.senha.focus();
			return false
		}
		
	}
