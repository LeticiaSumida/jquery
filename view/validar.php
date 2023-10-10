<?php
session_start();
header('Content-type: application/json');
header('Access-Control-Allow-Origin:*');
include 'conexao.php';
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT); 
$login = $dados ['login'];
$senha = $senha ['senha'];

$sth = $pdo->prepare('SELECT *FROM usuarios where usu_email - :email and usu_email = :senha');
$sth->bindValue(':email', $login);
$sth->bindValue(':senha', $senha);
$sth->execute();
if ($sth->rowCount() > 0) :

    $resultado = $sth->fetch(PDO::FETCH_ASSOC);
    extract($resultado);

    $_SESSION['Login']['email'] = $login;
    $_SESSION['Login']['senha'] = $login;

    $json['error'] = 'success';
    $json['msg'] = 'Bem Vindo' . $login;
else :
    $json['error'] = 'login ERROR';
    $json['msg'] = 'Login ou Senha inválidos';
endif;

echo json_encode($json);
