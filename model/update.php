<?php
session_start();

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
    $placeKey[] = $Key . ' = :' . $Key;
endforeach;
$places = implode(', ', $placeKey);

$tabela = 'clientes';
$referencia = 'cli_id';
$update = "update {$tabela} set {$places} where {$referencia} = {$id}";
$sth = $pdo->prepare($update);
if($sth ->execute($dados)){
    $_SESSION["mensagem"] = "Atualização efetuada com sucesso!";
    
    $json ['error'] = 'success';
    $json ['msg'] = 'Atualização efetuada com sucesso';
}
else{
    $json ['error'] = 'error insert';
    $json ['msg'] = 'Não foi possível efetuar a atualização';
}

echo json_encode($json);
