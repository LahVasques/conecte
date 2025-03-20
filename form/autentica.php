<?php
header('Content-Type: application/json; charset=utf-8');
$email = $_POST['email'];
$senha = $_POST['senha'];
$resposta = [];
if ( $email == 'cleber@ifsp.edu.br' && $senha == "12346"){
	$resposta = [
			"status"    => "sucesso",
			"mensagem"  => "Dados de autenticação recebidos com sucesso.",
			"dados"     => "login realizado com sucesso!"
	];
}else{
	$resposta = [
			"status"    => "sucesso",
			"mensagem"  => "Dados de autenticação recebidos com sucesso.",
			"dados"     => "login falhou!"
	];
}
echo json_encode($resposta, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
?>