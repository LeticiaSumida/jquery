<?php

header('Content-type: application/json');
header('Access-Control-Allow-Origin:*');

include 'conexao.php';

$post = filter_input_array(INPUT_POST, FILTER_DEFAULT); 
$id = $post['cli_id'];
$dados = array (
    'cli_nome' => $post['cli_nome'],
    'cli_email' => $post['cli_email']
);
foreach ($dados as $Key => $Value):
    $placeKey[] = $Key . ' = : ' . $Key;
endforeach;
$places = implode(', ', $placeKey);

$tabela = 'clientes';
$referencia = 'cli_id';
$update = "update {$tabela} set {$places} where {$referencia} = {$id}";
$sth = $pdo->execute($update);
if($sth ->execute($dados)):
    $json ['error'] = 'success';
    $json ['msg'] = 'Cadastro efetuado com sucesso';
else:
    $json ['error'] = 'error insert';
    $json ['msg'] = 'Não foi possível efetuar o cadastro';
endif;

echo json_encode($json);