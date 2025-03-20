<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<title>Título</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f8f9fa;
        }
        .wrapper-container {
            width: 100%;
            max-width: 500px;
        }
        .form-container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            text-align: center;
        }
        .btn-center {
            display: flex;
            justify-content: center;
        }
    </style>
</head>
<body>

<div class="wrapper-container">
	<div class="form-container">
		<div id="areaAutenticacao"> 
			<h5><strong>Autenticação:</strong></h5>
			<form id="frmAutenticacao">
				<div class="input-group mb-3">
					<span class="input-group-text">Email:</span>
					<input type="email" id="email" name="email" class="form-control" required>
				</div>
				<div class="input-group mb-3">
					<span class="input-group-text">Senha:</span>
					<input type="password" id="senha" name="senha" class="form-control" required>
				</div>
				<button type="submit" id="btnFrmAutenticacaoSend" class="btn btn-success">Enviar</button>
				<br>
				<a href="" id="btnAreaLembrarSenhaShow">Lembrar Senha</a>
				<br>
				<a href="" id="btnAreaCadastroShow">Cadastrar-se</a>
			</form>
		</div>

		<div id="areaCadastro" > 
			<h5><strong>Cadastro:</strong></h5>
			<form id="frmCadastro" enctype="multipart/form-data">

				<div class="input-group mb-3">
					<span class="input-group-text">Nome:</span>
					<input type="text" id="nome" name="nome" class="form-control" required>
				</div>

				<div class="input-group mb-3">
          		<span class="input-group-text">CPF:</span>
          		<input type="text" id="cpf" name="cpf" class="form-control">
				</div>

				<div class="input-group mb-3">
					<span class="input-group-text">Email:</span>
					<input type="email" id="emailCad" name="email" class="form-control" required>
				</div>

				<div class="input-group mb-3">
					<span class="input-group-text">Senha:</span>
					<input type="password" id="senhaCad" name="senha" class="form-control" required>
				</div>

				<div class="input-group mb-3">
					<span class="input-group-text">CEP:</span>
					<input type="text" id="cep" name="cep" class="form-control">
				</div>        

				<div class="input-group mb-3">
					<span class="input-group-text">Endereço:</span>
					<input type="text" id="endereco" name="endereco" class="form-control">
				</div>

				<div class="input-group mb-3">
					<span class="input-group-text">Bairro:</span>
					<input type="text" id="bairro" name="bairro" class="form-control">
				</div>

				<div class="input-group mb-3">
					<span class="input-group-text">Cidade:</span>
					<input type="text" id="cidade" name="cidade" class="form-control">
				</div>

				<div class="input-group mb-3">
					<span class="input-group-text">UF:</span>
					<input type="text" id="uf" name="uf" class="form-control">
				</div>

				<div class="input-group mb-3">
					<span class="input-group-text">Telefone:</span>
					<input type="text" id="telefone" name="telefone" class="form-control">
				</div>

					<button type="submit" id="btnFrmCadastroSend" class="btn btn-primary">Cadastrar</button>
					<button type="button" class="btn btn-danger btnAreaAutenticacaoShow">Cancelar</button>
				</form>
			</div>

		<div id="areaLembrarSenha" style="display: none;"> 
			<h5><strong>Lembrar Senha:</strong></h5>
			<form id="frmLembrarSenha">
				<div class="input-group mb-3">
					<span class="input-group-text">Email:</span>
					<input type="email" id="emailRecuperar" name="email" class="form-control" required>
				</div>
				<button type="submit" id="btnFrmLembrarSenhaSend" class="btn btn-warning">Enviar</button>
				<button type="button" class="btn btn-danger btnAreaAutenticacaoShow">Cancelar</button>
			</form>
		</div>
	</div>
</div>

<script type="text/javascript">
  $(document).ready(function(){

$("#areaAutenticacao").show();
$("#areaCadastro").hide();
$("#areaLembrarSenha").hide();


$("#frmAutenticacao").submit(function(event){
  event.preventDefault();
  var formdata = $(this).serialize();
  console.log("Dados do formulário de autenticação: " + formdata);

  $.ajax({
	 type: 'POST',
	 url: 'autentica.php', 
	 data: formdata,
	 success: function(response) {
		  console.log("Resposta da autenticação:", response);
	 },
	 error: function() {
		  alert('Erro ao enviar o formulário de autenticação.');
	 }
  });
});

$("#frmCadastro").submit(function(event){
  event.preventDefault();
  var formdata = new FormData(this);
  $.ajax({
	 type: 'POST',
	 url: 'cadastro.php', 
	 data: formdata,
	 processData: false,
	 contentType: false,
	 success: function(response) {
		  console.log("Resposta do cadastro:", response);
	 },
	 error: function() {
		  alert('Erro ao enviar o formulário de cadastro.');
	 }
  });

  $(document).ready(function() {

function limpa_formulário_cep() {
// Limpa valores do formulário de cep.
$("#endereco").val("");
$("#bairro").val("");
$("#cidade").val("");
$("#uf").val("");
}

//Quando o campo cep perde o foco.
$("#cep").blur(function() {

//Nova variável "cep" somente com dígitos.
var cep = $(this).val().replace(/\D/g, '');

//Verifica se campo cep possui valor informado.
if (cep != "") {

	//Expressão regular para validar o CEP.
	var validacep = /^[0-9]{8}$/;

	//Valida o formato do CEP.
	if(validacep.test(cep)) {

		//Preenche os campos com "..." enquanto consulta webservice.
		$("#endereco").val("...");
		$("#bairro").val("...");
		$("#cidade").val("...");
		$("#uf").val("...");

		//Consulta o webservice viacep.com.br/
		$.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

			if (!("erro" in dados)) {
				//Atualiza os campos com os valores da consulta.
				$("#endereco").val(dados.logradouro);
				$("#bairro").val(dados.bairro);
				$("#cidade").val(dados.localidade);
				$("#uf").val(dados.uf);
			} //end if.
			else {
				//CEP pesquisado não foi encontrado.
				limpa_formulário_cep();
				alert("CEP não encontrado.");
			}
		});
	} //end if.
	else {
		//cep é inválido.
		limpa_formulário_cep();
		alert("Formato de CEP inválido.");
	}
} //end if.
else {
	//cep sem valor, limpa formulário.
	limpa_formulário_cep();
}
});
});

});


$("#frmLembrarSenha").submit(function(event){
  event.preventDefault();
  var formdata = $(this).serialize();
  $.ajax({
	 type: 'POST',
	 url: 'lembrarSenha.php', 
	 data: formdata,
	 success: function(response) {
		  console.log("Resposta do lembrar senha:", response);
	 },
	 error: function() {
		  alert('Erro ao enviar o formulário de lembrar senha.');
	 }
  });
});


$("#btnAreaLembrarSenhaShow").click(function(event){
  event.preventDefault();
  $("#areaAutenticacao").hide();
  $("#areaCadastro").hide();
  $("#areaLembrarSenha").show();
});

$("#btnAreaCadastroShow").click(function(event){
  event.preventDefault();
  $("#areaAutenticacao").hide();
  $("#areaLembrarSenha").hide();
  $("#areaCadastro").show();
});

$(".btnAreaAutenticacaoShow").click(function(event){
  event.preventDefault();
  $("#areaCadastro").hide();
  $("#areaLembrarSenha").hide();
  $("#areaAutenticacao").show();
});
});
</script>  

</body>
</html>
