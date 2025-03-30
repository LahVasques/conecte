<?php
header('Content-Type: application/json; charset=utf-8');
$dados = $_POST;
$resposta = [
  "status"    => "sucesso",
  "mensagem"  => "Dados de cadastro recebidos com sucesso.",
  "dados"     => $dados
];
echo json_encode($resposta, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
?>
